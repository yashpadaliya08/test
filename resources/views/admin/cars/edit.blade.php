@extends('admin.layout')

@section('title', 'Edit Car - ' . $car->brand . ' ' . $car->model)

@section('content')
<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Edit Car - {{ $car->brand }} {{ $car->model }}</h2>
        <a href="{{ route('admin.cars.index') }}" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left me-1"></i> Back to Listings
        </a>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body">
            <form action="{{ route('admin.cars.update', $car->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Car Name</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name', $car->name) }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="year" class="form-label">Year</label>
                        <input type="number" name="year" class="form-control" value="{{ old('year', $car->year) }}" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="brand" class="form-label">Brand</label>
                        <input type="text" name="brand" class="form-control" value="{{ old('brand', $car->brand) }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="model" class="form-label">Model</label>
                        <input type="text" name="model" class="form-control" value="{{ old('model', $car->model) }}" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="color" class="form-label">Color</label>
                        <input type="text" name="color" class="form-control" value="{{ old('color', $car->color) }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="price_per_day" class="form-label">Price per Day (₹)</label>
                        <input type="number" name="price_per_day" class="form-control" value="{{ old('price_per_day', $car->price_per_day) }}" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="type" class="form-label">Type</label>
                        <select name="type" class="form-select">
                            <option value="Hatchback" {{ $car->type == 'Hatchback' ? 'selected' : '' }}>Hatchback</option>
                            <option value="Sedan" {{ $car->type == 'Sedan' ? 'selected' : '' }}>Sedan</option>
                            <option value="SUV" {{ $car->type == 'SUV' ? 'selected' : '' }}>SUV</option>
                            <option value="Luxury" {{ $car->type == 'Luxury' ? 'selected' : '' }}>Luxury</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="status" class="form-label">Status</label>
                        <select name="status" class="form-select">
                            <option value="available" {{ $car->status == 'available' ? 'selected' : '' }}>Available</option>
                            <option value="unavailable" {{ $car->status == 'unavailable' ? 'selected' : '' }}>Unavailable</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" class="form-control" rows="3">{{ old('description', $car->description) }}</textarea>
                </div>

                <div class="mb-4">
                    <label for="image" class="form-label">Car Image</label>
                    <input type="file" name="image" class="form-control">
                    @if($car->image)
                        <img src="{{ asset('storage/' . $car->image) }}" class="img-thumbnail mt-2" width="120" alt="Car Image">
                    @endif
                </div>

                <div class="d-flex">
                    <button type="submit" class="btn btn-primary me-2">
                        <i class="fas fa-save me-1"></i> Update Car
                    </button>
                    <a href="{{ route('admin.cars.index') }}" class="btn btn-secondary">
                        <i class="fas fa-times me-1"></i> Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
