@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <h2 class="mb-4">All Bookings</h2>

        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-hover table-bordered align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>#ID</th>
                            <th>User</th>
                            <th>Car</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Total Price</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($bookings as $booking)
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
                                <td>
                                    <a href="{{ route('admin.bookings.show', $booking->id) }}"
                                        class="btn btn-sm btn-primary">View</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">No bookings found.</td>
                            </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection