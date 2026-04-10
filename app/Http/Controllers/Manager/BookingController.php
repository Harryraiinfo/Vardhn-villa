<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::latest()->paginate(10);
        return view('manager.bookings.index', compact('bookings'));
    }
    public function bill($id)
    {
        $booking = Booking::findOrFail($id);

        return view('manager.bill', compact('booking', 'days'));
    }

    public function updateStatus($id, $status)
    {
        $booking = Booking::findOrFail($id);

        if ($status === 'confirmed') {
            if ($booking->room_number){
                $booking->status = 'confirmed';
                $booking->save();
                return back()-> with('success', 'booking confirmed with existing room');
            }

            $rooms = ['101', '102', '103', '104', '105', '106'];
            $assignedRooms = [];

            foreach ($rooms as $room) {

                $isBooked = Booking::where('status', 'confirmed')
                    ->whereNotNull('room_number')
                    ->get()
                    ->filter(function ($b) use ($room, $booking) {

                        $bookedRooms = json_decode($b->room_number, true);

                        if (!in_array($room, $bookedRooms)) return false;


                        return (
                            ($booking->check_in >= $b->check_in && $booking->check_in < $b->check_out) ||
                            ($booking->check_out > $b->check_in && $booking->check_out <= $b->check_out) ||
                            ($booking->check_in <= $b->check_in && $booking->check_out >= $b->check_out)
                        );
                    })
                    ->count() > 0;

                if (!$isBooked) {
                    $assignedRooms[] = $room;
                }

                if (count($assignedRooms) == $booking->rooms) break;
            }

            if (count($assignedRooms) < $booking->rooms) {
                return back()->with('error', 'Not enough rooms available ');
            }

            $booking->room_number = json_encode($assignedRooms);
            $booking->status = 'confirmed';
            $booking->save();

            return back()->with('success', 'Rooms assigned: ' . implode(',', $assignedRooms));
        }

        if ($status === 'rejected') {
            $booking->status = 'rejected';


            $booking->price = null;


            $booking->room_number = null;

            $booking->save();
        }

        return back()->with('success', 'Booking updated');
    }

    public function updatePrice(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);

        $request->validate([
            'price' => 'required|numeric|min:0'
        ]);

        $booking->price = $request->price;
        $booking->save();

        return back()->with('success', 'Price updated successfully ');
    }
}
