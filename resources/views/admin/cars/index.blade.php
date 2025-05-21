@extends('admin.layout')

@section('title', 'Car Listings')

@section('content')
<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Car Listings</h2>
        <a href="{{ route('admin.cars.create') }}" class="btn btn-theme">
            <i class="fas fa-plus me-1"></i> Add New Car
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow-sm border-0">
        <div class="card-body table-responsive">
            <table class="table table-hover align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Brand</th>
                        <th>Model</th>
                        <th>Year</th>
                        <th>Color</th>
                        <th>Price/Day</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($cars as $car)
                        <tr>
                            <td>
                                @if($car->image)
                                    <img src="{{ asset('storage/' . $car->image) }}" alt="Car Image" width="80" class="img-thumbnail">
                                @else
                                    <span class="text-muted">N/A</span>
                                @endif
                            </td>
                            <td>{{ $car->name }}</td>
                            <td>{{ $car->brand }}</td>
                            <td>{{ $car->model }}</td>
                            <td>{{ $car->year }}</td>
                            <td>
                                <span class="badge bg-secondary">{{ $car->color }}</span>
                            </td>
                            <td>₹{{ number_format($car->price_per_day) }}</td>
                            <td>
                                @if($car->status === 'available')
                                    <span class="badge bg-success">Available</span>
                                @elseif($car->status === 'unavailable')
                                    <span class="badge bg-danger">Unavailable</span>
                                @else
                                    <span class="badge bg-warning text-dark">N/A</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.cars.edit', $car->id) }}" class="btn btn-sm btn-outline-primary me-1">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <form action="{{ route('admin.cars.destroy', $car->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                        onclick="return confirm('Are you sure you want to delete this car?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9">
                                <p class="text-muted">No cars found.</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
