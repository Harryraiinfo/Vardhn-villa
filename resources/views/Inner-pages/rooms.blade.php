{{-- resources/views/rooms.blade.php --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms - Vardhn Villa</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('Images/Img/logo-vardhn-villa-removebg.png') }}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>

<body>

    @include('partials.navbar')

    <!-- -- HERO -- -->
    <section class="rooms-hero">
        <div class="overlay">
            <h1 data-aos="fade-up">Our Rooms</h1>
            <p data-aos="fade-up" data-aos-delay="200">Luxury & Comfort Stay</p>
        </div>
    </section>

    <!-- -- ROOMS SECTION --  -->
    <section class="rooms-section">
        <div class="container">

            <!-- -- Mountain Peaks & Valley View -- -->
            <div class="room-card" data-aos="fade-up" data-aos-delay="200">
                <img src="{{ asset('Images/Img/Green-Valley-View.jpeg') }}" alt="Super Deluxe Room">
                <div class="room-info">
                    <h3>Mountain Peaks & Valley View</h3>
                    <p>Luxury interiors with king-size bed and beautiful scenery.</p>
                    <span>₹2999 / night</span>
                    <a href="{{ url('/booking') }}" class="btn btn-warning ms-2">Book Now</a>
                </div>
            </div>

            <!-- -- Temple and Valley View Room -- -->
            <div class="room-card" data-aos="fade-up" data-aos-delay="200">
                <img src="{{ asset('Images/Img/Bhima-Kali-Temple-and-Valley-View.jpeg') }}" alt="Super Deluxe Room">
                <div class="room-info">
                    <h3>Temple and Valley</h3>
                    <p>Luxury interiors with king-size bed and beautiful scenery.</p>
                    <span>₹2999 / night</span>
                    <a href="{{ url('/booking') }}" class="btn btn-warning ms-2">Book Now</a>
                </div>
            </div>

            <!-- -- Shri Khand View Room -- -->
            <div class="room-card" data-aos="fade-up" data-aos-delay="200">
                <div class="room-slider">
                    <div><img src="{{ asset('Images/Img/bed-room-103.jpeg') }}" alt="bed-room-103"></div>
                    <div><img src="{{ asset('Images/Img/led-tv-103.jpeg') }}" alt="led-tv-103"></div>
                    <div><img src="{{ asset('Images/Img/table-chair-103.jpeg') }}" alt="table-chair-103"></div>
                    <div><img src="{{ asset('Images/Img/washroom-103.jpeg') }}" alt="Washroom-103"></div>
                </div>
                <div class="room-info">
                    <h3>Shri Khand peak View</h3>
                    <p>Spacious room with mountain view balcony and premium comfort.</p>
                    <span>₹2999 / night</span>
                    <a href="{{ url('/booking') }}" class="btn btn-warning ms-2">Book Now</a>
                </div>
            </div>


            <!-- -- Mountain View Room -- -->
            <div class="room-card" data-aos="fade-up" data-aos-delay="200">
                <div class="room-slider">
                    <div><img src="{{ asset('Images/Img/window-104.jpeg') }}" alt="window-104"></div>
                    <div><img src="{{ asset('Images/Img/bed-room-104.jpeg') }}" alt="bed-room-104"></div>
                    <div><img src="{{ asset('Images/Img/washroom-104.jpeg') }}" alt="washroom-104"></div>
                    <div><img src="{{ asset('Images/Img/table-sofa-104.jpeg') }}" alt="table-sofa-104"></div>
                    <div><img src="{{ asset('Images/Img/led-tv-104.jpeg') }}" alt="led-tv-104"></div>
                </div>
                <div class="room-info">
                    <h3>Mountain & Valley View </h3>
                    <p>Perfect for families with extra space and comfort.</p>
                    <span>₹2999 / night</span>
                    <a href="{{ url('/booking') }}" class="btn btn-warning ms-2">Book Now</a>
                </div>
            </div>

            <!-- -- Apple orchard and Forest view Room -- -->
            <div class="room-card" data-aos="fade-up" data-aos-delay="200">
                <!-- <img src="{{ asset('Images/Img/Apple-orchard-and-Forest-view.jpeg') }}" alt="Super Deluxe Room"> -->
                <div class="room-slider">
                    <div><img src="{{ asset('Images/Img/bed-room-105.jpeg') }}" alt="bed-room-105"></div>
                    <div><img src="{{ asset('Images/Img/bed-105.jpeg') }}" alt="led-tv-105"></div>
                    <div><img src="{{ asset('Images/Img/led-tv-105.jpeg') }}" alt="led-tv-105"></div>
                    <div><img src="{{ asset('Images/Img/washroom-105.jpeg') }}" alt="Washroom-105"></div>
                </div>
                <div class="room-info">
                    <h3>Apple orchard and Forest View</h3>
                    <p>Luxury interiors with king-size bed and beautiful scenery.</p>
                    <span>₹2999 / night</span>
                    <a href="{{ url('/booking') }}" class="btn btn-warning ms-2">Book Now</a>
                </div>
            </div>

            <!-- -- Apple orchard and Forest view Room -- -->
            <div class="room-card" data-aos="fade-up" data-aos-delay="200">
                <!-- <img src="{{ asset('Images/Img/Apple-orchard-and-Forest-view.jpeg') }}" alt="Super Deluxe Room"> -->
                <div class="room-slider">
                    <div><img src="{{ asset('Images/Img/bed-room-106.jpeg') }}" alt="bed-room-106"></div>
                    <div><img src="{{ asset('Images/Img/led-tv-106.jpeg') }}" alt="led-tv-106"></div>

                </div>
                <div class="room-info">
                    <h3>Village & Apple orchard View</h3>
                    <p>Luxury interiors with king-size bed and beautiful scenery.</p>
                    <span>₹2999 / night</span>
                    <a href="{{ url('/booking') }}" class="btn btn-warning ms-2">Book Now</a>
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')

    <!-- -- jQuery & Slick -- -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    {{-- AOS --}}
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    {{-- Scripts --}}
    <script>
        $(document).ready(function() {

            // Navbar toggle
            const toggler = document.querySelector(".navbar-toggler");
            const menu = document.querySelector("#navbarTogglerDemo02");
            toggler.addEventListener("click", function() {
                menu.classList.toggle("show");
            });

            // Initialize Slick sliders
            $('.room-slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                speed: 1000,
                arrows: false,
                dots: false,
                fade: true,
                cssEase: 'linear',
            });

            // Initialize AOS after sliders
            AOS.init({
                duration: 1000,
                once: true
            });

            // Refresh AOS on slider change (for cloned slides)
            $('.room-slider').on('afterChange', function() {
                AOS.refresh();
            });

        });
    </script>
</body>

</html>