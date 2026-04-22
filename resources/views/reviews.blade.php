@extends('layouts.app')

@section('title', 'Guest Reviews - Vardhn Villa')

@section('content')

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        .review-hero {
            background: url('{{ asset("Images/Img/bed-room-101.jpeg") }}') center/cover no-repeat;
            height: 300px;
            position: relative;
            color: #fff;
        }

        .review-hero::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
        }

        .review-hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            top: 50%;
            transform: translateY(-50%);
        }

        .review-section {
            padding: 60px 0;
            background: #f9f9f9;
        }

        .review-card {
            background: #fff;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }

        .form-control {
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .btn-gold {
            background: #c9a14a;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
        }

        .btn-gold:hover {
            background: #a88534;
        }

        .stars i {
            font-size: 22px;
            color: #ccc;
            cursor: pointer;
        }

        .stars i.active {
            color: gold;
        }

        .review-display {
            margin-top: 40px;
        }

        .review-box {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.06);
            margin-bottom: 20px;
            text-align: center;
        }
    </style>
</head>
<!-- HERO -->
<div class="review-hero">
    <div class="review-hero-content">
        <h2>Guest Reviews</h2>
        <p>Share your experience with us</p>
    </div>
</div>

<!-- FORM SECTION -->
<div class="container review-section">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="review-card">

                <h4 class="text-center mb-4">Write a Review</h4>

                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                <form action="{{ route('reviews.store') }}" method="POST">
                    @csrf

                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>

                    <textarea name="message" class="form-control" rows="4" placeholder="Your Experience" required></textarea>

                    <!-- STAR RATING -->
                    <div class="stars text-center mb-3">
                        <i class="fa fa-star" data-value="1"></i>
                        <i class="fa fa-star" data-value="2"></i>
                        <i class="fa fa-star" data-value="3"></i>
                        <i class="fa fa-star" data-value="4"></i>
                        <i class="fa fa-star" data-value="5"></i>
                    </div>

                    <input type="hidden" name="rating" id="rating">

                    <div class="text-center">
                        <button class="btn-gold">Submit Review</button>
                    </div>

                </form>

            </div>
        </div>
    </div>

    <!-- OPTIONAL: SHOW REVIEWS -->
    @if(isset($reviews))
    <div class="review-display">
        <h4 class="text-center mb-4">What Guests Say</h4>

        <div class="row">
            @foreach($reviews as $review)
            <div class="col-md-4">
                <div class="review-box">
                    <h5>{{ $review->name }}</h5>
                    <p>"{{ $review->message }}"</p>

                    <div>
                        @for($i=1; $i<=5; $i++)
                            @if($i <=$review->rating)
                            ⭐
                            @else
                            ☆
                            @endif
                            @endfor
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endif

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