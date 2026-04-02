{{-- resources/views/food.blade.php --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food - Vardhn Villa</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/Img/Vardan_Villa_logo.png') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- {{-- AOS CSS --}} -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>

<body>

    @include('partials.navbar')
    <!-- @include('partials.navbar') -->

    <!-- {{-- HERO --}} -->
    <section class="food-hero">
        <div class="overlay">
            <h1 data-aos="fade-up" style="color:#ffc107; font-weight: 700;">Delicious Food</h1>
            <p data-aos="fade-up" data-aos-delay="200">Taste the Best of Himachal & Indian Cuisine</p>
        </div>
    </section>

    <!-- {{-- FOOD MENU --}} -->
    <section class="food-section">
        <div class="container">
            <h2 data-aos="fade-up">Our Special Menu</h2>
            <div class="food-grid">
                <div class="food-card" data-aos="zoom-in">
                    <img src="{{ asset('images/Food-img/breakfast.webp') }}" alt="Breakfast">
                    <h3>Breakfast</h3>
                    <p>Fresh & healthy morning meals.</p>
                </div>

                <div class="food-card" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('images/Food-img/lunch.webp') }}" alt="Lunch">
                    <h3>Lunch</h3>
                    <p>Authentic North Indian flavors.</p>
                </div>

                <div class="food-card" data-aos="zoom-in" data-aos-delay="400">
                    <img src="{{ asset('images/Food-img/dinner.webp') }}" alt="Dinner">
                    <h3>Dinner</h3>
                    <p>Delicious meals with mountain view.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- {{-- SPECIAL DISHES --}} -->
    <section class="special-dishes">
        <h2 data-aos="fade-up">Special Dishes</h2>
        <div class="dish-grid">
            <div class="dish-card" data-aos="fade-up">
                <img src="{{ asset('images/Food-img/Paneer Butter.webp') }}" alt="Paneer Butter Masala">
                <div class="overlay-text">Paneer Butter Masala</div>
            </div>

            <div class="dish-card" data-aos="fade-up" data-aos-delay="200">
                <img src="{{ asset('images/Food-img/Himachali Thali.webp') }}" alt="Himachali Thali">
                <div class="overlay-text">Himachali Thali</div>
            </div>

            <div class="dish-card" data-aos="fade-up" data-aos-delay="400">
                <img src="{{ asset('images/Food-img/Chicken Curry.webp') }}" alt="Chicken Curry">
                <div class="overlay-text">Chicken Curry</div>
            </div>
        </div>
    </section>

    <!-- {{-- CTA --}} -->
    <section class="food-cta bg-dark">
        <h2 data-aos="zoom-in">Experience Delicious Food Today 🍽️</h2>
        <a href="#" class="btn btn-outline-warning">View Full Menu</a>
    </section>

    <!-- {{-- FOOTER --}} -->
    <footer class="footer py-2" style="background: #f5f2ee; color: rgb(195 131 42);">
        <p class="text-center py-1 mb-0">Copyright @2026 | Designed With by
            <a href="https://hextechnologies.in/" class="text-decoration-none">Hex Technologies</a>
        </p>
    </footer>

    <!-- {{-- Navbar Toggle Script --}} -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toggler = document.querySelector(".navbar-toggler");
            const menu = document.querySelector("#navbarTogglerDemo02");
            toggler.addEventListener("click", function() {
                menu.classList.toggle("show");
            });
        });
    </script>

    <!-- {{-- AOS SCRIPT --}} -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>

</body>

</html>