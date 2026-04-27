@extends('layouts.app')

@section('title', 'Room-Details - VARDHN VILLA')

@section('content')

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

  <style>
    /* Slick arrows custom style */
    .slick-prev,
    .slick-next {
      width: 50px;
      height: 50px;
      z-index: 10;
    }

    .slick-prev:before,
    .slick-next:before {
      font-size: 55px !important;
      color: #ffc107 !important;
    }


    .slick-prev {
      left: 10px;
    }

    .slick-next {
      right: 15px;
    }

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
      font-size: 14px;
    }

    .room-price {
      color: #28a745;
    }

    .fac-text {
      font-size: 15px;
    }

    .room-charges {
      color: #5e5e5e;
      text-align: right;
      font-size: 16px;
    }

    /* ========================= */
    .facilities-box {
      padding: 10px 0;
    }

    .fac-title {
      font-size: 18px;
      font-weight: 600;
      margin-bottom: 10px;
    }

    .fac-row {
      display: flex;
      flex-wrap: wrap;
      background: #f3f3f3;
      padding: 5px 12px;
      margin-bottom: 4px;
      border-radius: 4px;
    }

    .fac-item {
      display: flex;
      align-items: center;
      gap: 6px;
      font-size: 15px;
      color: #333;
      min-width: 180px;
      /* flex: 1; */
    }

    .fac-item i {
      color: #1e1e1e;
      font-size: 16px;
    }

    @media (max-width: 768px) {
      .room-options {
        display: block;
      }

      .slick-next:before,
      .slick-prev:before {
        font-size: 35px !important;
      }

      .fac-row {
        flex-direction: column;
        gap: 6px;
      }

      .fac-item {
        min-width: 100%;
        font-size: 13px;
      }

      .fac-title {
        font-size: 16px;
      }

      .room-charges,
      .extra-list-items {
        font-size: 14px;
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
    <div class="row justify-content-center align-items-start">
      <div class="col-md-6 ">
        <div class="row">
          <div class="col-md-12">
            <div class="form-room-slider booking-sec" id="roomSlider">
              <div>
                <img src="{{ asset('Images/Img/window-101.jpeg') }}" alt="Room">
                <!-- <img src="/${img}" alt> -->
              </div>
            </div>
          </div>
        </div>
        <div class="row pt-3">
          <div class="col-md-12">
            <!-- New Sections Add On -->
            <div class="container">
              <div class="row justify-content-between align-items-start">
                <h2 class="lined-heading mb-2"><span>Room Details</span></h2>
                <div class="col-sm-12">
                  <h3 class="room-charges">Room Price: <span class="room-price"> <b>₹2999</b></span></h3>
                  <h3 style="font-size: 18px; font-weight: 600; line-height: 1.1; color: #5e5e5e;">Facilities</h3>
                  <div class="facilities-box">

                    <div class="fac-row">
                      <div class="fac-item">
                        <i class="fa fa-check-circle"></i> Double Bed
                      </div>
                      <div class="fac-item">
                        <i class="fa fa-check-circle"></i> Spacious Wash Room
                      </div>
                    </div>

                    <div class="fac-row" style="background-color: white;">
                      <div class="fac-item">
                        <i class="fa fa-check-circle"></i> Attached Balcony
                      </div>
                      <div class="fac-item">
                        <i class="fa fa-check-circle"></i> Mini Fridge
                      </div>
                      <div class="fac-item">
                        <i class="fa fa-check-circle"></i> Free Wi-Fi
                      </div>
                    </div>

                    <div class="fac-row">
                      <div class="fac-item">
                        <i class="fa fa-check-circle"></i> Cable facility
                      </div>
                      <div class="fac-item">
                        <i class="fa fa-check-circle"></i> Electric Kettle
                      </div>
                      <div class="fac-item">
                        <i class="fa fa-check-circle"></i> Smart LED TV
                      </div>

                    </div>

                  </div>
                </div>

                <div class="col-sm-12 pt-2">
                  <h3 class="pb-1 text-danger" style="font-size: 18px; font-weight: 600; line-height: 1.1; color: #5e5e5e;">Extra Charges</h3>
                  <p class="extra-list-items">
                    • Tariff for Extra Adult and Child above 7 years <br>
                    • Without extra bed <b> &#8377;500/Night</b><br>
                    • With extra bed <b>&#8377;1000/Night</b><br>
                    • Tea | Coffee | Food as per order<br>
                    • Namkin | Biscuits | Juices | Drinks as per use.<br>
                  </p>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>

      <div class="col-md-6">

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
                    <input type="checkbox" value="Mountain Peaks & Valley View - 2999" checked>
                    <div class="room-content">
                      <span class="room-name">Mountain Peaks & Valley View</span>
                      <span class="room-price">₹2999</span>
                    </div>
                  </label>

                  <label class="room-card">
                    <input type="checkbox" value="Temple and Valley View - 2999">
                    <div class="room-content">
                      <span class="room-name">Temple and Valley View</span>
                      <span class="room-price">₹2999</span>
                    </div>
                  </label>

                  <label class="room-card">
                    <input type="checkbox" value="Shri Khand peak View - 2999">
                    <div class="room-content">
                      <span class="room-name">Shri Khand peak View</span>
                      <span class="room-price">₹2999</span>
                    </div>
                  </label>
                </div>

                <div class="room-options">

                  <label class="room-card">
                    <input type="checkbox" value="Mountain Peaks and Valley View - 2999">
                    <div class="room-content">
                      <span class="room-name">Mountain Peaks and Valley View</span>
                      <span class="room-price">₹2999</span>
                    </div>
                  </label>

                  <label class="room-card">
                    <input type="checkbox" value="Apple Orchard and Forest View - 2999">
                    <div class="room-content">
                      <span class="room-name">Apple Orchard and Forest View</span>
                      <span class="room-price">₹2999</span>
                    </div>
                  </label>

                  <label class="room-card">
                    <input type="checkbox" value="Village & Apple Orchard View - 2999">
                    <div class="room-content">
                      <span class="room-name">Village & Apple Orchard View</span>
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
      <p class="text-center text-success">We are Accept Your Payment only This Method</p>
      <div class="row justify-content-center align-items-center mt-3">
        <div class="col-md-5">
          <div class="Bank-deatils">
            <h5 class="mb-3"><b> Bank Transfer</b></h5>
            <p><strong>Bank Name:</strong> UCO Bank Rampur Bushahr</p>
            <p><strong>Account No:</strong> 20600100002432</p>
            <p><strong>IFSC:</strong> UCBA0001543</p>
          </div>
        </div>
        <div class="col-md-7">
          <div class="text-center">
            <p>Scan QR Code</p>
            <img src="{{ asset('Images/Img/qr-code.jpeg') }}" width="200" alt="QR Code">
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
<section class="rooms mb-5">
  <div class="container pt-3">
    <div class="row" id="roomCardsContainer">

    </div>
  </div>
  </div>
</section>


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
    slidesToShow: 3,
    infinite: true,
    autoplay: false,
    // autoplaySpeed: 2000,
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

<script>
  const commonFacilities = `
   <div class="row">
    <div class="col-sm-6">
        <ul class="list-unstyled">
            <li><i class="fa fa-check-circle" style="color: #ffc107;"></i> Double Bed</li>
            <li><i class="fa fa-check-circle" style="color: #ffc107;"></i> Spacious Wash Room</li>
            <li><i class="fa fa-check-circle" style="color: #ffc107;"></i> Attached Balcony</li>
            <li><i class="fa fa-check-circle" style="color: #ffc107;"></i> Mini Fridge</li>
            </ul>
            </div>
            <div class="col-sm-6">
            <ul class="list-unstyled">
            <li><i class="fa fa-check-circle" style="color: #ffc107;"></i> Free Wi-Fi</li>
            <li><i class="fa fa-check-circle" style="color:#ffc107;"></i> Cable facility</li>
            <li><i class="fa fa-check-circle" style="color:#ffc107;"></i> Electric Kettle</li>
            <li><i class="fa fa-check-circle" style="color:#ffc107;"></i>Smart LED TV</li>
        </ul>
    </div>
</div>`;

  //   const commonExtra = `
  //    <p class="text-left" style="line-height:1.6; margin-bottom: 5px;">
  //     • Tariff for Extra Adult and Child above 7 years <br>
  //     • Without extra bed <b> &#8377;500/Night</b><br>
  //     • With extra bed <b>&#8377;1000/Night</b><br>
  //     • Tea | Coffee | Food as per order<br>
  //     • Namkin | Biscuits | Jusice | Drinks as per use.<br>
  // </p>  `;

  const roomData = {
    "Mountain Peaks & Valley View - 2999": {
      images: [
        "Images/Img/window-101.jpeg",
        "Images/Img/bed-room-101.jpeg",
        "Images/Img/hall-101.jpeg"
      ],
      cards: [{
          title: "Shri Khand peak View",
          roomNo: "103",
          img: "Images/Img/bed-room-103.jpeg",
          "facilities": commonFacilities
        },
        {
          title: "Apple Orchard and Forest View",
          roomNo: "105",
          img: "Images/Img/bed-room-105.jpeg",
          "facilities": commonFacilities
        },
        {
          title: "Village & Apple Orchard View",
          roomNo: "106",
          img: "Images/Img/bed-room-106.jpeg",
          "facilities": commonFacilities
        }
      ]
    },

    "Temple and Valley View - 2999": {

      images: [
        "Images/Img/led-tv-105.jpeg",
        "Images/Img/bed-room-105.jpeg"
      ],
      cards: [{
          title: "Mountain Peaks & Valley View",
          roomNo: "101",
          img: "Images/Img/window-101.jpeg",
          "facilities": commonFacilities
        },
        {
          title: "Shri Khand peak View",
          roomNo: "103",
          img: "Images/Img/bed-room-103.jpeg",
          "facilities": commonFacilities
        },
        {
          title: "Village & Apple Orchard View",
          roomNo: "106",
          img: "Images/Img/bed-room-106.jpeg",
          "facilities": commonFacilities
        }
      ]
    },

    "Shri Khand peak View - 2999": {
      images: [
        "Images/Img/bed-room-103.jpeg",
        "Images/Img/led-tv-103.jpeg"
      ],
      cards: [{
          title: "Mountain Peaks and Valley View",
          roomNo: "104",
          img: "Images/Img/window-104.jpeg",
          "facilities": commonFacilities
        },
        {
          title: "Apple Orchard and Forest View",
          roomNo: "105",
          img: "Images/Img/bed-room-105.jpeg",
          "facilities": commonFacilities
        },
        {
          title: "Village & Apple Orchard View",
          roomNo: "106",
          img: "Images/Img/bed-room-106.jpeg",
          "facilities": commonFacilities
        }

      ]
    },

    "Mountain Peaks and Valley View - 2999": {

      images: [
        "Images/Img/bed-room-104.jpeg",
        "Images/Img/window-104.jpeg",
        "Images/Img/led-tv-104.jpeg"
      ],
      cards: [{
          title: "Mountain Peaks & Valley View",
          roomNo: "101",
          img: "Images/Img/window-101.jpeg",
          "facilities": commonFacilities
        },
        {
          title: "Apple Orchard and Forest View",
          roomNo: "105",
          img: "Images/Img/bed-room-105.jpeg",
          "facilities": commonFacilities
        },
        {
          title: "Village & Apple Orchard View",
          roomNo: "106",
          img: "Images/Img/bed-room-106.jpeg",
          "facilities": commonFacilities
        }
      ]
    },

    "Apple Orchard and Forest View - 2999": {
      images: [
        "Images/Img/bed-room-105.jpeg",
        "Images/Img/led-tv-105.jpeg"
      ],
      cards: [{
          title: "Mountain Peaks and Valley View",
          roomNo: "104",
          img: "Images/Img/window-104.jpeg",
          "facilities": commonFacilities
        },
        {
          title: "Mountain Peaks & Valley View",
          roomNo: "101",
          img: "Images/Img/window-101.jpeg",
          "facilities": commonFacilities
        },
        {
          title: "Village & Apple Orchard View",
          roomNo: "106",
          img: "Images/Img/bed-room-106.jpeg",
          "facilities": commonFacilities
        }
      ]
    },

    "Village & Apple Orchard View - 2999": {
      images: [
        "Images/Img/led-tv-106.jpeg",
        "Images/Img/bed-room-106.jpeg"
      ],
      cards: [{
          title: "Mountain Peaks & Valley View",
          roomNo: "101",
          img: "Images/Img/window-101.jpeg",
          "facilities": commonFacilities
        },
        {
          title: "Mountain Peaks and Valley View",
          roomNo: "104",
          img: "Images/Img/window-104.jpeg",
          "facilities": commonFacilities
        },
        {
          title: "Village & Apple Orchard View",
          roomNo: "106",
          img: "Images/Img/bed-room-106.jpeg",
          "facilities": commonFacilities
        }
      ]
    }
  };
</script>
<script>
  function updateSlider(roomType) {
    let slider = $('#roomSlider');

    slider.slick('unslick'); // destroy old slider
    slider.html(''); // clear

    let images = roomData[roomType]?.images || [];

    images.forEach(img => {
      slider.append(`<div><img src="/${img}" /></div>`);
    });

    // re-init slider
    slider.slick({
      slidesToShow: 1,
      autoplay: false,
      fade: true,
      arrows: true,

    });
  }

  // -------------------
  function updateRoomCards(roomType) {
    let container = document.getElementById('roomCardsContainer');
    container.innerHTML = "";

    let cards = roomData[roomType]?.cards || [];

    cards.forEach(card => {
      let uniqueId = Math.random().toString(36).substr(2, 5);

      container.innerHTML += `
                  <div class="col-sm-4 mt-4 double">
                <div class="room-thumb">
                 <img src="/${card.img}" alt="room 5" class="img-responsive" />
                    <div class="mask">
                        <div class="main row justify-content-center">
                            <div class="col-7">
                                <h5>${card.title}</h5>
                            </div>
                            <div class="col-5 price"> R.No. ${card.roomNo}</div>
                        </div>
                        <div class="content">
                            <div class="row">
                                <div class="tabs">
                                    <div class="tab-buttons">
                                        <button class="tab-btn active" data-tab="fac_${uniqueId}">Room Overview</button>
                                    </div>

                                    <div class="tab-content active" id="fac_${uniqueId}">
                                       ${card.facilities || ''}
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('roomlist') }}" class="btn btn-warning btn-block">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
    `;
    });
  }
  initTabs();
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
        updateSlider(this.value);
        updateRoomCards(this.value);
      }

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

      updateSlider(firstRoom.value);
      updateRoomCards(firstRoom.value);
      // 👇 Availability check ke liye call
      // if (document.getElementById('checkin').value && document.getElementById('checkout').value) {
      //   fetchBookedDates(firstRoom.value);
      // }
    }
  });
</script>

@endpush