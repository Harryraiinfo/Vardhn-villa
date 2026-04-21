@extends('layouts.app')

@section('title', 'Book Your Stay - VARDHN VILLA')

@section('content')

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <style>
        .room-options {
            display: flex;
            gap: 12px;
            margin-bottom: 10px;
        }

        .room-card {
            flex: 1;
            border: 2px solid #ddd;
            border-radius: 10px;
            padding: 12px 16px;
            cursor: pointer;
            transition: all 0.25s ease;
            margin-bottom: 10px !important;
        }

        .room-card input {
            display: none;
        }

        .room-card:hover {
            border-color: #ffc107;
            background: #fff8e1;
        }

        .room-card:has(input:checked) {
            border-color: #28a745;
            background: #eafaf1;
            box-shadow: 0 2px 8px rgba(40, 167, 69, 0.2);
        }

        .room-name {
            font-weight: 600;
        }

        .room-price {
            color: #28a745;
        }

        @media (max-width:768px) {
            .room-options {
                display: block;
            }
        }
    </style>
</head>

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

                <form id="bookingForm" method="POST" action="{{ route('booking.store') }}" class="booking-form text-center">
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

                    <p id="roomMessage" style="font-weight:bold; margin-top:10px;"></p>

                    <div class="form-row">
                        <div>
                            <label>Adults</label>
                            <select name="adults">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
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
                        <div>
                            <label>Number of Rooms</label>
                            <select name="rooms" id="rooms">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">


                        <div>
                            <div>
                                <label class="">Select Room</label>

                                <!-- Hidden input (IMPORTANT for backend) -->
                                <input type="hidden" name="room_type" id="room_type">

                                <div class="room-options">

                                    <label class="room-card">
                                        <input type="checkbox" value="Shri Khand View - 2999" checked>
                                        <div class="room-content">
                                            <span class="room-name">Shri Khand View</span>
                                            <span class="room-price">₹2999</span>
                                        </div>
                                    </label>

                                    <label class="room-card">
                                        <input type="checkbox" value="Bhima Kali Temple and Valley View - 2999">
                                        <div class="room-content">
                                            <span class="room-name">Bhima Kali View</span>
                                            <span class="room-price">₹2999</span>
                                        </div>
                                    </label>

                                    <label class="room-card">
                                        <input type="checkbox" value="Apple orchard and Forest view - 2999">
                                        <div class="room-content">
                                            <span class="room-name">Apple Orchard</span>
                                            <span class="room-price">₹2999</span>
                                        </div>
                                    </label>
                                </div>

                                <div class="room-options">

                                    <label class="room-card">
                                        <input type="checkbox" value="Mountain View - 2999">
                                        <div class="room-content">
                                            <span class="room-name">Mountain View</span>
                                            <span class="room-price">₹2999</span>
                                        </div>
                                    </label>

                                    <label class="room-card">
                                        <input type="checkbox" value="Green Valley View - 2999">
                                        <div class="room-content">
                                            <span class="room-name">Green Valley</span>
                                            <span class="room-price">₹2999</span>
                                        </div>
                                    </label>

                                </div>
                            </div>
                        </div>
                    </div>

                    <textarea name="special_request" placeholder="Special Request"></textarea>
                    <input type="hidden" name="total_price" id="total_price_input">
                    <p id="totalPrice" style="font-weight:bold; font-size:18px; color:green;">
                        Total Price: ₹0
                    </p>
                    <button class="btn btn-outline-warning" type="submit" onclick="showPayment(event)">Book Now</button>


                    @if(session('success'))
                    <p class="text-success mt-2">{{ session('success') }}</p>
                    @endif
                </form>
            </div>
        </div>
    </div>
    <!-- Payment Method  -->
    <div id="paymentBox" style="display:none; margin-top:40px;" class="payment-card">
        <div class="container card p-4 shadow ">
            <h4 class="text-center">Complete Your Payment</h4>
            <p class="text-center text-success">We are Accept Your Payment olny This Method</p>
            <div class="row justify-content-center align-items-center mt-3">
                <div class="col-md-5">
                    <div class="Bank-deatils">
                        <h5 class="mb-3"><b> Bank Transfer</b></h5>
                        <p><strong>Bank Name:</strong> HDFC Bank</p>
                        <p><strong>Account No:</strong> 1234567890</p>
                        <p><strong>IFSC:</strong> HDFC0001234</p>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="text-center">
                        <p>Scan QR Code</p>
                        <img src="{{ asset('Images/Img/qr-code.avif') }}" width="200" alt="QR Code">
                    </div>
                </div>
            </div>

            <p class="text-danger text-center mt-2">
                After payment, click confirm booking
                <br>
                and Send Screenshot on WhatsApp No. <b> +91 9317196995</b>
                <br>and E-mail: <b>vardhnvilla@gmail.com</b>
            </p>
            <div class="text-center">
                <button type="submit" class="btn btn-primary mt-2" onclick="submitBookingForm()">
                    Confirm Booking
                </button>
            </div>

        </div>
        <br>
    </div>
    <!-- Payment Method  -->

