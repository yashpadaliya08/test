@extends('client.layout')

@section('title', 'My Bookings')

@section('content')
<div class="container py-5">
    <h2 class="mb-4">My Bookings</h2>

    @if($bookings->isEmpty())
        <div class="alert alert-info">
            You have no bookings yet. Book a car to see it here.
        </div>
    @else
        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-hover table-bordered align-middle">
                    <thead class="table-primary">
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Car</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Total Price</th>
                            <th>Status</th>
                            <!-- <th>Action</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bookings as $booking)
                            <tr>
                                <td>{{ $booking->id }}</td>
                                <td>{{ $booking->name }}</td>
                                <td>{{ $booking->car->brand ?? 'N/A' }} {{ $booking->car->model ?? '' }}</td>
                                <td>{{ $booking->start_date }}</td>
                                <td>{{ $booking->end_date }}</td>
                                <td>₹{{ $booking->total_price ?? 'N/A' }}</td>
                                <td>
                                    @if($booking->status == 'confirmed')
                                        <span class="badge bg-success">Confirmed</span>
                                    @elseif($booking->status == 'pending')
                                        <span class="badge bg-warning text-dark">Pending</span>
                                    @else
                                        <span class="badge bg-secondary">Unknown</span>
                                    @endif
                                </td>
                                <!-- <td>
                                    <a href="#" class="btn btn-sm btn-primary disabled">View</a>
                                </td> -->
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
</div>
@endsection
