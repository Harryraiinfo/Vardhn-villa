@extends('layouts.app')

@section('title', 'Guest Reviews - Vardhn Villa')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<style>
    /* HERO */
    .review-hero {
        background: url('{{ asset("Images/Img/window-101.jpeg") }}') center/cover no-repeat;
        height: 480px;
        position: relative;
        color: #fff;
    }

    .review-hero::after {
        content: "";
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.65);
    }

    .review-hero-content {
        position: absolute;
        top: 50%;
        left: 8%;
        transform: translateY(-50%);
        z-index: 2;
    }

    .review-hero small {
        letter-spacing: 2px;
        color: #c9a14a;
    }

    .review-hero h1 {
        font-size: 60px;
        font-weight: 600;
        margin: 10px 0;
    }

    .review-hero p {
        font-size: 18px;
        color: #ddd;
    }

    /* FORM CARD */
    .review-card {
        margin-top: -130px;
        background: #fff;
        border-radius: 12px;
        padding: 25px;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
        z-index: 1;
        position: relative;
        margin-bottom: 10px;
    }

    /* INPUT */
    .form-control {
        border-radius: 8px;
        padding: 12px;
        margin-bottom: 12px;
        border: 1px solid #ddd;
    }

    /* STARS */
    .stars i {
        font-size: 20px;
        color: #ccc;
        cursor: pointer;
    }

    .stars i.active {
        color: #c9a14a;
    }

    /* RIGHT SECTION */
    .review-section {
        background: #f5f5f5;
    }

    .review-title {
        font-size: 24px;
        font-weight: 600;
        margin-bottom: 25px;
    }

    .review-title i {
        color: #c9a14a;
        margin-right: 8px;
    }

    /* REVIEW CARD */
    .review-box {
        background: #fff;
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        margin-bottom: 20px;
        height: 100%;
    }

    .review-header {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

    .review-header img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        object-fit: cover;
        margin-right: 10px;
    }

    .review-header h6 {
        margin: 0;
        font-weight: 600;
    }

    .review-stars i {
        color: #c9a14a;
        font-size: 14px;
    }

    .review-text {
        font-size: 14px;
        color: #555;
        margin-top: 10px;
    }

    .review-date {
        font-size: 12px;
        color: #999;
        margin-top: 10px;
    }

    @media (max-width: 768px) {

        .review-hero {
            height: 350px;
        }

        .review-hero-content {
            left: 5%;
            right: 5%;

        }

        .review-hero h1 {
            font-size: 32px;
        }

        .review-hero p {
            font-size: 14px;
        }

        .review-card {
            margin-top: 20px;
            padding: 20px;
        }

    }

    /* ========================= */

    @media (max-width: 576px) {

        .review-hero h1 {
            font-size: 26px;
        }

        .review-text {
            font-size: 13px;
        }

    }
</style>
<div class="review-section">

    <!-- HERO -->
    <div class="review-hero">
        <div class="review-hero-content">
            <small>GUEST FEEDBACK</small>
            <h1>Guest<br>Experiences</h1>
            <p>We value your feedback.<br>Share your experience with us!</p>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">

            <!-- LEFT FORM -->
            <div class="col-md-4">
                <div class="review-card">
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    <h5 class="mb-3">
                        <i class="fa fa-comment text-warning"></i> Write a Review
                    </h5>

                    <form action="{{ route('reviews.store') }}" method="POST">
                        @csrf

                        <input type="text" name="name" class="form-control" placeholder="Your Name">

                        <textarea name="message" class="form-control" rows="4" placeholder="Share your experience..."></textarea>

                        <label>Your Rating</label>
                        <div class="stars mb-3 pt-1">
                            <i class="fa fa-star" data-value="1"></i>
                            <i class="fa fa-star" data-value="2"></i>
                            <i class="fa fa-star" data-value="3"></i>
                            <i class="fa fa-star" data-value="4"></i>
                            <i class="fa fa-star" data-value="5"></i>
                        </div>

                        <input type="hidden" name="rating" id="rating">

                        <button class="w-100 btn btn-outline-warning">SUBMIT REVIEW</button>
                    </form>

                </div>
            </div>

            <!-- RIGHT REVIEWS -->
            <div class="col-md-8 ">

                <div class="review-title">
                    <i class="fa fa-quote-left"></i> What Our Guests Say
                </div>

                <div class="row justify-content-flex-start">
                    @foreach($reviews as $review)
                    <div class="col-md-4 my-3">
                        <div class="review-box" data-aos="zoom-in">

                            <div class="review-header">
                                <i class="fa-solid fa-user-circle fs-1"></i>
                                <!-- <img src="https://i.pravatar.cc/100?u={{ $review->id }}"> -->
                                <div class="ps-3">
                                    <h6>{{ $review->name }}</h6>
                                    <div class="review-stars mt-1">
                                        @for($i=1; $i<=5; $i++)
                                            @if($i <=$review->rating)
                                            <i class="fa fa-star"></i>
                                            @else
                                            <i class="fa fa-star text-secondary"></i>
                                            @endif
                                            @endfor
                                    </div>
                                </div>
                            </div>

                            <div class="review-text">
                                "{{ $review->message }}"
                            </div>

                            <div class="review-date">
                                {{ $review->created_at->format('M d, Y') }}
                            </div>

                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- <div class="text-center mt-4">
                <a href="#" class="view-btn">VIEW ALL REVIEWS</a>
            </div> -->

            </div>

        </div>
    </div>
</div>


<!-- STAR SCRIPT -->
<script>
    const stars = document.querySelectorAll('.stars i');
    const ratingInput = document.getElementById('rating');

    stars.forEach(star => {
        star.addEventListener('click', function() {
            let value = this.getAttribute('data-value');
            ratingInput.value = value;

            stars.forEach(s => s.classList.remove('active'));
            for (let i = 0; i < value; i++) {
                stars[i].classList.add('active');
            }
        });
    });
</script>

@endsection