</section>

<!-- New Sections Add On -->
<section>
    <div class="container">
        <div class="row justify-content-between align-items-start">
            <h2 class="lined-heading"><span>Room Details</span></h2>
            <div class="col-sm-7 ">
                <h3 class="" style="font-size: 18px; font-weight: 600; line-height: 1.1; color: #5e5e5e;">Facilities</h3>
                <table class="table table-striped mt-3">
                    <tbody>
                        <tr>
                            <td><i class="fa fa-check-circle"></i> Double Bed</td>
                            <td><i class="fa fa-check-circle"></i> Spacious Wash Room</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-check-circle"></i> Attached Balcony</td>
                            <td><i class="fa fa-check-circle"></i> Mini Fridage</td>
                            <td><i class="fa fa-check-circle"></i> Free Wi-Fi</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-check-circle"></i> Cable facility</td>
                            <td><i class="fa fa-check-circle"></i> Electric Kettle</td>
                            <td><i class="fa fa-check-circle"></i> Wather Bottle</td>
                        </tr>
                        <tr>
                            <td><i class="fa fa-check-circle"></i> Smart LED TV</td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <div class="col-sm-5 ps-5">
                <h3 class="pb-2" style="font-size: 18px; font-weight: 600; line-height: 1.1; color: #5e5e5e;">Extra Charges</h3>
                <p class="">
                    • Tariff for Extra adult and Child above 7 years <br>
                    • Without extra bed <b> &#8377;500/Night</b><br>
                    • With extra bed <b>&#8377;1000/Night</b><br>
                    • Tea | Coffe | Food as per order<br>
                    • Namkin | Biscuits | Jusice | drinks as per use.<br>
                </p>
            </div>
        </div>
    </div>
</section>


