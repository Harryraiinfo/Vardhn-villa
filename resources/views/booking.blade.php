@extends('layouts.app')

@section('title', 'Book Your Stay - VARDHN VILLA')

@section('content')

<!-- HERO -->
<section class="booking-hero">
    <div class="overlay">
        <h1 data-aos="fade-up" style="color:#ffc107; font-weight:700;">Book Your Stay</h1>
        <p data-aos="fade-up" data-aos-delay="200">Easy & Fast Booking</p>
    </div>
</section>

<!-- BOOKING FORM -->
<section class="booking-section">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="form-room-slider col-md-6 booking-sec mt-3 ">
                <div><img src="{{ asset('Images/Img/room-3.jpeg') }}" alt></div>
                <div><img src="{{ asset('Images/Img/loby.jpeg') }}" alt></div>
                <div><img src="{{ asset('Images/Img/hall.jpeg') }}" alt></div>
                <div><img src="{{ asset('Images/Img/bed-room.jpeg') }}" alt></div>
                <div><img src="{{ asset('Images/Img/dining-Room.png') }}" alt></div>
                <div><img src="{{ asset('Images/Img/room-3.jpeg') }}" alt></div>
                <div><img src="{{ asset('Images/Img/washrooms-2.jpeg') }}" alt></div>
            </div>
            <!-- <div class="col-md-6 booking-sec mt-3">
                <img src="{{ asset('Images/Img/room-2.jpeg') }}" data-aos="fade-up" class="card-img-top" alt="Room" style="border-radius: 12px;">
            </div> -->
            <div class="col-md-6 mt-3">

                @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif

                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                <form method="POST" action="{{ route('booking.store') }}" class="booking-form text-center">
                    @csrf

                    <h2 class="pb-2">Reserve Your Room</h2>

                    <input type="text" name="name" placeholder="Full Name" required>
                    <input type="text" name="mobile" placeholder="Mobile Number" required pattern="[0-9]{10}" oninput="this.value = this.value.replace(/[^0-9]/g, '')" class="form-control">
                    <input type="email" name="email" placeholder="Email" required pattern="^[a-zA-Z0-9._%+-]+@gmail\.com$" oninput="this.value = this.value.toLowerCase()" class="form-control">

                    <div class="form-row">
                        <div>
                            <label>Check-in</label>
                            <input type="date" name="check_in" id="checkin" required>
                        </div>
                        <div>
                            <label>Check-out</label>
                            <input type="date" name="check_out" id="checkout" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div>
                            <label>Adults</label>
                            <select name="adults">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                        <div>
                            <label>Children</label>
                            <select name="children">
                                <option value="0">0</option>
                                <option>1</option>
                                <option>2</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div>
                            <label>Select Room</label>
                            <select name="room_type">
                                <option value="Deluxe - 2999">Deluxe - ₹2999</option>
                            </select>
                        </div>
                        <div>
                            <label>Number of Rooms</label>
                            <select name="rooms">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </div>
                    </div>

                    <textarea name="special_request" placeholder="Special Request"></textarea>

                    <button class="btn btn-outline-warning" type="submit">Book Now</button>

                    @if(session('success'))
                    <p class="text-success mt-2">{{ session('success') }}</p>
                    @endif
                </form>
            </div>
        </div>
    </div>
</section>

<!-- SUMMARY -->
<section class="booking-summary">
    <h2 data-aos="fade-up">Why Book With Us?</h2>

    <div class="summary-grid">

        <div class="summary-card" data-aos="fade-up">
            <h3>Best Price</h3>
            <p>Affordable luxury stay</p>
        </div>

        <div class="summary-card" data-aos="fade-up"
            data-aos-delay="200">
            <h3>Instant Confirmation</h3>
            <p>Quick booking process</p>
        </div>

        <div class="summary-card" data-aos="fade-up"
            data-aos-delay="400">
            <h3>24/7 Support</h3>
            <p>Always here to help you</p>
        </div>

    </div>
</section>
@endsection


@push('scripts')

<!-- Selection date Script -->
<script>
    // Get today's date in YYYY-MM-DD format
    let today = new Date().toISOString().split('T')[0];

    // Set minimum date for check-in and check-out
    document.getElementById("checkin").setAttribute("min", today);
    document.getElementById("checkout").setAttribute("min", today);

    // Optional: Ensure checkout is always after checkin
    document.getElementById("checkin").addEventListener("change", function() {
        document.getElementById("checkout").setAttribute("min", this.value);
    });
</script>
<!-- --------- -->

<script>
    let bookedDates = [];

    function fetchBookedDates(roomType) {
        fetch(`/booked-dates/${roomType}`)
            .then(res => res.json())
            .then(data => bookedDates = data);
    }

    document.getElementById('room_type').addEventListener('change', function() {
        fetchBookedDates(this.value);
    });

    function disableBookedDates(input) {
        input.addEventListener('input', function() {
            if (bookedDates.includes(this.value)) {
                alert('This date is already booked. Please choose another date.');
                this.value = '';
            }
        });
    }

    disableBookedDates(document.getElementById('check_in'));
    disableBookedDates(document.getElementById('check_out'));

    flatpickr("#check_in", {
        minDate: "today",
        disable: bookedDates
    });
</script>

<!-- Javascript code  -->
<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script>
    $(document).ready(function() {
        $('.form-room-slider').slick();
    });
</script>
<!-- JS -->

<script>
    $('.form-room-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1000,
        speed: 1000,
        arrows: false,
        dots: false,
        fade: true,
        cssEase: 'linear',

    });
</script>
@endpush