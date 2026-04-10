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
        $days = $this->calculateDays($booking->check_in, $booking->check_out);

        return view('bill', compact('booking', 'days'));
    }

    public function downloadPDF($id)
    {
        $booking = Booking::findOrFail($id);

        $days = $this->calculateDays($booking->check_in, $booking->check_out);

        // Fetch food items (if stored in DB)
        $foodItems = FoodBill::where('booking_id', $id)->get();

        $pdf = Pdf::loadView('bill_pdf', compact('booking', 'days', 'foodItems'));

        return $pdf->download('invoice_' . $booking->id . '.pdf');
    }
}
