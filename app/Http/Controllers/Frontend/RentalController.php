<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Rental;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    // Display the form for booking a car
    public function create($carId)
    {
        $car = Car::findOrFail($carId);
        return view('frontend.rentals.create', compact('car'));
    }

    // Store a new rental in the database
    public function store(Request $request, $carId)
    {
        $user_id=$request->header('id');
        $request->validate([
            'start_date' => 'required|date|after:today',
            'end_date' => 'required|date|after:start_date',
        ]);

        $car = Car::findOrFail($carId);
        $totalCost = $car->daily_rent_price * $request->input('days'); // Calculate total cost based on days

        // Create new rental
        Rental::create([
            'user_id' => $user_id,
            'car_id' => $carId,
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date'),
            'total_cost' => $totalCost,
        ]);

        // Send confirmation email (optional implementation here)

        return redirect()->route('rentals.index')->with('success', 'Car booked successfully.');
    }

    // Display the current user's booking history
    public function index()
    {
        // $rentals = Auth::user()->rentals;  // Get the logged-in user's rentals
        return view('frontend.rentals.index', compact('rentals'));
    }

    // Cancel a booking if it hasn't started yet
    public function cancel(Request $request,$rentalId)
    {
        $user_id=$request->header('id');
        $rental = Rental::where('id', $rentalId)
            ->where('user_id', $user_id)
            ->where('start_date', '>', now())  // Ensure the rental has not started
            ->firstOrFail();

        $rental->delete();  // Cancel the rental

        return redirect()->route('rentals.index')->with('success', 'Rental canceled successfully.');
    }
}
