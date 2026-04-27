@extends('layouts.app')

@section('title', 'Room-List - Vardhn Villa')

@section('content')

<section class="room-details-hero">
    <div class="overlay">
        <h1 data-aos="fade-up">Room Details and Views</h1>
        <!-- <p data-aos="fade-up" data-aos-delay="200">
            A visual tour to Vardhn Villa
        </p> -->
    </div>
</section>

<!-- Rooms -->
<section class="rooms my-5">
    <div class="container">
        <div class="row room-list fadeIn appear">

            <!-- Room 1 -->
            <div class="col col-sm-4 mt-4">
                <div class="room-thumb">
                    <div class="form-room-slider">
                        <div><img src="{{ asset('Images/Img/bed-room-101.jpeg')}}" alt="bed-room-101" class="img-responsive" style="border-radius: 0px; height: 100%;" /></div>
                        <div><img src="{{ asset('Images/Img/hall-101.jpeg')}}" alt="hall-101" class="img-responsive" style="border-radius: 0px; height: 100%;" /></div>
                        <div><img src="{{ asset('Images/Img/window-101.jpeg')}}" alt="window-101" class="img-responsive" style="border-radius: 0px; height: 100%;" /></div>
                        <div><img src="{{ asset('Images/Img/washroom-101.jpeg')}}" alt="washroom-101" class="img-responsive" style="border-radius: 0px;" /></div>
                    </div>
                    <div class="mask">
                        <div class="main row justify-content-center">
                            <div class="col-7">
                                <h5>Mountain Peaks & Valley View </h5>
                            </div>
                            <div class="col-5 price"> R.No. 101</div>
                        </div>
                        <div class="content">
                            <!-- <p><span>A modern room in Vardhn Villa</span> Rejoice with your family while experiencing the legendary hospitality of some of the best hotels in the world. </p> -->
                            <!-- <h6 class="text-center py-1">Room Details</h6> -->
                            <div class="row">
                                <div class="tabs">
                                    <div class="tab-buttons">
                                        <button class="tab-btn active" data-tab="facilities">Room Overview</button>
                                        <!-- <button class="tab-btn" data-tab="extra">Extra Charges</button> -->
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
                                                    <li><i class="fa fa-check-circle" style="color:#ffc107;"></i> Water Bottle</li>
                                                    <li><i class="fa fa-check-circle" style="color:#ffc107;"></i>Smart LED TV</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="tab-content" id="extra">
                                        <p class="text-left" style="line-height:1.6; margin-bottom: 5px;">
                                            • Tariff for Extra adult and Child above 7 years <br>
                                            • Without extra bed <b> &#8377;500/Night</b><br>
                                            • With extra bed <b>&#8377;1000/Night</b><br>
                                            • Tea | Coffee | Food as per order<br>
                                            • Namkin | Biscuits | Jusice | drinks as per use.<br>
                                        </p>
                                    </div> -->
                                </div>
                            </div>
                            <a href="{{ route('booking') }}" class="btn btn-warning btn-block">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Room 2 -->
            <div class="col col-sm-4 mt-4">
                <div class="room-thumb">
                    <div class="form-room-slider">
                        <div><img src="{{ asset('Images/Img/window-101.jpeg')}}" alt="window-101" class="img-responsive" style="border-radius: 0px; height: 100%;" /></div>
                        <div><img src="{{ asset('Images/Img/bed-room-101.jpeg')}}" alt="bed-room-101" class="img-responsive" style="border-radius: 0px; height: 100%;" /></div>
                        <div><img src="{{ asset('Images/Img/hall-101.jpeg')}}" alt="hall-101" class="img-responsive" style="border-radius: 0px; height: 100%;" /></div>
                    </div>

                    <div class="mask">
                        <div class="main row justify-content-center">
                            <div class="col-7">
                                <h5>Temple and Valley </h5>
                            </div>
                            <div class="col-5 price">
                                <!-- &#8377;  -->
                                R.No. 102
                                <!-- <span>a night</span> -->
                            </div>
                        </div>
                        <div class="content">
                            <!-- <p><span>A modern room in Vardhn Villa</span> The superior room is here to heighten your spirits!</p> -->
                            <!-- <h6 class="text-center py-1">Room Details</h6> -->
                            <div class="row">
                                <div class="tabs">
                                    <div class="tab-buttons">
                                        <button class="tab-btn active" data-tab="facilities2">Room Overview</button>
                                        <!-- <button class="tab-btn" data-tab="extra2">Extra Charges</button> -->
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
                                                    <li><i class="fa fa-check-circle" style="color:#ffc107;"></i> Water Bottle</li>
                                                    <li><i class="fa fa-check-circle" style="color:#ffc107;"></i>Smart LED TV</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="tab-content" id="extra2">
                                        <p class="text-left" style="line-height:1.6; margin-bottom: 5px;">
                                            • Tariff for Extra adult and Child above 7 years <br>
                                            • Without extra bed <b> &#8377;500/Night</b><br>
                                            • With extra bed <b>&#8377;1000/Night</b><br>
                                            • Tea | Coffee | Food as per order<br>
                                            • Namkin | Biscuits | Jusice | drinks as per use.<br>
                                        </p>
                                    </div> -->
                                </div>
                            </div>
                            <a href="{{ route('booking') }}" class="btn btn-warning btn-block">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Room 3 -->
            <div class="col col-sm-4 mt-4">
                <div class="room-thumb">
                    <!-- <img src="{{ asset('Images/Img/table-chair-103.jpeg')}}" alt="bed-room image" class="img-responsive"> -->
                    <div class="form-room-slider">
                        <div><img src="{{ asset('Images/Img/bed-room-103.jpeg')}}" alt="bed-room-103" class="img-responsive" style="border-radius: 0px; height: 100%;" /></div>
                        <div><img src="{{ asset('Images/Img/table-chair-103.jpeg')}}" alt="table-chair-103" class="img-responsive" style="border-radius: 0px; height: 100%;" /></div>
                        <div><img src="{{ asset('Images/Img/led-tv-103.jpeg')}}" alt="led-tv-103-103" class="img-responsive" style="border-radius: 0px; height: 100%;" /></div>
                        <div><img src="{{ asset('Images/Img/washroom-103.jpeg')}}" alt="washroom-103" class="img-responsive" style="border-radius: 0px;" /></div>
                    </div>
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
                            <!-- <h6 class="text-center py-1">Room Details</h6> -->
                            <div class="row">
                                <div class="tabs">
                                    <div class="tab-buttons">
                                        <button class="tab-btn active" data-tab="facilities3">Room Overview</button>
                                        <!-- <button class="tab-btn" data-tab="extra3">Extra Charges</button> -->
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
                                                    <li><i class="fa fa-check-circle" style="color:#ffc107;"></i> Water Bottle</li>
                                                    <li><i class="fa fa-check-circle" style="color:#ffc107;"></i>Smart LED TV</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="tab-content" id="extra3">
                                        <p class="text-left" style="line-height:1.6; margin-bottom: 5px;">
                                            • Tariff for Extra adult and Child above 7 years <br>
                                            • Without extra bed <b> &#8377;500/Night</b><br>
                                            • With extra bed <b>&#8377;1000/Night</b><br>
                                            • Tea | Coffee | Food as per order<br>
                                            • Namkin | Biscuits | Jusice | drinks as per use.<br>
                                        </p>
                                    </div> -->
                                </div>
                            </div>
                            <a href="{{ route('booking') }}" class="btn btn-warning btn-block">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Room 4 -->
            <div class="col col-sm-4 mt-4 ">
                <div class="room-thumb">
                    <div class="form-room-slider">
                        <div><img src="{{ asset('Images/Img/bed-room-104.jpeg')}}" alt="bed-room-104" class="img-responsive" style="border-radius: 0px; height: 100%;" /></div>
                        <div><img src="{{ asset('Images/Img/led-tv-104.jpeg')}}" alt="led-tv-104" class="img-responsive" style="border-radius: 0px; height: 100%;" /></div>
                        <div><img src="{{ asset('Images/Img/table-sofa-104.jpeg')}}" alt="table-sofa-104" class="img-responsive" style="border-radius: 0px; height: 100%;" /></div>
                        <div><img src="{{ asset('Images/Img/window-104.jpeg')}}" alt="window-104" class="img-responsive" style="border-radius: 0px; height: 100%;" /></div>
                        <div><img src="{{ asset('Images/Img/washroom-104.jpeg')}}" alt="washroom-104" class="img-responsive" style="border-radius: 0px;" /></div>
                    </div>
                    <!-- <img src="{{ asset('Images/Img/bed-room-104.jpeg')}}" alt="room 5" class="img-responsive" /> -->
                    <div class="mask">
                        <div class="main row justify-content-center">
                            <div class="col-7">
                                <h5>Mountain & Valley View</h5>
                            </div>
                            <div class="col-5 price"> R.No. 104</div>
                        </div>
                        <div class="content">
                            <!-- <h6 class="text-center py-1">Room Details</h6> -->
                            <div class="row">
                                <div class="tabs">
                                    <div class="tab-buttons">
                                        <button class="tab-btn active" data-tab="facilities4">Room Overview</button>
                                        <!-- <button class="tab-btn" data-tab="extra4">Extra Charges</button> -->
                                    </div>

                                    <div class="tab-content active" id="facilities4">
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
                                                    <li><i class="fa fa-check-circle" style="color:#ffc107;"></i> Water Bottle</li>
                                                    <li><i class="fa fa-check-circle" style="color:#ffc107;"></i>Smart LED TV</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="tab-content" id="extra4">
                                        <p class="text-left" style="line-height:1.6; margin-bottom: 5px;">
                                            • Tariff for Extra adult and Child above 7 years <br>
                                            • Without extra bed <b> &#8377;500/Night</b><br>
                                            • With extra bed <b>&#8377;1000/Night</b><br>
                                            • Tea | Coffee | Food as per order<br>
                                            • Namkin | Biscuits | Jusice | drinks as per use.<br>
                                        </p>
                                    </div> -->
                                </div>
                            </div>
                            <a href="{{ route('booking') }}" class="btn btn-warning btn-block">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Room 5 -->
            <div class="col col-sm-4 mt-4 ">
                <div class="room-thumb">
                    <div class="form-room-slider">
                        <div><img src="{{ asset('Images/Img/bed-room-105.jpeg')}}" alt="bed-room-105" class="img-responsive" style="border-radius: 0px; height: 100%;" /></div>
                        <div><img src="{{ asset('Images/Img/bed-105.jpeg')}}" alt="bed-105" class="img-responsive" style="border-radius: 0px; height: 100%;" /></div>
                        <div><img src="{{ asset('Images/Img/led-tv-105.jpeg')}}" alt="led-tv-105" class="img-responsive" style="border-radius: 0px; height: 100%;" /></div>
                        <div><img src="{{ asset('Images/Img/washroom-105.jpeg')}}" alt="washroom-105" class="img-responsive" style="border-radius: 0px;" /></div>
                    </div>
                    <!-- <img src="{{ asset('Images/Img/bed-room-105.jpeg')}}" alt="room 4" class="img-responsive" /> -->
                    <div class="mask">
                        <div class="main row justify-content-center">
                            <div class="col-7">
                                <h5>Apple orchard and Forest View </h5>
                            </div>
                            <div class="col-5 price">R.No. 105</div>
                        </div>
                        <div class="content">
                            <!-- <h6 class="text-center py-1">Room Details</h6> -->
                            <div class="row">
                                <div class="tabs">
                                    <div class="tab-buttons">
                                        <button class="tab-btn active" data-tab="facilities5">Room Overview</button>
                                        <!-- <button class="tab-btn" data-tab="extra5">Extra Charges</button> -->
                                    </div>

                                    <div class="tab-content active" id="facilities5">
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
                                                    <li><i class="fa fa-check-circle" style="color:#ffc107;"></i> Water Bottle</li>
                                                    <li><i class="fa fa-check-circle" style="color:#ffc107;"></i>Smart LED TV</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="tab-content" id="extra5">
                                        <p class="text-left" style="line-height:1.6; margin-bottom: 5px;">
                                            • Tariff for Extra adult and Child above 7 years <br>
                                            • Without extra bed <b> &#8377;500/Night</b><br>
                                            • With extra bed <b>&#8377;1000/Night</b><br>
                                            • Tea | Coffee | Food as per order<br>
                                            • Namkin | Biscuits | Jusice | drinks as per use.<br>
                                        </p>
                                    </div> -->
                                </div>
                            </div>
                            <a href="{{ route('booking') }}" class="btn btn-warning btn-block">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Room 6-->
            <div class="col col-sm-4 mt-4">
                <div class="room-thumb">
                    <div class="form-room-slider">
                        <div><img src="{{ asset('Images/Img/bed-room-106.jpeg')}}" alt="bed-room-106" class="img-responsive" style="border-radius: 0px; height: 100%;" /></div>
                        <div><img src="{{ asset('Images/Img/led-tv-106.jpeg')}}" alt="led-tv-106" class="img-responsive" style="border-radius: 0px; height: 100%;" /></div>
                    </div>
                    <!-- <img src="{{ asset('Images/Img/bed-room-106.jpeg')}}" alt="room 6" class="img-responsive" /> -->
                    <div class="mask">
                        <div class="main row justify-content-center">
                            <div class="col-7">
                                <h5>Village & Apple orchard View</h5>
                            </div>
                            <div class="col-5 price">R.No. 106</div>
                        </div>
                        <div class="content">
                            <!-- <h6 class="text-center py-1">Room Details</h6> -->
                            <div class="row">
                                <div class="tabs">
                                    <div class="tab-buttons">
                                        <button class="tab-btn active" data-tab="facilities6">Room Overview</button>
                                        <!-- <button class="tab-btn" data-tab="extra6">Extra Charges</button> -->
                                    </div>

                                    <div class="tab-content active" id="facilities6">
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
                                                    <li><i class="fa fa-check-circle" style="color:#ffc107;"></i> Water Bottle</li>
                                                    <li><i class="fa fa-check-circle" style="color:#ffc107;"></i>Smart LED TV</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="tab-content" id="extra6">
                                        <p class="text-left" style="line-height:1.6; margin-bottom: 5px;">
                                            • Tariff for Extra adult and Child above 7 years <br>
                                            • Without extra bed <b> &#8377;500/Night</b><br>
                                            • With extra bed <b>&#8377;1000/Night</b><br>
                                            • Tea | Coffee | Food as per order<br>
                                            • Namkin | Biscuits | Jusice | drinks as per use.<br>
                                        </p>
                                    </div> -->
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

@endsection

@push('scripts')
<!-- Javascript code For Slider  -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script>
    $('.form-room-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 1000,
        speed: 1000,
        arrows: false,
        dots: false,
        fade: true,
        cssEase: 'linear',

    });
</script>

<!-- <script>
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
</script> -->
@endpush