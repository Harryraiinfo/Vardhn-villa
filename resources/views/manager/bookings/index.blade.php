@extends('manager.layout')

@section('content')

<div class="container-fluid">

    <h4 class="mb-3">📅 Booking Management</h4>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- CARD -->
    <div class="card">
        <div class="card-body p-2 p-md-3">

            <!-- MOBILE SCROLL FIX -->
            <div class="table-responsive">

                <table class="table table-hover align-middle text-nowrap ">

                    <thead class="table-dark">
                        <tr>
                            <th>Guest</th>
                            <th>Mobile</th>
                            <th>Dates</th>
                            <th>Rooms</th>
                            <th style="width:180px; min-width: 160px;">Assigned</th>
                            <th style="width:180px; min-width: 160px;">Price</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($bookings as $booking)
                        <tr>

                            <!-- GUEST -->
                            <td>
                                <div>
                                    <strong>{{ $booking->name }}</strong><br>
                                    <!-- <small>{{ $booking->mobile }}</small> -->
                                </div>
                            </td>
                            <td>{{ $booking->mobile }}</td>
                            <!-- DATES -->
                            <td>
                                <small>
                                    <b>In:</b> {{ $booking->check_in }} <br>
                                    <b>Out:</b> {{ $booking->check_out }}
                                </small>
                            </td>

                            <!-- ROOMS -->
                            <td>{{ $booking->rooms }}</td>

                            <!-- ROOM NUMBER -->
                            <td>
                                @if($booking->status !== 'rejected')
                                <form method="POST" action="{{ route('manager.booking.updateRoom', $booking->id) }}">
                                    @csrf
                                    <div class="input-group input-group-sm">
                                        <input type="text"
                                            name="room_number"
                                            value="{{ is_array(json_decode($booking->room_number, true)) ? implode(', ', json_decode($booking->room_number, true)) : $booking->room_number }}"
                                            class="form-control"
                                            required>
                                        <button type="submit" class="btn btn-primary btn-sm">Save</button>
                                    </div>
                                </form>
                                @else
                                <span class="text-muted">Not Assigned</span>
                                <!-- <span class="text-muted"> -- </span> -->
                                @endif
                            </td>
 

                            <!-- PRICE -->
                            <td>
                                @if($booking->status !== 'rejected')

                                <form method="POST" action="{{ route('manager.booking.price', $booking->id) }}">
                                    @csrf

                                    <div class="input-group input-group-sm">
                                        <span class="input-group-text">₹</span>

                                        <input type="number" name="price" value="{{ $booking->price }}" class="form-control" required>

                                        <button class="btn btn-primary btn-sm"> Save </button>
                                    </div>
                                </form>

                                @else
                                <span class="text-muted">Not Allowed</span>
                                <!-- <span class="text-muted"> -- </span> -->
                                @endif
                            </td>

                            <!-- STATUS -->
                            <td class="text-center">
                                @if($booking->status == 'pending')
                                <span class="badge bg-warning text-dark">Pending</span>
                                @elseif($booking->status == 'confirmed')
                                <span class="badge bg-success">Confirmed</span>
                                @else
                                <span class="badge bg-danger">Rejected</span>
                                @endif
                            </td>

                            <!-- ACTION -->
                            <td class="text-center">
                                <div class="d-flex flex-column flex-md-row gap-1 justify-content-center">

                                    <a href="{{ route('manager.booking.status', [$booking->id, 'confirmed']) }}" class="btn btn-success btn-sm m-1">
                                        Confirm
                                    </a>

                                    <a href="{{ route('manager.booking.status', [$booking->id, 'rejected']) }}" class="btn btn-danger btn-sm m-1">
                                        Reject
                                    </a>

                                </div>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>

                </table>

            </div>
        </div>
    </div>

    <!-- PAGINATION -->
    <div class="mt-3">
        {{ $bookings->links() }}
    </div>

</div>
@endsection