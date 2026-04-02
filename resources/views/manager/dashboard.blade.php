@extends('manager.layout')

@section('content')

<h2>Welcome Manager </h2>

<div class="row justify-content-center mt-4">
    <div class="col-md-4">
        <div class="card p-3 shadow">
            <h5>Total Bookings</h5>
            <h3>{{ $totalBookings }}</h3>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-3 shadow">
            <h5>Pending Bookings</h5>
            <h3>{{ $pendingBookings }}</h3>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-3 shadow">
            <h5>Confirmed Bookings</h5>
            <h3>{{ $confirmedBookings }}</h3>
        </div>
    </div>
</div>

@endsection