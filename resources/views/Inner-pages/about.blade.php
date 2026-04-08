@extends('layouts.app')

@section('title', 'About Us - VARDHN VILLA')

@section('content')
<section class="about-hero">
    <div class="overlay">
        <h1 data-aos="fade-up">About Us</h1>
        <p data-aos="fade-up" data-aos-delay="200">Experience Luxury in the Heart of Himachal</p>
    </div>
</section>

<section class="about-content py-4 ">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 mb-3">
                <div class="about-text" data-aos="fade-up" data-aos-delay="100">
                    <h2 style="font-weight: 600;">Welcome to Vardhn Villa</h2>
                    <p> Vardhn Villa is a luxurious homestay located in Sarahan, Himachal Pradesh. Surrounded by breathtaking mountain views, we offer a peaceful and premium stay for the travelers. </p>

                    <p> Our villa is designed with modern architecture and comfort in mind. Whether you are here for relaxation or adventure, we ensure a memorable stay. </p>

                    <ul>
                        <li>✔ 6 Luxury Rooms</li>
                        <li>✔ Mountain View Balconies</li>
                        <li>✔ 24/7 Hot & Cold Water</li>
                        <li>✔ Delicious Local Food</li>
                        <li>✔ Free Wi-Fi</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="about-image" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('Images/Img/bed-room-2.jpeg') }}" alt="Vardhn Villa Bedroom">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WHY CHOOSE US -->
<!-- <section class="why-us">
    <div class="container-fluid">
        <h2>Why Choose Us</h2>
        <div class="why-grid">
            <div class="why-card" data-aos="fade-up" data-aos-delay="100">
                <h3>Luxury Stay</h3>
                <p>Experience comfort and elegance in every room.</p>
            </div>

            <div class="why-card" data-aos="fade-up" data-aos-delay="200">
                <h3>Beautiful Location</h3>
                <p>Enjoy stunning Himalayan views and peaceful nature.</p>
            </div>

            <div class="why-card" data-aos="fade-up" data-aos-delay="300">
                <h3>Best Service</h3>
                <p>Friendly staff and top-class hospitality.</p>
            </div>
        </div>
    </div>
</section> -->

<!-- WHY YOU'LL LOVE IT HERE -->
<section class="why-love py-5" style="background: #f9f9f9;">
    <div class="container">
        <h2 class="text-center mb-4" data-aos="fade-up" style="color: #ffc107; font-weight: 700;">
            Why You’ll Love It Here
        </h2>

        <div class="row g-4">

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-card p-4 h-100" style="background: #fff; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
                    <h4 style="color:#c3872a;">Alpine Luxury</h4>
                    <p>Choose from <strong>6 exquisitely designed rooms</strong> where modern architecture meets cozy comfort.</p>
                </div>
            </div>

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-card p-4 h-100" style="background: #fff; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
                    <h4 style="color:#c3872a;">Views for Days</h4>
                    <p>Wake up to golden sunrises on your <strong>private mountain-view balcony</strong>.</p>
                </div>
            </div>

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-card p-4 h-100" style="background: #fff; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
                    <h4 style="color:#c3872a;">A Taste of Himachal</h4>
                    <p>Savor the soul-satisfying flavors of <strong>authentic, delicious local cuisine</strong> prepared with love.</p>
                </div>
            </div>

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="feature-card p-4 h-100" style="background: #fff; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
                    <h4 style="color:#c3872a;">Modern Comforts</h4>
                    <p>Enjoy the peace of the wilderness with the convenience of <strong>24/7 hot and cold water</strong>.</p>
                </div>
            </div>

        </div>

        <div class="mt-4 text-center" data-aos="fade-up" data-aos-delay="500">
            <p>Whether you're seeking a quiet corner to write your next book or a basecamp for your Himalayan adventures, <strong>Vardhn Villa</strong> is where your journey begins.</p>
            <a href="{{ route('booking') }}" class="btn btn-warning btn-lg mt-2">Book Your Stay Now</a>
        </div>
    </div>
</section>

@endsection