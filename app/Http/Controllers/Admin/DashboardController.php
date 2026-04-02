<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
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

    return view('admin.dashboard', compact(
        'bookings',
        'totalRevenue',
        'monthlyBookings',
        'monthlyRevenue'
    ));
}
}