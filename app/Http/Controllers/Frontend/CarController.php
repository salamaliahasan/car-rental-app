<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    // Display all available cars
    public function index(Request $request)
    {
        $query = Car::where('availability', 1);  // Show only available cars

        // Filter by car type, brand, and daily rent price if provided
        if ($request->has('car_type')) {
            $query->where('car_type', $request->car_type);
        }

        if ($request->has('brand')) {
            $query->where('brand', $request->brand);
        }

        if ($request->has('min_price') && $request->has('max_price')) {
            $query->whereBetween('daily_rent_price', [$request->min_price, $request->max_price]);
        }

        $cars = $query->get();

        return view('frontend.cars.index', compact('cars'));
    }

    // Show a single car's details
    public function show($id)
    {
        $car = Car::findOrFail($id);
        return view('frontend.cars.show', compact('car'));
    }
}
