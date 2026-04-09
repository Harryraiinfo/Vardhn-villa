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

            <!-- -- Shri Khand View Room -- -->
            <div class="room-card" data-aos="fade-up" data-aos-delay="200">
                <div class="room-slider">
                    <div><img src="{{ asset('Images/Img/Shri-Khand-view.jpeg') }}" alt="Deluxe Room"></div>
                    <div><img src="{{ asset('Images/Img/loby.jpeg') }}" alt="Deluxe Room Lobby"></div>
                    <div><img src="{{ asset('Images/Img/bed-room.jpeg') }}" alt="Deluxe Room"></div>
                    <div><img src="{{ asset('Images/Img/washrooms-2.jpeg') }}" alt="Deluxe Room Washroom"></div>
                </div>
                <div class="room-info">
                    <h3>Shri Khand View Room</h3>
                    <p>Spacious room with mountain view balcony and premium comfort.</p>
                    <span>₹2999 / night</span>
                    <a href="{{ url('/booking') }}" class="btn btn-warning">Book Now</a>
                </div>
            </div>
            
            <!-- -- Bhima Kali Temple and Valley View Room -- -->
            <div class="room-card" data-aos="fade-up" data-aos-delay="200">
                <img src="{{ asset('Images/Img/Bhima-Kali-Temple-and-Valley-View.jpeg') }}" alt="Super Deluxe Room">
                <div class="room-info">
                    <h3>Bhima Kali Temple and Valley View</h3>
                    <p>Luxury interiors with king-size bed and beautiful scenery.</p>
                    <span>₹2999 / night</span>
                    <a href="{{ url('/booking') }}" class="btn btn-warning">Book Now</a>
                </div>
            </div>
            
            <!-- -- Apple orchard and Forest view Room -- -->
            <div class="room-card" data-aos="fade-up" data-aos-delay="200">
                <img src="{{ asset('Images/Img/Apple-orchard-and-Forest-view.jpeg') }}" alt="Super Deluxe Room">
                <div class="room-info">
                    <h3>Apple orchard and Forest view</h3>
                    <p>Luxury interiors with king-size bed and beautiful scenery.</p>
                    <span>₹2999 / night</span>
                    <a href="{{ url('/booking') }}" class="btn btn-warning">Book Now</a>
                </div>
            </div>
            
            <!-- -- Green Valley View Room -- -->
            <div class="room-card" data-aos="fade-up" data-aos-delay="200">
                <img src="{{ asset('Images/Img/Green-Valley-View.jpeg') }}" alt="Super Deluxe Room">
                <div class="room-info">
                    <h3>Green Valley View</h3>
                    <p>Luxury interiors with king-size bed and beautiful scenery.</p>
                    <span>₹2999 / night</span>
                    <a href="{{ url('/booking') }}" class="btn btn-warning">Book Now</a>
                </div>
            </div>
            
        
            <!-- -- Moutain View Room -- -->
            <div class="room-card" data-aos="fade-up" data-aos-delay="200">
                <div class="room-slider">
                    <div><img src="{{ asset('Images/Img/bed-room.jpeg') }}" alt="Family Suite"></div>
                    <div><img src="{{ asset('Images/Img/washrooms-2.jpeg') }}" alt="Family Suite Washroom"></div>
                    <div><img src="{{ asset('Images/Img/bed-room-2.jpeg') }}" alt="Family Suite"></div>
                    <div><img src="{{ asset('Images/Img/loby.jpeg') }}" alt="Family Suite Lobby"></div>
                    <div><img src="{{ asset('Images/Img/washrooms.jpeg') }}" alt="Family Suite Washroom"></div>
                </div>
                <div class="room-info">
                    <h3>Moutain View Room</h3>
                    <p>Perfect for families with extra space and comfort.</p>
                    <span>₹2999 / night</span>
                    <a href="{{ url('/booking') }}" class="btn btn-warning">Book Now</a>
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