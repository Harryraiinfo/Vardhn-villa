@extends('layouts.app')

@section('title', 'Contact - Vardhn Villa')

@section('content')

<!-- HERO -->
<section class="contact-hero">
    <div class="overlay">
        <h1 style="color:#ffc107; font-weight: 700;" data-aos="fade-up" data-aos-delay="200">
            Contacts and Reservation
        </h1>
        <p class="text-center" style="font-weight: 400;" data-aos="fade-up" data-aos-delay="200">
            We are set to serve you. Feel free to call us anytime.
        </p>
    </div>
</section>

<!-- CONTACT SECTION -->
<section class="contact-section">
    <div class="container">
        <div class="contact-sec">
            <div class="row justify-content-center align-items-center">
                <!-- FORM -->
                <div class="col-md-6 pt-3">
                    <div class="contact-form" data-aos="zoom-in" data-aos-delay="200">
                        <h2 class="ps-3">Send Message</h2>
                        <form action="https://formsubmit.co/vardhnvilla@gmail.com" method="POST">
                            @csrf
                            <input type="text" name="name" placeholder="Your Name" required>
                            <input type="text" name="phone" placeholder="Phone Number" required>
                            <input type="email" name="email" placeholder="Your Email" required>
                            <input type="text" name="whatsapp" placeholder="WhatsApp Number">
                            <textarea name="message" placeholder="Your Inquiry and message for us." rows="5"></textarea>
                            <div class="text-center mt-3">
                                <button class="btn btn-outline-warning" type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- CONTACT INFO -->
                <div class="col-md-6 pt-3">
                    <div class="contact-info" data-aos="fade-down" data-aos-delay="200">
                        <h2>Contact Info</h2>
                        <p>📍 Sarahan, Himachal Pradesh</p>
                        <p>📞 <a href="https://wa.me/+919317196995" target="_blank">+91 9317196995</a></p>
                        <p>📞 Landline <a href="tel:01782-292131">01782-292131</a></p>
                        <p>📧 <a href="mailto:vardhnvilla@gmail.com">vardhnvilla@gmail.com</a></p>

                        <!-- MAP -->
                        <div class="map mt-3">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3401.2070757021806!2d77.79659087561146!3d31.518472074214777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzHCsDMxJzA2LjUiTiA3N8KwNDcnNTcuMCJF!5e0!3m2!1sen!2sin!4v1776943105377!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection