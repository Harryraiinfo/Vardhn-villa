@extends('manager.layout')

@section('content')

<h4 class="mb-4">Welcome Back 👋</h4>

<div class="row g-3">

    <div class="col-md-4 px-2">
        <div class="card-box">
            <h6>Total Bookings</h6>
            <h3>{{ $totalBookings }}</h3>
            <i class="bi bi-bar-chart fs-1 text-warning"></i>
        </div>
    </div>

    <div class="col-md-4 px-2">
        <div class="card-box">
            <h6>Pending</h6>
            <h3>{{ $pendingBookings }}</h3>
            <i class="bi bi-hourglass-split fs-1 text-danger"></i>
        </div>
    </div>

    <div class="col-md-4 px-2">
        <div class="card-box">
            <h6>Confirmed</h6>
            <h3>{{ $confirmedBookings }}</h3>
            <i class="bi bi-check-circle fs-1 text-success"></i>
        </div>
    </div>

</div>

<div class="row g-3 py-5">
    <div class="">
        <p class="text-center">

            <a class="btn btn-warning " href="{{ route('manager.bookings') }}">
                <i class="bi bi-calendar-check"></i>
                Check New Bookings
            </a>
        </p>
    </div>
</div>

@endsection