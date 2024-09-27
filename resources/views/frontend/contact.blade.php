@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <!-- Contact Us Section -->
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Contact Us</h1>
                <p class="lead">We are here to assist you. Get in touch with us for any inquiries or support.</p>
                <hr class="my-4">
            </div>
        </div>

        <!-- Contact Information -->
        <div class="row mt-5">
            <div class="col-lg-6">
                <h2>Our Contact Information</h2>
                <ul>
                    <li><strong>Email:</strong> support@easycarrentals.com</li>
                    <li><strong>Phone:</strong> +123-456-7890</li>
                    <li><strong>Address:</strong> 123 EasyCar Street, City, Country</li>
                </ul>
                <p>Feel free to reach out to us via email or phone. Our customer support team is available 24/7 to assist
                    you with your car rental needs.</p>
            </div>

            <div class="col-lg-6">
                <h2>Send Us a Message</h2>
                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="name">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            placeholder="Enter your name" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Your Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="Enter your email" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" placeholder="Enter your message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>

        <!-- Location Map -->
        <div class="row mt-5">
            <div class="col-lg-12">
                <h2>Our Location</h2>
                <div id="map" class="mt-4">
                    <!-- Google Maps Embed Code -->
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509372!2d144.95373631550465!3d-37.8172097426287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xbeb3be577de34f35!2s123%20EasyCar%20Street!5e0!3m2!1sen!2s!4v1632830526230!5m2!1sen!2s"
                        width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
