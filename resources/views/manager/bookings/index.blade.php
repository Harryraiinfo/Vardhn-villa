@extends('manager.layout')

@section('content')

<h2>Bookings</h2>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>Mobile</th>
            <th>Check-In</th>
            <th>Check-Out</th>
            <th>Rooms</th>
            <th>Room</th>
            <th>Price</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach($bookings as $booking)
        <tr>
            <td>{{ $booking->name }}</td>
            <td>{{ $booking->mobile }}</td>
            <td>{{ $booking->check_in }}</td>
            <td>{{ $booking->check_out }}</td>
            <td>{{ $booking->rooms }}</td>

            <td>
                @if($booking->room_number)

                @php
                $rooms = json_decode($booking->room_number, true);
                @endphp

                @if(is_array($rooms))
                {{ implode(', ', $rooms) }}
                @else
                {{ $booking->room_number }}
                @endif

                @else
                Not Assigned
                @endif
            </td>

            <td>
                @if($booking->status !== 'rejected')

                <form method="POST" action="{{ route('manager.booking.price', $booking->id) }}">
                    @csrf

                    <div class="d-flex">
                        <input type="number"
                            name="price"
                            value="{{ $booking->price }}"
                            class="form-control form-control-sm me-1"
                            placeholder="₹"
                            style="width:100px;"
                            required>

                        <button class="btn btn-primary btn-sm">Save</button>
                    </div>
                </form>

                @else

                <span class="text-muted">Not Allowed</span>

                @endif
            </td>

            <td>
                <span class="badge 
                    @if($booking->status == 'pending') bg-warning
                    @elseif($booking->status == 'confirmed') bg-success
                    @else bg-danger
                    @endif">
                    {{ ucfirst($booking->status) }}
                </span>
            </td>
            <td>
                <a href="{{ route('manager.booking.status', [$booking->id, 'confirmed']) }}"
                    class="btn btn-success btn-sm">Confirm</a>

                <a href="{{ route('manager.booking.status', [$booking->id, 'rejected']) }}"
                    class="btn btn-danger btn-sm">Reject</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="mt-3">
    {{ $bookings->links() }}
</div>
@endsection