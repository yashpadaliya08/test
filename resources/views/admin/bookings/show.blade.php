@extends('admin.layout')

@section('content')
<div class="container-fluid">
    <h2 class="mb-4">Booking Details (ID: {{ $booking->id }})</h2>

    <div class="card shadow-sm">
        <div class="card-body">
            <p><strong>User:</strong> {{ $booking->name }}</p>
            <p><strong>Car:</strong> {{ $booking->car->brand ?? 'N/A' }} {{ $booking->car->model ?? '' }}</p>
            <p><strong>From:</strong> {{ $booking->start_date }}</p>
            <p><strong>To:</strong> {{ $booking->end_date }}</p>
            <p><strong>Total Price:</strong> ₹{{ $booking->total_price ?? 'N/A' }}</p>
            <p><strong>Pickup Location:</strong> {{ $booking->pickup_location }}</p>
            <p><strong>Status:</strong>
                @if($booking->status == 'confirmed')
                    <span class="badge bg-success">Confirmed</span>
                @elseif($booking->status == 'pending')
                    <span class="badge bg-warning text-dark">Pending</span>
                @else
                    <span class="badge bg-secondary">Unknown</span>
                @endif
            </p>
            <a href="{{ route('admin.bookings.index') }}" class="btn btn-secondary mt-3">Back</a>
        </div>
    </div>
</div>
@endsection
