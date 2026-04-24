@extends('layouts.app')

@section('title', 'Food - Vardhn Villa')

@section('content')

<!-- -- HERO ---->
<section class="food-hero">
    <div class="overlay">
        <h1 data-aos="fade-up">Delicious Food</h1>
        <p data-aos="fade-up" data-aos-delay="200">Taste the Best of Himachal & Indian Cuisine</p>
    </div>
</section>

<!-- -- FOOD MENU -- -->
<section class="food-section">
    <div class="container">
        <h2 data-aos="fade-up">Our Special Menu</h2>
        <div class="food-grid">
            <div class="food-card" data-aos="zoom-in">
                <img src="{{ asset('Images/Food-img/breakfast.webp') }}" alt="Breakfast">
                <h3>Breakfast</h3>
                <p>Fresh & healthy morning meals.</p>
            </div>

            <div class="food-card" data-aos="zoom-in" data-aos-delay="200">
                <img src="{{ asset('Images/Food-img/lunch.webp') }}" alt="Lunch">
                <h3>Lunch</h3>
                <p>Authentic North Indian flavors.</p>
            </div>

            <div class="food-card" data-aos="zoom-in" data-aos-delay="400">
                <img src="{{ asset('Images/Food-img/dinner.webp') }}" alt="Dinner">
                <h3>Dinner</h3>
                <p>Delicious meals with mountain view.</p>
            </div>
        </div>
    </div>
</section>

<!-- -- SPECIAL DISHES ---->
<section class="special-dishes">
    <h2 data-aos="fade-up">Special Dishes</h2>
    <div class="dish-grid">
        <div class="dish-card" data-aos="fade-up">
            <img src="{{ asset('Images/Food-img/Paneer-Butter.webp') }}" alt="Paneer Butter Masala">
            <div class="overlay-text">Paneer Butter Masala</div>
        </div>

        <div class="dish-card" data-aos="fade-up" data-aos-delay="200">
            <img src="{{ asset('Images/Food-img/Himachali-Thali.webp') }}" alt="Himachali Thali">
            <div class="overlay-text">Himachali Thali</div>
        </div>

        <div class="dish-card" data-aos="fade-up" data-aos-delay="400">
            <img src="{{ asset('Images/Food-img/Chicken-Curry.webp') }}" alt="Chicken Curry">
            <div class="overlay-text">Chicken Curry</div>
        </div>
    </div>
</section>

<!-- -- CTA -- -->
<section class="food-cta bg-dark">
    <h2 data-aos="zoom-in">Experience Delicious Food Today 🍽️</h2>
    <a href="#" class="btn btn-outline-warning">View Full Menu</a>
</section>
@endsection