<!-- New Sections Add On -->
<section class="rooms my-5">
    <div class="container pt-3">
        <div class="row">
            <div class="col-sm-12">
                <!-- <h2 class="lined-heading"><span>Guests Favorite Rooms</span></h2> -->
            </div>
            <!-- Room 1 -->
            <div class="col-4 col-sm-4 mt-4">
                <div class="room-thumb"> <img src="{{ asset('Images/Img/bed-room.jpeg')}}" alt="room 3" class="img-responsive" />
                    <div class="mask">
                        <div class="main row justify-content-center">
                            <div class="col-7">
                                <h5>Mountain Peaks & Valley View </h5>
                            </div>
                            <div class="col-5 price"> R.No. 101</div>
                        </div>
                        <div class="content">
                            <!-- <h6 class="text-center">Room Details</h6> -->
                            <!-- <p><span>A modern room in Vardhn Villa</span> Rejoice with your family while experiencing the legendary hospitality of some of the best hotels in the world. </p> -->
                            <div class="row">
                                <div class="tabs">
                                    <div class="tab-buttons">
                                        <button class="tab-btn active" data-tab="facilities">Facilities</button>
                                        <button class="tab-btn" data-tab="extra">Extra Charges</button>
                                    </div>

                                    <div class="tab-content active" id="facilities">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <ul class="list-unstyled">
                                                    <li><i class="fa fa-check-circle" style="color: #ffc107;"></i> Double Bed</li>
                                                    <li><i class="fa fa-check-circle" style="color: #ffc107;"></i> Spacious Wash Room</li>
                                                    <li><i class="fa fa-check-circle" style="color: #ffc107;"></i> Attached Balcony</li>
                                                    <li><i class="fa fa-check-circle" style="color: #ffc107;"></i> Mini Fridage</li>
                                                    <li><i class="fa fa-check-circle" style="color: #ffc107;"></i> Free Wi-Fi</li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6">
                                                <ul class="list-unstyled">
                                                    <li><i class="fa fa-check-circle" style="color:#ffc107;"></i> Cable facility</li>
                                                    <li><i class="fa fa-check-circle" style="color:#ffc107;"></i> Electric Kettle</li>
                                                    <li><i class="fa fa-check-circle" style="color:#ffc107;"></i> Wather Bottle</li>
                                                    <li><i class="fa fa-check-circle" style="color:#ffc107;"></i>Smart LED TV</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-content" id="extra">
                                        <p class="text-left" style="line-height:1.6; margin-bottom: 5px;">
                                            • Tariff for Extra adult and Child above 7 years <br>
                                            • Without extra bed <b> &#8377;500/Night</b><br>
                                            • With extra bed <b>&#8377;1000/Night</b><br>
                                            • Tea | Coffe | Food as per order<br>
                                            • Namkin | Biscuits | Jusice | drinks as per use.<br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('rooms') }}" class="btn btn-warning btn-block">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Room 3 -->
            <div class="col-4 col-sm-4 mt-4">
                <div class="room-thumb">
                    <img src="{{ asset('Images/Img/bed-room.jpeg')}}" alt="bed-room image" class="img-responsive">
                    <div class="mask">
                        <div class="main row justify-content-center">
                            <div class="col-7">
                                <h5>Shri Khand peak View</h5>
                            </div>
                            <div class="col-5 price">R.No. 103
                                <!-- <span>a night</span> -->
                            </div>
                        </div>
                        <div class="content">
                            <!-- <p><span>A modern room in Vardhn Villa</span> The spacious deluxe room has everything you could possibly desire for!</p> -->
                            <h6 class="text-center">Room Details</h6>
                            <div class="row">
                                <div class="tabs">
                                    <div class="tab-buttons">
                                        <button class="tab-btn active" data-tab="facilities2">Facilities</button>
                                        <button class="tab-btn" data-tab="extra2">Extra Charges</button>
                                    </div>

                                    <div class="tab-content active" id="facilities2">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <ul class="list-unstyled">
                                                    <li><i class="fa fa-check-circle" style="color: #ffc107;"></i> Double Bed</li>
                                                    <li><i class="fa fa-check-circle" style="color: #ffc107;"></i> Spacious Wash Room</li>
                                                    <li><i class="fa fa-check-circle" style="color: #ffc107;"></i> Attached Balcony</li>
                                                    <li><i class="fa fa-check-circle" style="color: #ffc107;"></i> Mini Fridage</li>
                                                    <li><i class="fa fa-check-circle" style="color: #ffc107;"></i> Free Wi-Fi</li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6">
                                                <ul class="list-unstyled">
                                                    <li><i class="fa fa-check-circle" style="color:#ffc107;"></i> Cable facility</li>
                                                    <li><i class="fa fa-check-circle" style="color:#ffc107;"></i> Electric Kettle</li>
                                                    <li><i class="fa fa-check-circle" style="color:#ffc107;"></i> Wather Bottle</li>
                                                    <li><i class="fa fa-check-circle" style="color:#ffc107;"></i>Smart LED TV</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-content" id="extra2">
                                        <p class="text-left" style="line-height:1.6; margin-bottom: 5px;">
                                            • Tariff for Extra adult and Child above 7 years <br>
                                            • Without extra bed <b> &#8377;500/Night</b><br>
                                            • With extra bed <b>&#8377;1000/Night</b><br>
                                            • Tea | Coffe | Food as per order<br>
                                            • Namkin | Biscuits | Jusice | drinks as per use.<br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('rooms') }}" class="btn btn-warning btn-block">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Room 5 -->
            <div class="col-4 col-sm-4 mt-4 double executive">
                <div class="room-thumb"> <img src="{{ asset('Images/Img/bed-room.jpeg')}}" alt="room 4" class="img-responsive" />
                    <div class="mask">
                        <div class="main row justify-content-center">
                            <div class="col-7">
                                <h5>Apple orchard and Forest View </h5>
                            </div>
                            <div class="col-5 price">R.No. 105</div>
                        </div>
                        <div class="content">
                            <!-- <p><span>A modern room in Vardhn Villa</span>Immerse yourself in the elegance and comfort of executive room!</p> -->
                            <h6 class="text-center">Room Details</h6>
                            <div class="row">
                                <div class="tabs">
                                    <div class="tab-buttons">
                                        <button class="tab-btn active" data-tab="facilities3">Facilities</button>
                                        <button class="tab-btn" data-tab="extra3">Extra Charges</button>
                                    </div>

                                    <div class="tab-content active" id="facilities3">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <ul class="list-unstyled">
                                                    <li><i class="fa fa-check-circle" style="color: #ffc107;"></i> Double Bed</li>
                                                    <li><i class="fa fa-check-circle" style="color: #ffc107;"></i> Spacious Wash Room</li>
                                                    <li><i class="fa fa-check-circle" style="color: #ffc107;"></i> Attached Balcony</li>
                                                    <li><i class="fa fa-check-circle" style="color: #ffc107;"></i> Mini Fridage</li>
                                                    <li><i class="fa fa-check-circle" style="color: #ffc107;"></i> Free Wi-Fi</li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6">
                                                <ul class="list-unstyled">
                                                    <li><i class="fa fa-check-circle" style="color:#ffc107;"></i> Cable facility</li>
                                                    <li><i class="fa fa-check-circle" style="color:#ffc107;"></i> Electric Kettle</li>
                                                    <li><i class="fa fa-check-circle" style="color:#ffc107;"></i> Wather Bottle</li>
                                                    <li><i class="fa fa-check-circle" style="color:#ffc107;"></i>Smart LED TV</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-content" id="extra3">
                                        <p class="text-left" style="line-height:1.6; margin-bottom: 5px;">
                                            • Tariff for Extra adult and Child above 7 years <br>
                                            • Without extra bed <b> &#8377;500/Night</b><br>
                                            • With extra bed <b>&#8377;1000/Night</b><br>
                                            • Tea | Coffe | Food as per order<br>
                                            • Namkin | Biscuits | Jusice | drinks as per use.<br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('booking') }}" class="btn btn-warning btn-block">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SUMMARY -->
