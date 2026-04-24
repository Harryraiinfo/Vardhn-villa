@extends('layouts.app')

@section('content')

<head>
    <style>
        .review-card {
            background: #fff;
            padding: 20px;
            border-radius: 12px;
            margin: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<!-- HERO SLIDER -->
<div class="header">
    <div class="slider">

        <div class="slide" style="height:100vh; background-image:url('{{ asset('Images/Banner-img/Winter-view.jpeg') }}')">
            <div class="overlay-heading">
                <h1>Vardhn Villa</h1>
                <p>Luxury Stay Experience</p>
                <a href="{{ route('booking') }}" class="btn btn-outline-warning">Book Now</a>
            </div>
        </div>

        <div class="slide" style="height:100vh; background-image:url('{{ asset('Images/Banner-img/Front-view-night.jpeg') }}')">
            <div class="overlay-heading">
                <h1>Welcome to Comfort</h1>
                <p>Feel Like Home</p>
                <a href="{{ route('booking') }}" class="btn btn-outline-warning">Book Now</a>
            </div>
        </div>

        <div class="slide" style="height:100vh; background-image:url('{{ asset('Images/Img/hotel-view.jpeg') }}')">
            <div class="overlay-heading">
                <h1>Vardhn Villa</h1>
                <p>Luxury Stay Experience</p>
                <a href="{{ route('booking') }}" class="btn btn-outline-warning">Book Now</a>
            </div>
        </div>

        <div class="slide" style="height:100vh; background-image:url('{{ asset('Images/Img/bed-room-106.jpeg')}}')">
            <div class="overlay-heading">
                <h1>Premium Rooms</h1>
                <p>Best Price Guaranteed</p>
                <a href="{{ route('booking') }}" class="btn btn-outline-warning">Book Now</a>
            </div>
        </div>

        <div class="slide" style="height:100vh; background-image:url('{{ asset('Images/Img/night-front-banner.jpeg')}}')">
            <div class="overlay-heading">
                <h1>Night View</h1>
                <p>Best Experience This Location </p>
                <a href="{{ route('booking') }}" class="btn btn-outline-warning">Book Now</a>
            </div>
        </div>

    </div>
</div>

<!-- ABOUT -->
<!---------------- Card Setion Start ---------------------->
<section class="card_sec py-4 ">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 mb-3">
                <div class="clearfix ">
                    <!-- <h1 class="pb-2" data-aos="zoom-in">Welcome to VARDHN VILLA</h1>
                    <h4 class="pb-2" data-aos="fade-up"
                        data-aos-delay="200">Luxurious Homestay in the heart of Himachal Pradesh</h4>

                    <p data-aos="fade-up" data-aos-delay="400"> VARDHN VILLA is newly constructed homestay located 1km ahead of the famous Bhima Kali Temple at Sarahan Bushahr. The villa offers six Luxurious rooms with stunning views of the snow covered mountain ranges of Shree Khand Mahadev and mesmerizing sunsets from the rooms and balconies.
                    </p>
                    <a class="btn btn-warning"
                        href="{{ route('about') }}">Read More</a> -->

                    <h1 style="color: #ffc107; font-weight: 700;">Welcome to Vardhn Villa</h1>
                    <h4 class="mb-3" style="color: #c3872a;">Your Sanctuary in the Clouds</h4>
                    <p>Nestled in the serene embrace of the green hills, <strong>Vardhn Villa</strong> is more than a stay—it’s a soulful escape. Located 162 km from the bustle of Shimla in the beautiful town of Sarahan Bushahr, Himachal Pradesh, our villa offers a front-row seat to the majestic Himalayas, blending luxury with the warmth of a mountain home.</p>
                    <p>Our Villa ensures a peaceful and premium stay experience for travellers through its modern architecture, making it a perfect and comfortable choice.</p>
                    <a class="btn btn-warning mt-3  me-2"
                        href="{{ route('about') }}">Read More</a>
                    <a href="{{ route('booking') }}" class="btn btn-warning mt-3">Book Your Stay Now</a>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="row justify-content-center">
                    <!-- 🔹 Rooms -->
                    <div class="col section_card">
                        <div class="card">
                            <img src="{{ asset('Images/Img/bed-room-106.jpeg')}}" alt="bed-room image">

                            <div class="col book-room pt-2">

                                <h3>Luxury Room</h3>
                                <ul>
                                    <li>₹2999 / night</li>
                                    <li>Extra Person ₹500</li>
                                </ul>
                            </div>
                            <div class="butn-book">
                                <a class="btn btn btn-outline-warning" href="{{ route('booking') }}">Book now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="gallery-section">
    <div class="container">
        <h2 style="color: #ffc107;" data-aos="fade-up">Our Photo
            Gallery</h2>
        <p style="color: rgb(195 131 42);" class="subtitle" data-aos="fade-up" data-aos-delay="200">A visual tour to Vardhn Villa </p>

        <div class="gallery-grid">
            @foreach($images as $img)
            <div class="gallery-item">
                <img src="{{ asset('gallery/'.$img->image) }}" alt="Gallery Image">
            </div>
            @endforeach
        </div>
    </div>
</section>



<!-- Luxurious Rooms Section start -->
<section class="luxurious_rooms-Sec py-3 ">
    <div class="container">
        <div
            class="row justify-content-between align-items-center">
            <div class="col-md-6">
                <h1 style="color: rgb(255 193 7); font-weight: 700; letter-spacing: 1px;"
                    class="room_heading mb-2 ps-2" data-aos="fade-up">Luxurious Rooms & Tariff</h1>
                <!-- ------------ -->
                <div class="slider pt-3">
                    <!-- Slide 1 -->
                    <div class="slide" style="background-image:url('Images/Img/bed-room-101.jpeg'); height: 40vh; border-radius: 12px;"> </div>
                    <!-- Slide 2 -->
                    <div class="slide" style="background-image: url('Images/Img/window-101.jpeg'); height: 40vh; border-radius: 12px;"> </div>
                    <!-- Slide 3 -->
                    <div class="slide" style="background-image: url('Images/Img/bed-room-103.jpeg'); height: 40vh; border-radius: 12px;"> </div>
                    <!-- Slide 4 -->
                    <div class="slide" style="background-image: url('Images/Img/bed-room-104.jpeg'); height: 40vh; border-radius: 12px;"> </div>
                    <!-- Slide 5 -->
                    <div class="slide" style="background-image: url('Images/Img/bed-room-104.jpeg'); height: 40vh; border-radius: 12px;"> </div>
                    <!-- Slide 6 -->
                    <div class="slide" style="background-image: url('Images/Img/bed-room-106.jpeg'); height: 40vh; border-radius: 12px;"> </div>
                    <!-- ------------ -->
                </div>
            </div>
            <div class="col-md-6 ps-4 pt-4">
                <h1 class="food_heading"> Delicious Food</h1>
                <ul>
                    <li>Hot & Cold Water</li>
                    <li>Breakfast / Lunch / Dinner</li>
                    <li>Non-vegetarian options available on request</li>
                    <li>Freshly cooked local and north Indian vegetarian food</li>
                </ul>
                <br>
                <div class="food_btn"> <a href="{{route('food')}}" class="btn btn-warning">View Menu</a> </div>
            </div>
        </div>
    </div>
</section>

<!-- Luxurious Rooms Section End -->

<!-- Reviews Sections -->


<section class="reviews-section py-5">
    <div class="container text-center">
        <h2 class="mb-4">What Our Guests Say</h2>
        <div class="row justify-content-center align-items-center review-slider">
            @foreach($reviews as $review)
            <div class="col review-card ">
                <div class="review-box">
                    <h5>{{ $review->name }}</h5>
                    <div>
                        @for($i=1; $i<=5; $i++)
                            @if($i <=$review->rating)
                            ⭐
                            @else
                            ☆
                            @endif
                            @endfor
                    </div>
                    <p>"{{ $review->message }}"</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="text-center mt-4">
        <a href="{{route('reviews.form')}}" class="btn btn-outline-warning">VIEW ALL REVIEWS</a>
    </div>
</section>
<!-- ------------------------------ -->

<!------------- Facilities Section Start---------- -->
<section class="facilities">
    <div class="container">
        <h2>Facilities for a Comfortable Stay</h2>

        <div class="facility-slider">

            <div class="facility-card facility_place">
                <img src="Images/Banner-img/Bhimakali-Temple.jpeg">
                <p class="pt-2">Bhimakali Temple</p>
            </div>

            <div class="facility-card facility_place">
                <img src="Images/Banner-img/Royal-Palace.jpeg">
                <p class="pt-2">Royal Palace</p>
            </div>

            <div class="facility-card facility_place">
                <img src="Images/Banner-img/sarahan.jpeg">
                <p class="pt-2">Sarahan Bushahr </p>
            </div>

            <div class="facility-card facility_place">
                <img src="Images/Banner-img/bird.jpeg">
                <p class="pt-2">Bird Park (1km)</p>
            </div>

            <div class="facility-card facility_place">
                <img src="Images/Banner-img/bhaser-kanda-track.jpeg" alt="Bashal-Kanda-Track">
                <p class="pt-2">Bashal Kanda Track </p>
            </div>

            <div class="facility-card facility_place">
                <img src="Images/Banner-img/Unu-Hot-Water-Spring.webp">
                <p class="pt-2">Unu Hot Water Spring (12km)</p>
            </div>

            <div class="facility-card facility_place">
                <img src="Images/Banner-img/waterfalls.jpeg">
                <p class="pt-2">Bhagawat Waterfall (10km)</p>
            </div>

        </div>
    </div>
</section>
<!------------- Facilities Section End ---------- -->

@endsection

@push('scripts')
<script>
    $('.slider').slick({
        infinite: true,
        speed: 2000,
        autoplay: true,
        autoplaySpeed: 2000,
        fade: true,
        arrows: false
    });

    $('.facility-slider').slick({
        slidesToShow: 4,
        autoplay: true,
        responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
</script>
<script>
    $('.review-slider').slick({
        slidesToShow: 3,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 1000,
        arrows: false,
        responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1
                }
            }
        ]

    });
</script>
@endpush