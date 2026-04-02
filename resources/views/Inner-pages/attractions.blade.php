@extends('layouts.app')

@section('title', 'Attractions - Vardhn Villa')

@section('content')

<!-- HERO -->
<section class="attraction-hero">
    <div class="overlay">
        <h1 data-aos="fade-up" style="color:#ffc107; font-weight: 700;">Nearby Attractions</h1>
        <p data-aos="fade-up" data-aos-delay="200">
            Explore Beautiful Places Around Us
        </p>
    </div>
</section>

<!-- ATTRACTIONS -->
<section class="attraction-section">
    <div class="container">

        <div class="attraction-card" data-aos="fade-up">
            <img src="{{ asset('images/Banner-img/Bhimakali Temple.webp') }}" alt="Bhimakali Temple">
            <div class="info">
                <h3>Bhimakali Temple</h3>
                <p>Famous ancient temple just 1km from villa.</p>
            </div>
        </div>

        <div class="attraction-card" data-aos="fade-up" data-aos-delay="200">
            <img src="{{ asset('images/Banner-img/Royal Palace.jpeg') }}" alt="Royal Palace">
            <div class="info">
                <h3>Royal Palace</h3>
                <p>Historic palace with unique architecture.</p>
            </div>
        </div>

        <div class="attraction-card" data-aos="fade-up" data-aos-delay="400">
            <img src="{{ asset('images/Banner-img/bird.jpeg') }}" alt="Bird Park">
            <div class="info">
                <h3>Bird Park</h3>
                <p>Nature park with rare Himalayan birds.</p>
            </div>
        </div>

        <div class="attraction-card" data-aos="fade-up" data-aos-delay="600">
            <img src="{{ asset('images/Banner-img/waterfalls.jpeg') }}" alt="Bhagawat Waterfall">
            <div class="info">
                <h3>Bhagawat Waterfall</h3>
                <p>Beautiful waterfall just near the villa.</p>
            </div>
        </div>

    </div>
</section>

<!-- CTA -->
<section class="attraction-cta">
    <h2 data-aos="zoom-in">Plan Your Trip Today 🌄</h2>
    <a href="{{ route('booking') }}" class="btn btn-outline-warning">Book Your Stay</a>
</section>

@endsection