<!-- <section class="booking-summary">
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
</section> -->
@endsection

@push('scripts')

<!-- Javascript code For Slider  -->
<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

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

<!-- Selection date Script -->
<script>
    let today = new Date().toISOString().split('T')[0];

    document.getElementById("checkin").setAttribute("min", today);
    document.getElementById("checkout").setAttribute("min", today);

    document.getElementById("checkin").addEventListener("change", function() {
        document.getElementById("checkout").setAttribute("min", this.value);
    });
</script>

<script>
    let bookedDates = {};

    function fetchBookedDates(roomType) {
        fetch(`/booked-dates/${roomType}`)
            .then(res => res.json())
            .then(data => {
                bookedDates = data;

                validateDates();
            });
    }
    // Page load pe call
    document.getElementById('checkin').addEventListener('change', function() {
        if (selectedRoomsData.length > 0) {
            fetchBookedDates(selectedRoomsData[0]);
        }
    });

    document.getElementById('checkout').addEventListener('change', function() {
        if (selectedRoomsData.length > 0) {
            fetchBookedDates(selectedRoomsData[0]);
        }
    });
    // Room change pe
    // document.getElementById('room_type').addEventListener('change', function() {
    //     fetchBookedDates(this.value);
    // });


    function isRoomAvailable(start, end, selectedRooms) {
        let current = new Date(start);

        while (current <= new Date(end)) {
            let date = current.toISOString().split('T')[0];

            let booked = bookedDates[date] ? bookedDates[date] : 0;
            let totalRooms = 6;

            let available = totalRooms - booked;

            // MAIN LOGIC
            if (available < selectedRooms) {
                return false;
            }

            current.setDate(current.getDate() + 1);
        }
        return true;
    }

    function getAvailableRooms(start, end) {
        let current = new Date(start);
        let totalRooms = 6;

        let minAvailable = totalRooms;

        while (current < new Date(end)) {
            let date = current.toISOString().split('T')[0];

            let booked = bookedDates[date] ? bookedDates[date] : 0;
            let available = totalRooms - booked;

            if (available < minAvailable) {
                minAvailable = available;
            }

            current.setDate(current.getDate() + 1);
        }

        return minAvailable;
    }

    //  VALIDATION FUNCTION

    function validateDates() {
        let checkin = document.getElementById('checkin').value;
        let checkout = document.getElementById('checkout').value;
        let selectedRooms = parseInt(document.getElementById('rooms').value);
        let messageBox = document.getElementById('roomMessage');


        if (checkin && checkout) {

            let availableRooms = getAvailableRooms(checkin, checkout);

            //  Fully booked
            if (availableRooms <= 0) {
                messageBox.innerText = `All rooms are booked for selected dates`;
                messageBox.style.color = "red";

                return;
            }

            //  Less rooms
            if (availableRooms < selectedRooms) {

                messageBox.innerText = `Only ${availableRooms} room(s) available these dates. Please contact manager: +91 93171 96995 `;
                messageBox.style.color = "orange";
                return;
            }

            // Success message
            messageBox.innerText = `${availableRooms} room(s) available ✅`;
            messageBox.style.color = "green";

        }
    }

    document.getElementById('checkin').addEventListener('input', () => {
        document.getElementById('roomMessage').innerText = '';
    });

    document.getElementById('checkout').addEventListener('input', () => {
        document.getElementById('roomMessage').innerText = '';
    });


    // 👇 EVENTS FIX (ID correct karo)
    document.getElementById('checkin').addEventListener('change', validateDates);
    document.getElementById('checkout').addEventListener('change', validateDates);
    document.getElementById('rooms').addEventListener('change', validateDates);
