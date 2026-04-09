<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\FoodBill;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {

        $bookings = Booking::where('status', 'confirmed')
            ->latest()
            ->paginate(10);


        $totalRevenue = Booking::where('status', 'confirmed')->sum('price');


        $startOfMonth = Carbon::now()->startOfMonth();
        $endOfMonth = Carbon::now()->endOfMonth();


        $monthlyBookings = Booking::where('status', 'confirmed')
            ->whereBetween('check_in', [$startOfMonth, $endOfMonth])
            ->count();


        $monthlyRevenue = Booking::where('status', 'confirmed')
            ->whereBetween('check_in', [$startOfMonth, $endOfMonth])
            ->sum('price');

        $monthlyFoodRevenue = FoodBill::whereBetween('created_at', [$startOfMonth, $endOfMonth])
            ->whereHas('booking', function ($q) {
                $q->where('status', 'confirmed');
            })
            ->sum('total');

        // $bookings = Booking::latest()->get();

        foreach ($bookings as $booking) {
            $booking->food_total = FoodBill::where('booking_id', $booking->id)
                ->whereHas('booking', function ($q) {
                    $q->where('status', 'confirmed');
                })
                ->sum('total');
        }


        $monthlyBookings = Booking::count();
        $monthlyRevenue = Booking::sum('price');
        $totalRevenue = Booking::sum('price');

        return view('admin.dashboard', compact(
            'bookings',
            'totalRevenue',
            'monthlyBookings',
            'monthlyRevenue',
            'monthlyFoodRevenue'

        ));
    }
}
