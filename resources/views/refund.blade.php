@extends('layouts.app')

@section('content')

<style>
    .section {
        padding: 60px 0;
        background: #f9f9f9;
    }

    .timeline {
        position: relative;
        padding-left: 30px;
    }

    .timeline::before {
        content: '';
        position: absolute;
        left: 10px;
        top: 0;
        width: 3px;
        height: 100%;
        background: #d4a017;
    }

    .timeline-item {
        margin-bottom: 30px;
    }

    .timeline-item h5 {
        color: #d4a017;
    }

    .card-box {
        background: #fff;
        padding: 20px;
        border-radius: 10px;
    }
</style>

<section class="refund-hero">
    <div class="overlay">
        <h1>Refund Policy</h1>
        <p>Simple & transparent refund system</p>
    </div>
</section>

<section class="section">
    <div class="container">

        <div class="timeline">

            <div class="timeline-item">
                <div class="card-box">
                    <h5>✔ 7 Days Before</h5>
                    <p>100% refund available</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="card-box">
                    <h5>✔ 3-7 Days Before</h5>
                    <p>50% refund available</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="card-box">
                    <h5>❌ Within 48 Hours</h5>
                    <p>No refund available</p>
                </div>
            </div>

            <div class="timeline-item">
                <div class="card-box">
                    <h5>⚠ No Show</h5>
                    <p>No refund if guest does not arrive</p>
                </div>
            </div>

        </div>

        <div class="card-box mt-4">
            <h5>💬 Need Help?</h5>
            <p>Email: vardhnvilla@gmail.com <br> Phone: +91 93171 96995</p>
        </div>

    </div>
</section>

@endsection