</script>
<!-- --------- -->


<script>
    function showPayment(event) {
        event.preventDefault();
        let form = document.querySelector('.booking-form');

        if (form.checkValidity()) {
            document.getElementById('paymentBox').style.display = 'block';

        } else {
            form.reportValidity();
        }
    }

    function submitBookingForm() {
        let form = document.getElementById('bookingForm');

        if (form.checkValidity()) {
            form.submit();
        } else {
            form.reportValidity();
        }
    }

    function submitBookingForm() {
        let form = document.getElementById('bookingForm');
        let btn = event.target;

        if (form.checkValidity()) {
            btn.disabled = true;
            btn.innerText = "Processing...";
            form.submit();
        } else {
            form.reportValidity();
        }
    }
</script>

<script>
    function calculateTotal() {
        let roomType = document.getElementById('room_type').value;
        let rooms = parseInt(document.getElementById('rooms').value);
        let checkin = document.getElementById('checkin').value;
        let checkout = document.getElementById('checkout').value;

        // Extract price from text (2999)
        let price = parseInt(roomType.split('-')[1]);

        if (checkin && checkout) {
            let start = new Date(checkin);
            let end = new Date(checkout);

            let timeDiff = end - start;
            let days = timeDiff / (1000 * 60 * 60 * 24);

            if (days > 0) {
                let total = price * rooms * days;
                document.getElementById('totalPrice').innerText = "Total Price: ₹" + total;
            } else {
                document.getElementById('totalPrice').innerText = "Total Price: ₹0";
            }
        }
    }

    // Trigger on change
    document.getElementById('room_type').addEventListener('change', calculateTotal);
    document.getElementById('rooms').addEventListener('change', calculateTotal);
    document.getElementById('checkin').addEventListener('change', calculateTotal);
    document.getElementById('checkout').addEventListener('change', calculateTotal);
</script>

<script>
    let selectedRoomsData = [];

    document.querySelectorAll('.room-card input').forEach((checkbox) => {
        checkbox.addEventListener('change', function() {

            let value = this.value;

            if (this.checked) {
                selectedRoomsData.push(value);
            } else {
                selectedRoomsData = selectedRoomsData.filter(item => item !== value);
            }

            // 👇 IMPORTANT: backend ke liye string bana rahe
            document.getElementById('room_type').value = selectedRoomsData.join(',');

            // 👇 existing functions trigger karo
            calculateTotal();

            if (selectedRoomsData.length > 0) {
                selectedRoomsData.forEach(room => {
                    fetchBookedDates(room);
                });
            }
        });
    });


    window.addEventListener('load', function() {

        let firstRoom = document.querySelector('.room-card input');

        if (firstRoom) {
            firstRoom.checked = true;

            selectedRoomsData = [firstRoom.value];

            document.getElementById('room_type').value = firstRoom.value;

            // 👇 Availability check ke liye call
            if (document.getElementById('checkin').value && document.getElementById('checkout').value) {
                fetchBookedDates(firstRoom.value);
            }
        }
    });
</script>

<script>
 document.querySelectorAll(".tabs").forEach(tabContainer => {

    const tabs = tabContainer.querySelectorAll(".tab-btn");
    const contents = tabContainer.querySelectorAll(".tab-content");

    tabs.forEach(tab => {
        tab.addEventListener("click", () => {

            tabs.forEach(btn => btn.classList.remove("active"));
            contents.forEach(content => content.classList.remove("active"));

            tab.classList.add("active");

            tabContainer
                .querySelector(`#${tab.dataset.tab}`)
                .classList.add("active");
        });
    });

});
</script>
@endpush