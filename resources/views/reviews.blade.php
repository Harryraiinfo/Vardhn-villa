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
    background: rgba(0,0,0,0.65);
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
    margin-top: -150px;
    background: #fff;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 20px 50px rgba(0,0,0,0.15);
}

/* INPUT */
.form-control {
    border-radius: 8px;
    padding: 12px;
    margin-bottom: 12px;
    border: 1px solid #ddd;
}

/* BUTTON */
.btn-gold {
    background: #c9a14a;
    color: #fff;
    border-radius: 6px;
    padding: 12px;
    width: 100%;
    border: none;
    font-weight: 600;
}

.btn-gold:hover {
    background: #a88534;
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
    padding: 60px 0;
    background: #f5f5f5;
}

.review-title {
    font-size: 24px;
    font-weight: 600;
    margin-bottom: 30px;
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
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
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

/* VIEW ALL BUTTON */
.view-btn {
    border: 1px solid #c9a14a;
    padding: 10px 20px;
    color: #c9a14a;
    border-radius: 6px;
    text-decoration: none;
}

.view-btn:hover {
    background: #c9a14a;
    color: #fff;
}

</style>

<!-- HERO -->
<div class="review-hero">
    <div class="review-hero-content">
        <small>GUEST FEEDBACK</small>
        <h1>Guest<br>Experiences</h1>
        <p>We value your feedback.<br>Share your experience with us!</p>
    </div>
</div>

<div class="container">
    <div class="row">

        <!-- LEFT FORM -->
        <div class="col-md-4">
            <div class="review-card">

                <h5 class="mb-3">
                    <i class="fa fa-comment text-warning"></i> Write a Review
                </h5>

                <form action="{{ route('reviews.store') }}" method="POST">
                    @csrf

                    <input type="text" name="name" class="form-control" placeholder="Your Name">

                    <textarea name="message" class="form-control" rows="4" placeholder="Share your experience..."></textarea>

                    <label>Your Rating</label>
                    <div class="stars mb-3">
                        <i class="fa fa-star" data-value="1"></i>
                        <i class="fa fa-star" data-value="2"></i>
                        <i class="fa fa-star" data-value="3"></i>
                        <i class="fa fa-star" data-value="4"></i>
                        <i class="fa fa-star" data-value="5"></i>
                    </div>

                    <input type="hidden" name="rating" id="rating">

                    <button class="btn-gold">SUBMIT REVIEW</button>
                </form>

            </div>
        </div>

        <!-- RIGHT REVIEWS -->
        <div class="col-md-8 review-section">

            <div class="review-title">
                <i class="fa fa-quote-left"></i> What Our Guests Say
            </div>

            <div class="row">
                @foreach($reviews as $review)
                <div class="col-md-4">
                    <div class="review-box">

                        <div class="review-header">
                            <img src="https://i.pravatar.cc/100?u={{ $review->id }}">
                            <div>
                                <h6>{{ $review->name }}</h6>
                                <div class="review-stars">
                                    @for($i=1; $i<=5; $i++)
                                        @if($i <= $review->rating)
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

            <div class="text-center mt-4">
                <a href="#" class="view-btn">VIEW ALL REVIEWS</a>
            </div>

        </div>

    </div>
</div>

<!-- STAR SCRIPT -->
<script>
const stars = document.querySelectorAll('.stars i');
const ratingInput = document.getElementById('rating');

stars.forEach((star, index) => {
    star.addEventListener('click', () => {
        let value = index + 1;
        ratingInput.value = value;

        stars.forEach((s, i) => {
            s.classList.toggle('active', i < value);
        });
    });
});
</script>

@endsection