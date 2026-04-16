@extends('admin.layout')

@section('content')

<div class="container-fluid dashboard">

    <!-- Title -->
    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap">
        <h2 class="fw-bold">Dashboard</h2>
        <span class="text-muted">Welcome Admin 👋</span>
    </div>


    <!-- <div class="text-end mb-4">
        <form method="GET" action="{{ route('admin.dashboard') }}">
            <input type="month" name="month" value="{{ request('month') }}">
            <button class="btn btn-primary btn-sm">Filter</button>
        </form>
        <h6 class="text-muted">
            Showing data for: {{ $month->format('F Y') }}
        </h6>
    </div> -->

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
                    <h6>Rooms Monthly Revenue</h6>
                    <h2>₹{{ number_format($monthlyRevenue, 2) }}</h2>
                </div>
                <div class="icon">💰</div>
            </div>
        </div>

        <div class="col-lg-4 col-md-12">
            <div class="card stat-card shadow-sm">
                <div>
                    <h6>Food Monthly Revenue</h6>
                    <h2>₹{{ number_format($monthlyFoodRevenue, 2) }}</h2>
                </div>
                <div class="icon">💰</div>
            </div>
        </div>

    </div>


    <div class="card shadow-sm p-3 mb-3">
        <form method="GET" action="{{ route('admin.dashboard') }}" class="d-flex align-items-center justify-content-between flex-wrap gap-2">

            <div>
                <label class="fw-bold mb-1">Select Month</label>
                <input type="month"
                    name="month"
                    class="form-control"
                    value="{{ request('month', now()->format('Y-m')) }}">
            </div>
            <div class="text-center">
                <p class="text-muted"><b>Total Revenue (Room / Food)</b></p>
                <h4><b> ₹{{ number_format($monthlyFoodRevenue+$monthlyRevenue ) }}</b></h4>

            </div>
            <div class="mt-2">
                <button class="btn btn-dark px-4">
                    🔍 Filter
                </button>
            </div>

        </form>
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
                        <th style="width:160px; min-width: 160px;">Room Selection</th>
                        <th>Check-In</th>
                        <th>Check-Out</th>
                        <th>Rooms</th>
                        <th>Room No.</th>
                        <th>Price</th>
                        <th class="text-center">Food Cost</th>
                        <th>View Details</th>

                    </tr>
                </thead>

                <tbody>
                    @foreach($bookings as $booking)
                    <tr>
                        <td>{{ $booking->name }}</td>
                        <td>{{ $booking->mobile }}</td>
                        <td style="width:160px; min-width: 160px;">
                            @foreach(explode(',', $booking->room_type) as $room)
                            {{ $room }} <br>
                            @endforeach
                        </td>
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

                        <td class="text-center fw-bold text-primary">
                            ₹{{ number_format($booking->food_total, 2) }}
                        </td>

                        <td class="text-center">
                            @if($booking->status == 'confirmed')
                            <a href="{{ route('bill.pdf', $booking->id) }}" class="btn btn-secondary btn-sm m-1">
                                View Bill
                            </a>
                            @else($booking->status == 'rejected')
                            <span class="badge bg-danger px-2 py-2">Rejected</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td class="py-3 fw-bold text-dark text-end" colspan="6">Total Revenue:</td>
                        <td class="fw-bold text-success">₹{{ number_format($totalRevenue, 2) }}</td>
                        <td class="fw-bold text-primary text-center">₹{{ number_format($monthlyFoodRevenue, 2) }}</td>

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