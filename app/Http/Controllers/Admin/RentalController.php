<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Rental;
use Illuminate\Http\Request;

class RentalController extends Controller
{
    // Display a listing of rentals (Admin Dashboard)
    public function index()
    {
        $rentals = Rental::with('car', 'user')->get();  // Eager load car and user relationships
        return view('admin.rentals.index', compact('rentals'));
    }

    // Show the details of a specific rental
    public function show($id)
    {
        $rental = Rental::with('car', 'user')->findOrFail($id);  // Eager load car and user relationships
        return view('admin.rentals.show', compact('rental'));
    }

    // Delete a specific rental
    public function destroy($id)
    {
        $rental = Rental::findOrFail($id);
        $rental->delete();

        return redirect()->route('admin.rentals')->with('success', 'Rental has been deleted successfully.');
    }

    // Admin can update the status of a rental (Ongoing, Completed, Canceled)
    public function update(Request $request, $id)
    {
        $rental = Rental::findOrFail($id);

        // Validate the request
        $request->validate([
            'status' => 'required|in:Ongoing,Completed,Canceled',
        ]);

        // Update the rental status
        $rental->status = $request->status;
        $rental->save();

        return redirect()->route('admin.rentals.show', $rental->id)->with('success', 'Rental status updated successfully.');
    }
}

