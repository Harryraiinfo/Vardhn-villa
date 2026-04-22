<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Review;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
   public function index()
    {
        $totalBookings = Booking::count();

        $pendingBookings = Booking::where('status', 'pending')->count();

        $confirmedBookings = Booking::where('status', 'confirmed')->count();

        return view('manager.dashboard', compact(
            'totalBookings',
            'pendingBookings',
            'confirmedBookings'
        ));
    }
    public function manage()
{
    $reviews = Review::latest()->get(); // 👈 sab reviews (pending + approved)

    return view('manager.reviews.index', compact('reviews'));
}
}