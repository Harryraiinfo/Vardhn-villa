@extends('layouts.app')

@section('content')

<style>


.section {
    padding: 60px 0;
    background: #f9f9f9;
}

.accordion-button {
    font-weight: 600;
    color: #333;
}

.accordion-button:not(.collapsed) {
    background-color: #d4a017;
    color: #fff;
}

.highlight-box {
    background: #fff;
    border-left: 5px solid #d4a017;
    padding: 20px;
    border-radius: 10px;
    margin-bottom: 20px;
}

@media(max-width:768px){
    .terms-hero h1 { font-size: 28px; }
}
</style>

<!-- HERO -->
<section class="terms-hero">
    <div class="overlay">
        <h1>Terms & Conditions</h1>
        <p>Clear, transparent & guest-friendly policies</p>
    </div>
</section>

<!-- CONTENT -->
<section class="section">
<div class="container">

    <!-- Highlight -->
    <div class="highlight-box">
        <strong>Important:</strong> By booking at Vardhn Villa, you agree to all terms below.
    </div>

    <div class="accordion" id="termsAccordion">

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#t1">
                    📌 Booking Policy
                </button>
            </h2>
            <div id="t1" class="accordion-collapse collapse show">
                <div class="accordion-body">
                    All bookings depend on availability. Please provide correct details during booking.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#t2">
                    🕒 Check-in / Check-out
                </button>
            </h2>
            <div id="t2" class="accordion-collapse collapse">
                <div class="accordion-body">
                    Check-in: 12 PM | Check-out: 11 AM. Early check-in subject to availability.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#t3">
                    💳 Payment Terms
                </button>
            </h2>
            <div id="t3" class="accordion-collapse collapse">
                <div class="accordion-body">
                    Advance payment may be required. Prices can change anytime.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#t4">
                    🚫 Rules & Restrictions
                </button>
            </h2>
            <div id="t4" class="accordion-collapse collapse">
                <div class="accordion-body">
                    No illegal activities, loud noise or disturbance allowed.
                </div>
            </div>
        </div>

    </div>

</div>
</section>

@endsection