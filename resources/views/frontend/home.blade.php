@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <!-- Welcome Section -->
        <div class="jumbotron text-center">
            <h1 class="display-4">Welcome to EasyCar Rentals</h1>
            <p class="lead">Browse and book cars for your journey at the best rates!</p>
            <hr class="my-4">
            <p>Choose from a wide variety of cars including SUVs, Sedans, and more. Easy bookings and reliable service.</p>
            <a class="btn btn-primary btn-lg" href="{{ route('frontend.cars.index') }}" role="button">Browse Cars</a>
        </div>

        <!-- Quick Search Section -->
        <div class="row mt-5">
            <div class="col-lg-12 text-center">
                <h2>Find Your Car</h2>
                <p>Search and filter cars based on your needs.</p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{ route('frontend.cars.index') }}" method="GET" class="d-flex">
                    <input type="text" name="brand" class="form-control me-2" placeholder="Search by brand">
                    <select name="car_type" class="form-control me-2">
                        <option value="">Select Car Type</option>
                        <option value="SUV">SUV</option>
                        <option value="Sedan">Sedan</option>
                        <option value="Hatchback">Hatchback</option>
                        <option value="Convertible">Convertible</option>
                    </select>
                    <button type="submit" class="btn btn-primary">Search</button>
                </form>
            </div>
        </div>

        <!-- Features Section -->
        <div class="row mt-5">
            <div class="col-lg-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Wide Variety of Cars</h5>
                        <p class="card-text">Choose from SUVs, Sedans, Hatchbacks, and more to suit your needs.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Affordable Daily Rates</h5>
                        <p class="card-text">Get the best deals on car rentals with flexible rental periods.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Easy Online Booking</h5>
                        <p class="card-text">Reserve your car online with just a few clicks. Quick and easy!</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonials Section -->
        <div class="row mt-5">
            <div class="col-lg-12 text-center">
                <h2>What Our Customers Say</h2>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <p>"Great experience! The booking process was seamless and the car was in excellent condition."</p>
                        <p><strong>- John Doe</strong></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <p>"Affordable prices and a wide selection of cars to choose from. Highly recommended!"</p>
                        <p><strong>- Jane Smith</strong></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <p>"I always book my cars with EasyCar Rentals when I travel. Excellent service every time."</p>
                        <p><strong>- Robert Lee</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
