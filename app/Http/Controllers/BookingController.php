<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Carbon\Carbon;

class BookingController extends Controller
{
   public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'mobile' => 'required',
        'email' => 'required|email',
        'check_in' => 'required|date',
        'check_out' => 'required|date|after:check_in',
        'adults' => 'required|integer',
        'room_type' => 'required',
        'rooms' => 'required|integer|min:1|max:6',
    ]);

    $totalRooms = 6;

$checkIn = Carbon::parse($request->check_in . ' ' . config('hotel.check_in_time'));
$checkOut = Carbon::parse($request->check_out . ' ' . config('hotel.check_out_time'));

   
   $bookings = Booking::whereIn('status', ['pending', 'confirmed'])
    ->get()
    ->filter(function ($booking) use ($checkIn, $checkOut) {

        $existingCheckIn = Carbon::parse($booking->check_in . ' ' . config('hotel.check_in_time'));
        $existingCheckOut = Carbon::parse($booking->check_out . ' ' . config('hotel.check_out_time'));

        return ($existingCheckIn < $checkOut) && ($existingCheckOut > $checkIn);
    });

  
    $roomsBooked = 0;

    foreach ($bookings as $booking) {
        $rooms = json_decode($booking->room_number, true);

        if (is_array($rooms)) {
            $roomsBooked += count($rooms);
        } else {
    $roomsBooked += $booking->rooms; // correct
}
    }

    $availableRooms = $totalRooms - $roomsBooked;

   
    if ($request->rooms > $availableRooms) {
        return back()->with('error', 'Rooms are currently full . please contact the manager +918787878787');
    }

    \App\Models\Booking::create($request->all());

    return back()->with('success', 'Booking submitted successfully ✅');
}
}