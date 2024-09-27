@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <!-- About Us Section -->
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>About EasyCar Rentals</h1>
                <p class="lead">Your trusted partner for reliable and affordable car rentals.</p>
                <hr class="my-4">
            </div>
        </div>

        <!-- Our Mission Section -->
        <div class="row mt-5">
            <div class="col-lg-6">
                <h2>Our Mission</h2>
                <p>At EasyCar Rentals, our mission is to provide customers with the best car rental experience by offering a
                    wide selection of well-maintained vehicles at competitive prices. We strive to deliver exceptional
                    customer service and ensure that your journey is as comfortable and convenient as possible.</p>
            </div>
            <div class="col-lg-6">
                <img src="/images/mission.jpg" class="img-fluid" alt="Our Mission">
            </div>
        </div>

        <!-- Our Values Section -->
        <div class="row mt-5">
            <div class="col-lg-6 order-lg-2">
                <h2>Our Values</h2>
                <ul>
                    <li><strong>Customer Satisfaction:</strong> We prioritize the needs of our customers and work tirelessly
                        to exceed their expectations.</li>
                    <li><strong>Reliability:</strong> We ensure that our cars are well-maintained and reliable for your
                        travels.</li>
                    <li><strong>Affordability:</strong> We offer competitive prices and flexible rental periods to suit
                        every budget.</li>
                    <li><strong>Transparency:</strong> No hidden fees or surprises—what you see is what you pay.</li>
                </ul>
            </div>
            <div class="col-lg-6 order-lg-1">
                <img src="/images/values.jpg" class="img-fluid" alt="Our Values">
            </div>
        </div>

        <!-- Why Choose Us Section -->
        <div class="row mt-5">
            <div class="col-lg-12 text-center">
                <h2>Why Choose EasyCar Rentals?</h2>
                <p>We are committed to making your car rental experience seamless and enjoyable.</p>
            </div>

            <div class="col-lg-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Wide Selection of Cars</h5>
                        <p class="card-text">From SUVs to Sedans, we have the perfect car for your journey.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Affordable Rates</h5>
                        <p class="card-text">Our prices are competitive, and we offer flexible rental periods to fit your
                            needs.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Excellent Customer Service</h5>
                        <p class="card-text">Our team is here to assist you 24/7 and ensure your trip is smooth and
                            hassle-free.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
