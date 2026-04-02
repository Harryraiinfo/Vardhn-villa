@extends('admin.layout')

@section('content')

<div class="container-fluid dashboard">

    <!-- Title -->
    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap">
        <h2 class="fw-bold">Dashboard</h2>
        <span class="text-muted">Welcome Admin 👋</span>
    </div>

    <!-- Stats Cards -->
    <div class="row g-3 mb-4">

        <div class="col-lg-4 col-md-6">
            <div class="card stat-card shadow-sm">
                <div class="text-center">
                    <h6>Total Bookings</h6>
                    <h2>{{ $monthlyBookings }}</h2>
                </div>
                <div class="icon">📅</div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
            <div class="card stat-card shadow-sm">
                <div>
                    <h6>Monthly Revenue</h6>
                    <h2>₹{{ number_format($monthlyRevenue, 2) }}</h2>
                </div>
                <div class="icon">💰</div>
            </div>
        </div>

        <div class="col-lg-4 col-md-12">
            <div class="card stat-card shadow-sm">
                <div>
                    <h6>Total Revenue</h6>
                    <h2>₹{{ number_format($totalRevenue, 2) }}</h2>
                </div>
                <div class="icon">📊</div>
            </div>
        </div>

    </div>

    <!-- Booking Table -->
    <div class="card shadow-sm p-3 table-card">

        <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap">
            <h5 class="mb-0">Recent Bookings</h5>
        </div>

        <div class="table-responsive">
            <table class="table table-hover align-middle">

                <thead class="table-dark">
                    <tr>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Check-In</th>
                        <th>Check-Out</th>
                        <th>Rooms</th>
                        <th>Room No.</th>
                        <th>Price</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($bookings as $booking)
                    <tr>
                        <td>{{ $booking->name }}</td>
                        <td>{{ $booking->mobile }}</td>
                        <td>{{ \Carbon\Carbon::parse($booking->check_in)->format('d M Y') }}</td>
                        <td>{{ \Carbon\Carbon::parse($booking->check_out)->format('d M Y') }}</td>
                        <td>{{ $booking->rooms }}</td>

                        <td>
                            @if($booking->room_number)
                            @php $rooms = json_decode($booking->room_number, true); @endphp
                            @if(is_array($rooms))
                            {{ implode(', ', $rooms) }}
                            @else
                            {{ $booking->room_number }}
                            @endif
                            @else
                            -
                            @endif
                        </td>

                        <td class="fw-bold text-success">
                            ₹{{ number_format($booking->price, 2) }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td class="fw-bold text-dark text-end" colspan="6">Total Revenue:</td>
                        <td class="fw-bold text-success">₹{{ number_format($totalRevenue, 2) }}</td>
                    </tr>

                </tfoot>

            </table>
        </div>
        <!-- <div class="mt-4">
    <h4>Total Revenue: ₹{{ number_format($totalRevenue, 2) }}</h4>
</div> -->
    </div>

</div>

@endsection