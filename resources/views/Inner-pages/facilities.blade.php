@extends('layouts.app')

@section('title', 'Facilities - Vardhn Villa')

@section('content')

<!-- HERO -->
<section class="facilities-hero">
    <div class="overlay">
        <h1 data-aos="fade-up">Our Facilities</h1>
        <p data-aos="fade-up" data-aos-delay="200">
            Comfort, Luxury & Nature Together
        </p>
    </div>
</section>

<!-- FACILITIES GRID -->
<section class="facilities-section">
    <div class="container">
        <div class="facility-grid">
            <div class="facility-card" data-aos="zoom-in">
                <img src="{{ asset('Images/Img/Bed-room-02.jpeg') }}" alt="Luxury Rooms">
                <h3>Luxury Rooms</h3>
                <p>Spacious rooms with mountain views.</p>
            </div>

            <div class="facility-card" data-aos="zoom-in" data-aos-delay="100">
                <img src="{{ asset('Images/Img/wifi.png') }}" alt="Free WiFi">
                <h3>Free WiFi</h3>
                <p>High-speed internet throughout the villa.</p>
            </div>

            <div class="facility-card" data-aos="zoom-in" data-aos-delay="200">
                <img src="{{ asset('Images/Img/parking.png') }}" alt="Parking">
                <h3>Parking</h3>
                <p>Secure parking for all guests.</p>
            </div>

            <!-- <div class="facility-card" data-aos="zoom-in" data-aos-delay="300">
                <img src="{{ asset('Images/Img/Restaurant.png') }}" alt="Restaurant">
                <h3>Restaurant</h3>
                <p>Delicious food with local flavors.</p>
            </div> -->

            <div class="facility-card" data-aos="zoom-in" data-aos-delay="500">
                <img src="{{ asset('Images/Img/dining-Room.png') }}" alt="Dining Room">
                <h3>Dining Room</h3>
                <p>Enjoy food with your family and friends.</p>
            </div>

            <div class="facility-card" data-aos="zoom-in" data-aos-delay="500">
                <img src="{{ asset('Images/Img/balcony-with-view.png') }}" alt="Balcony View">
                <h3>Balcony with Stunning View</h3>
                <p>Beautiful Himalayan mountain view.</p>
            </div>

            <div class="facility-card" data-aos="zoom-in" data-aos-delay="500">
                <img src="{{ asset('Images/Img/mini-Freezer.png') }}" alt="Mini Freezer">
                <h3>Mini Freezer</h3>
                <p>Store food items and drinks.</p>
            </div>

            <div class="facility-card" data-aos="zoom-in" data-aos-delay="500">
                <img src="{{ asset('Images/Img/natrue-view.jpeg') }}" alt="Nature View">
                <h3>Nature View</h3>
                <p>Beautiful Himalayan mountain scenery.</p>
            </div>

            <div class="facility-card" data-aos="zoom-in" data-aos-delay="500">
                <img src="{{ asset('Images/Img/loby.jpeg') }}" alt="Television">
                <h3>Television</h3>
                <p>Enjoy television with your family and friends.</p>
            </div>

            <div class="facility-card" data-aos="zoom-in" data-aos-delay="500">
                <img src="{{ asset('Images/Img/laundry.png') }}" alt="Laundry">
                <h3>Laundry</h3>
                <p>24/7 available laundry service.</p>
            </div>

            <div class="facility-card" data-aos="zoom-in" data-aos-delay="400">
                <img src="{{ asset('Images/Img/Hot-water.png') }}" alt="Hot Water">
                <h3>Hot Water</h3>
                <p>24/7 hot & cold water supply.</p>
            </div>
        </div>
    </div>
</section>

@endsection