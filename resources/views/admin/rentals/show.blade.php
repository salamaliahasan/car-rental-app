@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Rental Details</h1>

        <div class="card">
            <div class="card-header">
                Rental ID: {{ $rental->id }}
            </div>
            <div class="card-body">
                <h5 class="card-title">Customer Information</h5>
                <p><strong>Name:</strong> {{ $rental->user->name }}</p>
                <p><strong>Email:</strong> {{ $rental->user->email }}</p>
                <p><strong>Phone:</strong> {{ $rental->user->phone_number }}</p>

                <hr>

                <h5 class="card-title">Car Information</h5>
                <p><strong>Car Name:</strong> {{ $rental->car->name }}</p>
                <p><strong>Brand:</strong> {{ $rental->car->brand }}</p>
                <p><strong>Model:</strong> {{ $rental->car->model }}</p>
                <p><strong>Daily Rent Price:</strong> ${{ $rental->car->daily_rent_price }}</p>

                <hr>

                <h5 class="card-title">Rental Details</h5>
                <p><strong>Rental Start Date:</strong> {{ $rental->start_date }}</p>
                <p><strong>Rental End Date:</strong> {{ $rental->end_date }}</p>
                <p><strong>Total Cost:</strong> ${{ $rental->total_cost }}</p>
                <p><strong>Status:</strong> {{ ucfirst($rental->status) }}</p>
            </div>
        </div>

        <a href="{{ route('admin.rentals.index') }}" class="btn btn-secondary mt-3">Back to Rentals</a>
    </div>
@endsection
