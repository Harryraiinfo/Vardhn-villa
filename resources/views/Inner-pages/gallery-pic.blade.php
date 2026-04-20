@extends('layouts.app')

@section('title', 'Gallery-pic - Vardhn Villa')

@section('content')

<!-- HERO -->
<section class="gallery-hero">
    <div class="overlay">
        <h1 data-aos="fade-up">Our Gallery</h1>
        <p data-aos="fade-up" data-aos-delay="200">
            A visual tour to Vardhn Villa
        </p>
    </div>
</section>


<!-- Gallery Section -->

<section class="gallery-section">
    <div class="container">
        <!-- <h2 style="color: #ffc107;" data-aos="fade-up">Our Photo
            Gallery</h2> -->
        <!-- <p style="color: rgb(195 131 42);" class="subtitle" data-aos="fade-up" data-aos-delay="200">A visual tour to Vardhn Villa </p> -->

        <div class="gallery-grid">
            @foreach($images as $img)
            <div class="gallery-item">
                <img src="{{ asset('gallery/'.$img->image) }}" alt="Gallery Image">
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection