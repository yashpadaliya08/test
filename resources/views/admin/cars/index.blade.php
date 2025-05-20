@extends('admin.layout')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Car Listings</h2>
        <a href="{{ route('admin.cars.create') }}" class="btn btn-success">
            <i class="fas fa-plus"></i> Add New Car
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
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
            @foreach ($cars as $car)
                <tr>
                    <td>
                        @if($car->image)
                            <img src="{{ asset('storage/' . $car->image) }}" width="80">
                        @else
                            N/A
                        @endif
                    </td>
                    <td>{{ $car->name }}</td>
                    <td>{{ $car->brand }}</td>
                    <td>{{ $car->model }}</td>
                    <td>{{ $car->year }}</td>
                    <td>{{ $car->color }}</td>
                    <td>₹{{ $car->price_per_day }}</td>
                    <td>{{ ucfirst($car->status ?? 'N/A') }}</td>
                    <td>
                        <a href="{{ route('admin.cars.edit', $car->id) }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-edit"></i> Edit
                        </a>

                        <form action="{{ route('admin.cars.destroy', $car->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
