@extends('layouts.app')

@section('title', 'About Us - VARDHN VILLA')

@section('content')
<section class="about-hero">
    <div class="overlay">
        <h1 data-aos="fade-up" style="color:#ffc107; font-weight: 700;">About Us</h1>
        <p data-aos="fade-up" data-aos-delay="200">Experience Luxury in the Heart of Himachal</p>
    </div>
</section>

<section class="about-content py-4 ">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 mb-3">
                <div class="about-text" data-aos="fade-up" data-aos-delay="100">
                    <h2 style="font-weight: 600;">Welcome to Vardhn Villa</h2>
                    <p> Vardhn Villa is a luxurious homestay located in Sarahan, Himachal Pradesh. Surrounded by breathtaking mountain views, we offer a peaceful and premium stay experience for travelers. </p>

                    <p> Our villa is designed with modern architecture and comfort in mind. Whether you are here for relaxation or adventure, we ensure a memorable stay. </p>

                    <ul>
                        <li>✔ 6 Luxury Rooms</li>
                        <li>✔ Mountain View Balconies</li>
                        <li>✔ 24/7 Hot & Cold Water</li>
                        <li>✔ Delicious Local Food</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="about-image" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('images/Img/bed-room-2.jpeg') }}" alt="Villa Image">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WHY CHOOSE US -->
<section class="why-us">
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
</section>

@endsection