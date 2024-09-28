@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Manage Rentals</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Rental ID</th>
                    <th>Customer Name</th>
                    <th>Car Details</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Total Cost</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($rentals as $rental)
                    <tr>
                        <td>{{ $rental->id }}</td>
                        <td>{{ $rental->user->name }}</td>
                        <td>{{ $rental->car->name }} ({{ $rental->car->brand }})</td>
                        <td>{{ $rental->start_date }}</td>
                        <td>{{ $rental->end_date }}</td>
                        <td>${{ number_format($rental->total_cost, 2) }}</td>
                        <td>{{ ucfirst($rental->status) }}</td>
                        <td>
                            <a href="{{ route('admin.rentals.show', $rental->id) }}" class="btn btn-info btn-sm">View</a>

                            <form action="{{ route('admin.rentals.destroy', $rental->id) }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this rental?');">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center">No rentals found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
