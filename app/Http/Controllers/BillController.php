<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Booking;

class BillController extends Controller
{
    private function calculateDays($checkin, $checkout)
    {
        $checkinTime = strtotime($checkin. '14:00:00');
        $checkoutTime = strtotime($checkout. '12:00:00');
        $days = ($checkinTime - $checkoutTime) / (60 * 60 * 24);
        return max(1, ceil($days));
    }

    public function show($id)
    {
        $booking = Booking::findOrFail($id);
        $days = $this->calculateDays($booking->checkin, $booking->checkout);
        return view('bill', compact('booking', 'days'));
    }

    public function download($id)
    {
        $booking = Booking::findOrFail($id);

        $pdf = Pdf::loadView('bill_pdf', compact('booking'));

        return $pdf->download('invoice_' . $id . '.pdf');
    }
}
