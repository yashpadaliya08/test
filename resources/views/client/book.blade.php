@extends('client.layout')

@section('content')
<div class="container py-5">
    <h2 class="mb-4">Book Your Ride</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($car)
        <div class="card mb-4 shadow-sm">
            <div class="row g-0">
                <div class="col-md-4">
                    @if($car->image)
                        <img src="{{ asset('storage/' . $car->image) }}" class="img-fluid rounded-start" alt="Car Image">
                    @else
                        <img src="https://via.placeholder.com/300x200?text=No+Image" class="img-fluid rounded-start" alt="No Image">
                    @endif
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $car->brand }} {{ $car->model }} ({{ $car->year }})</h5>
                        <p class="card-text">
                            <strong>Color:</strong> {{ $car->color }}<br>
                            <strong>Type:</strong> {{ $car->type }}<br>
                            <strong>Price Per Day:</strong> ₹{{ $car->price_per_day }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="alert alert-danger">Car information not found.</div>
    @endif

    @if($car)
    <form action="{{ route('booking.store') }}" method="POST" class="shadow p-4 rounded bg-light">
        @csrf
        <input type="hidden" name="car_id" value="{{ $car->id }}">

        <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="text" name="phone" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="pickup_date" class="form-label">Pickup Date</label>
            <input type="date" name="start_date" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="return_date" class="form-label">Return Date</label>
            <input type="date" name="end_date" class="form-control" required>
        </div>

        <!-- <div class="mb-3">
            <label for="pickup_location" class="form-label">Pickup Location</label>
            <input type="text" name="pickup_location" class="form-control" required>
        </div> -->

        <button type="submit" class="btn btn-success">Confirm Booking</button>
    </form>
    @endif
</div>
@endsection
