<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Booking;
use App\Models\FoodBill;

class BillController extends Controller
{
    private function calculateDays($checkin, $checkout)
    {
        if (!$checkin || !$checkout) {
            return 1;
        }

        $checkinTime = strtotime($checkin . '14:00:00');
        $checkoutTime = strtotime($checkout . '12:00:00');

        $days = ($checkoutTime - $checkinTime) / (60 * 60 * 24);
        return max(1, ceil($days));
    }


    public function show($id)
    {
        $booking = Booking::findOrFail($id);

        // 🔒 Invoice generate only once
        if (!$booking->invoice_no) {

            $lastInvoice = Booking::whereNotNull('invoice_no')
                ->orderBy('id', 'desc')
                ->first();

            if ($lastInvoice) {
                $lastNumber = (int) str_replace('INV-', '', $lastInvoice->invoice_no);
                $newInvoice = 'INV-' . str_pad($lastNumber + 1, 4, '0', STR_PAD_LEFT);
            } else {
                $newInvoice = 'INV-100';
            }

            $booking->invoice_no = $newInvoice;
            $booking->save();
        }

        $days = $this->calculateDays($booking->check_in, $booking->check_out);

        $foodItems = FoodBill::where('booking_id', $id)->get();

        return view('bill', compact('booking', 'days', 'foodItems'));
    }


    public function downloadPDF($id)
    {
        $booking = Booking::findOrFail($id);

        // 🔒 Ensure invoice exists
        if (!$booking->invoice_no) {

            $lastInvoice = Booking::whereNotNull('invoice_no')
                ->orderBy('id', 'desc')
                ->first();

            if ($lastInvoice) {
                $lastNumber = (int) str_replace('INV-', '', $lastInvoice->invoice_no);
                $newInvoice = 'INV-' . str_pad($lastNumber + 1, 4, '0', STR_PAD_LEFT);
            } else {
                $newInvoice = 'INV-100';
            }

            $booking->invoice_no = $newInvoice;
            $booking->save();
        }

        $days = $this->calculateDays($booking->check_in, $booking->check_out);

        $foodItems = FoodBill::where('booking_id', $id)->get();

        $pdf = Pdf::loadView('bill_pdf', compact('booking', 'days', 'foodItems'));

        return $pdf->download('invoice_' . $booking->invoice_no . '.pdf');
    }
}
