@extends('layouts.app')

@section('title', 'Attractions - Vardhn Villa')

@section('content')

<!-- HERO -->
<section class="attraction-hero">
    <div class="overlay">
        <h1 data-aos="fade-up">Nearby Attractions</h1>
        <p data-aos="fade-up" data-aos-delay="200">
            Explore Beautiful Places Around Us
        </p>
    </div>
</section>

<!-- ATTRACTIONS -->
<section class="attraction-section">
    <div class="container">

        <div class="attraction-card" data-aos="fade-up">
            <img class="img-fluid h-auto" src="{{ asset('Images/Banner-img/Bhimakali-Temple.jpeg') }}" alt="Bhimakali Temple">
            <div class="info">
                <h3>Bhimakali Temple</h3>
                <h6>Bhimakali Temple- Famous Ancient Temple 1km Away From The Villa.</h6>
                <p>Bhim Kali temple is an ancient historic temple dedicated to goddess Bhima Kali , a reincarnation of Goddess Durga. It happens to be the presiding deity of the Royal Family of Bushahr dynasty. The beautiful temple is a
                    remarkable example of kathkuni architectural structure that not just offers you the home for worship but a place to acknowledge the beauty of the unique traditional building techniques put in use.</p>
            </div>
        </div>

        <div class="attraction-card" data-aos="fade-up" data-aos-delay="200">
            <img class="img-fluid" src="{{ asset('Images/Banner-img/Royal-Palace.jpeg') }}" alt="Royal Palace">
            <div class="info">
                <h3>Royal Palace</h3>
                <h6>Historic palace with unique architecture.</h6>
                <p>Shanti Kunj is a beautiful traditional Palace of the royal family of the former Bushahr Kingdom. It was built by the late Bushahr King Raja Padam Singh in 1917. The beautiful wooden architecture of the palace makes it a bliss to the eyes and is worth experiencing.</p>
            </div>
        </div>

        <div class="attraction-card" data-aos="fade-up" data-aos-delay="200">
            <img class="img-fluid" src="{{ asset('Images/Banner-img/bird.jpeg') }}" alt="Bird Park">
            <div class="info">
                <h3>Bird Park</h3>
                <h6>Nature park with rare Himalayan birds.</h6>
                <p>A home to the state bird of Himachal Pradesh  western Tragopan, the bird park is a peaceful escape that <br>helps
                    you to resonate closely with the nature. 
                    It has various aviaries that inhabit different pheasants. <br>
                    Also, it is the only Conservation Breeding Centre of Western Tragopan in North India.</p>
            </div>
        </div>

        <div class="attraction-card" data-aos="fade-up" data-aos-delay="300">
            <img class="img-fluid" src="{{ asset('Images/Banner-img/waterfalls.jpeg') }}" alt="Bhagawat Waterfall">
            <div class="info">
                <h3>Bhagawat Waterfall</h3>
                <p>Beautiful waterfall just near the villa.</p>
            </div>
        </div>

        <div class="attraction-card" data-aos="fade-up" data-aos-delay="300">
            <img class="img-fluid" src="{{ asset('Images/Banner-img/Unu-Hot-Water-Spring.webp') }}" alt="Unu Hot Water Spring (12km)">
            <div class="info">
                <h3>Unu Hot Water Spring (12km)</h3>
                <p>Unu Hot Water Spring (12km) near the villa.</p>
            </div>
        </div>

        <div class="attraction-card" data-aos="fade-up" data-aos-delay="300">
            <img class="img-fluid" src="{{ asset('Images/Banner-img/bhaser-kanda-track.jpeg') }}" alt="Bashal-Kanda-Track">
            <div class="info">
                <h3>Bashal Kanda Track</h3>
                <p>Beautiful Bashal Kanda Track near the villa.</p>
            </div>
        </div>


        <div class="attraction-card" data-aos="fade-up" data-aos-delay="300">
            <img class="img-fluid" src="{{ asset('Images/Img/shrai-Koti-Temple.jpeg') }}" alt="shrai-Koti-Temple">
            <div class="info">
                <h3>Shrai Koti Temple Rampur</h3>
                <p>Shrai Koti Temple</p>
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