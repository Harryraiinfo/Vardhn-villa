@extends('layouts.app')

@section('title', 'Gallery-pic - Vardhn Villa')

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
      <div class="col-sm-4 mt-4">
        <div class="room-thumb"> <img src="{{ asset('Images/Img/bed-room.jpeg')}}" alt="room 3" class="img-responsive" />
          <div class="mask">
            <div class="main">
              <h5>Mountain Peaks & Valley View
              </h5>
              <div class="price"> R.No. 101</div>
            </div>
            <div class="content">
              <p><span>A modern hotel room in Heritage Hotel</span> Rejoice with your family while experiencing the legendary hospitality of some of the best hotels in the world. </p>
              <div class="row">
                <div class="col-xs-6">
                  <ul class="list-unstyled">
                    <li><i class="fa fa-check-circle"></i> L.C.D. Television</li>
                    <li><i class="fa fa-check-circle"></i> Cable Facilities</li>

                  </ul>
                </div>
                <div class="col-xs-6">
                  <ul class="list-unstyled">
                    <li><i class="fa fa-check-circle"></i> Free Internet</li>
                    <li><i class="fa fa-check-circle"></i> Air conditioned and heated in winter.</li>
                  </ul>
                </div>
              </div>
              <a href="room-detail.html" class="btn btn-primary btn-block">Read More</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Room 2 -->
      <div class="col-sm-4 mt-4">
        <div class="room-thumb"> <img src="{{ asset('Images/Img/bed-room.jpeg')}}" alt="room 2" class="img-responsive" />
          <div class="mask">
            <div class="main">
              <h5>Temple and Valley </h5>
              <div class="price">
                <!-- &#8377;  -->
                R.No. 102
                <!-- <span>a night</span> -->
              </div>
            </div>
            <div class="content">
              <p><span>A modern hotel room in Heritage Hotel</span> The superior room is here to heighten your spirits!</p>
              <div class="row">
                <div class="col-xs-6">
                  <ul class="list-unstyled">

                    <li><i class="fa fa-check-circle"></i> Mini Bar</li>
                    <li><i class="fa fa-check-circle"></i> L.C.D. Television</li>
                  </ul>
                </div>
                <div class="col-xs-6">
                  <ul class="list-unstyled">
                    <li><i class="fa fa-check-circle"></i> Free Internet</li>
                    <li><i class="fa fa-check-circle"></i> Air conditioned and heated in winter.</li>
                  </ul>
                </div>
              </div>
              <a href="room-detail.html" class="btn btn-primary btn-block">Read More</a>
            </div>
          </div>
        </div>
      </div>


      <!-- Room 3 -->
      <div class="col-sm-4 mt-4">
        <div class="room-thumb">
          <img src="{{ asset('Images/Img/bed-room.jpeg')}}" alt="bed-room image" class="img-responsive">
          <div class="mask">
            <div class="main">
              <h5>Shri Khand peak View</h5>
              <div class="price">R.No. 103
                <!-- <span>a night</span> -->
              </div>
            </div>
            <div class="content">
              <p><span>A modern hotel room in Heritage Hotel</span> The spacious deluxe room has everything you could possibly desire for!</p>
              <div class="row">
                <div class="col-xs-6">
                  <ul class="list-unstyled">

                    <li><i class="fa fa-check-circle"></i> Mini Bar</li>
                    <li><i class="fa fa-check-circle"></i> L.C.D. Television</li>
                  </ul>
                </div>
                <div class="col-xs-6">
                  <ul class="list-unstyled">
                    <li><i class="fa fa-check-circle"></i> Free Internet</li>
                    <li><i class="fa fa-check-circle"></i> Air conditioned and heated in winter.</li>
                  </ul>
                </div>
              </div>
              <a href="#" class="btn btn-warning btn-block">Read More</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Room 4 -->
      <div class="col-sm-4 mt-4 double">
        <div class="room-thumb"> <img src="{{ asset('Images/Img/bed-room.jpeg')}}" alt="room 5" class="img-responsive" />
          <div class="mask">
            <div class="main">
              <h5>Mountain & Valley View</h5>
              <div class="price"> R.No. 104</div>
            </div>
            <div class="content">
              <p><span>A modern hotel room in Heritage Hotel</span> Comfortable tastefully decorated rooms with their own balconies either have a sea-view.</p>
              <div class="row">
                <div class="col-xs-6">
                  <ul class="list-unstyled">
                    <li><i class="fa fa-check-circle"></i> L.C.D. Television</li>
                    <li><i class="fa fa-check-circle"></i> Cable Facilities</li>

                  </ul>
                </div>
                <div class="col-xs-6">
                  <ul class="list-unstyled">
                    <li><i class="fa fa-check-circle"></i> Free Internet</li>
                    <li><i class="fa fa-check-circle"></i> Air conditioned and heated in winter.</li>
                  </ul>
                </div>
              </div>
              <a href="room-detail.html" class="btn btn-primary btn-block">Book Now</a>
            </div>
          </div>
        </div>
      </div>


      <!-- Room 5 -->
      <div class="col-sm-4 mt-4 double executive">
        <div class="room-thumb"> <img src="{{ asset('Images/Img/bed-room.jpeg')}}" alt="room 4" class="img-responsive" />
          <div class="mask">
            <div class="main">
              <h5>Apple orchard and Forest </h5>
              <div class="price">R.No. 105</div>
            </div>
            <div class="content">
              <p><span>A modern hotel room in Heritage Hotel</span>Immerse yourself in the elegance and comfort of executive room!</p>
              <div class="row">
                <div class="col-xs-6">
                  <ul class="list-unstyled">

                    <li><i class="fa fa-check-circle"></i> Mini Bar</li>
                    <li><i class="fa fa-check-circle"></i> L.C.D. Television</li>
                  </ul>
                </div>
                <div class="col-xs-6">
                  <ul class="list-unstyled">
                    <li><i class="fa fa-check-circle"></i> Free Internet</li>
                    <li><i class="fa fa-check-circle"></i> Air conditioned and heated in winter.</li>
                  </ul>
                </div>
              </div>
              <a href="room-detail.html" class="btn btn-primary btn-block">Book Now</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Room 6-->
      <div class="col-sm-4 mt-4 single executive apartment">
        <div class="room-thumb"> <img src="{{ asset('Images/Img/bed-room.jpeg')}}" alt="room 6" class="img-responsive" />
          <div class="mask">
            <div class="main">
              <h5>Village & Apple orchard View</h5>
              <div class="price">R.No. 106</div>
            </div>
            <div class="content">
              <p><span>A modern hotel room in Heritage Hotel</span> From a glorious honeymoon and anniversaries, treasure each occasion with a celebration at some of the finest hotels in the world. </p>
              <div class="row">
                <div class="col-xs-6">
                  <ul class="list-unstyled">
                    <li><i class="fa fa-check-circle"></i> L.C.D. Television</li>
                    <li><i class="fa fa-check-circle"></i> Cable Facilities</li>

                  </ul>
                </div>
                <div class="col-xs-6">
                  <ul class="list-unstyled">
                    <li><i class="fa fa-check-circle"></i> Free Internet</li>
                    <li><i class="fa fa-check-circle"></i> Air conditioned and heated in winter.</li>
                  </ul>
                </div>
              </div>
              <a href="room-detail.html" class="btn btn-primary btn-block">Book Now</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

@endsection