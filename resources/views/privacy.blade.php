@extends('layouts.app')

@section('content')

<style>
    /* SECTION */
    .section {
        padding: 60px 0;
        background: #f5f5f5;
    }

    /* GLASS CARD */
    .glass-card {
        background: rgba(255, 255, 255, 0.85);
        backdrop-filter: blur(10px);
        border-radius: 15px;
        padding: 25px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        transition: 0.3s;
        height: 100%;
    }

    .glass-card:hover {
        transform: translateY(-5px);
    }

    /* ICON */
    .icon {
        font-size: 30px;
        color: #d4a017;
        margin-bottom: 10px;
    }

    /* TITLE */
    .title {
        font-weight: 600;
        margin-bottom: 10px;
    }

    /* HIGHLIGHT */
    .highlight {
        background: #fff;
        border-left: 5px solid #d4a017;
        padding: 20px;
        border-radius: 10px;
        margin-bottom: 30px;
    }

    /* FOOTER CARD */
    .contact-box {
        background: #000;
        color: #fff;
        border-radius: 15px;
        padding: 25px;
        text-align: center;
    }

    /* MOBILE */
    @media(max-width:768px) {
        .hero-privacy h1 {
            font-size: 28px;
        }
    }
</style>

<!-- HERO -->
<section class="hero-privacy">
    <div class="overlay">
        <h1>Privacy Policy</h1>
        <p>Your privacy is our priority at <strong>Vardhn Villa</strong></p>
    </div>
</section>

<!-- CONTENT -->
<section class="section">
    <div class="container">

        <!-- Highlight -->
        <div class="highlight text-dark">
            🔐 We respect your privacy and ensure your data is safe, secure, and never misused.
        </div>

        <div class="row g-4">

            <!-- Card 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="glass-card">
                    <div class="icon">📋</div>
                    <h5 class="title">Information We Collect</h5>
                    <p>Name, phone number, email, and booking details during reservation.</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="glass-card">
                    <div class="icon">⚙️</div>
                    <h5 class="title">How We Use Data</h5>
                    <p>To process bookings, improve services, and enhance your stay experience.</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="glass-card">
                    <div class="icon">🔒</div>
                    <h5 class="title">Data Security</h5>
                    <p>We apply strong security measures to protect your personal data.</p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="glass-card">
                    <div class="icon">🤝</div>
                    <h5 class="title">Sharing Policy</h5>
                    <p>We never sell your data. Only shared if legally required.</p>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-md-6 col-lg-4">
                <div class="glass-card">
                    <div class="icon">🍪</div>
                    <h5 class="title">Cookies</h5>
                    <p>Used to improve website performance and user experience.</p>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="col-md-6 col-lg-4">
                <div class="glass-card">
                    <div class="icon">👤</div>
                    <h5 class="title">Your Rights</h5>
                    <p>You can request to access, update, or delete your personal data.</p>
                </div>
            </div>

        </div>

        <!-- CONTACT -->
        <div class="contact-box mt-5">
            <h5>📞 Need Help?</h5>
            <p>Email: vardhnvilla@gmail.com <br> Phone: +91 93171 96995</p>
        </div>

    </div>
</section>

@endsection