<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Booking;
use App\Models\FoodBill;
use Illuminate\Support\Facades\DB;

class BillController extends Controller
{
    private function calculateDays($checkin, $checkout)
    {
        if (!$checkin || !$checkout) {
            return 1;
        }

        $checkinTime = strtotime($checkin . ' 14:00:00');
        $checkoutTime = strtotime($checkout . ' 12:00:00');

        $days = ($checkoutTime - $checkinTime) / (60 * 60 * 24);

        return max(1, ceil($days));
    }

    /**
     * Generate invoice only once
     */
    private function generateInvoice($booking)
    {
        // Already generated
        if ($booking->invoice_no) {
            return $booking->invoice_no;
        }

        DB::transaction(function () use ($booking) {

            // Get all invoices
            $allInvoices = Booking::whereNotNull('invoice_no')
                ->select('invoice_no')
                ->lockForUpdate()
                ->get();

            // Starting number
            $maxNumber = 99;

            // Find highest invoice number
            foreach ($allInvoices as $invoice) {

                // Extract numbers only
                $number = (int) preg_replace('/[^0-9]/', '', $invoice->invoice_no);

                if ($number > $maxNumber) {
                    $maxNumber = $number;
                }
            }

            // New invoice number
            $newNumber = $maxNumber + 1;

            // Format invoice
            $booking->invoice_no = 'INV-' . str_pad($newNumber, 4, '0', STR_PAD_LEFT);

            // Save booking
            $booking->save();
        });

        return $booking->invoice_no;
    }
    public function show($id)
    {
        $booking = Booking::findOrFail($id);

        // Generate invoice safely
        $this->generateInvoice($booking);

        $days = $this->calculateDays($booking->check_in, $booking->check_out);

        $foodItems = FoodBill::where('booking_id', $id)->get();

        return view('bill', compact('booking', 'days', 'foodItems'));
    }

    public function downloadPDF($id)
    {
        $booking = Booking::findOrFail($id);

        // Generate invoice safely
        $this->generateInvoice($booking);

        $days = $this->calculateDays(
            $booking->check_in,
            $booking->check_out
        );

        $foodItems = FoodBill::where('booking_id', $id)->get();

        $pdf = Pdf::loadView(
            'bill_pdf',
            compact('booking', 'days', 'foodItems')
        );

        return $pdf->download(
            'invoice_' . $booking->invoice_no . '.pdf'
        );
    }
}
