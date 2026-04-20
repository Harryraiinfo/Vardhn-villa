<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VARDHN VILLA</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('Images/Img/logo-vardhn-villa-removebg.png') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/booking.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Slick -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        .slick-next:before,
        .slick-prev:before {
            color: rgb(195 131 42) !important;
            font-size: 26px !important;
        }
    </style>
</head>

<body>

    @include('partials.navbar')

    @yield('content')

    @include('partials.footer')

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script>
        AOS.init({
            duration: 1000,
            once: true
        });

        // Sticky Navbar
        window.addEventListener("scroll", function() {
            const navbar = document.querySelector(".navbar");
            if (window.scrollY > 50) {
                navbar.classList.add("shadow");
            } else {
                navbar.classList.remove("shadow");
            }
        });
    </script>
    <!-- For Toggle Button code -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toggler = document.querySelector(".navbar-toggler");
            const menu = document.querySelector("#navbarTogglerDemo02");

            toggler.addEventListener("click", function() {

                menu.classList.toggle("show");

            });
        });
    </script>
    @stack('scripts')

</body>

</html>