@extends('admin.layout')

@section('title', 'Add New Car')

@section('content')
<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Add New Car</h2>
        <a href="{{ route('admin.cars.index') }}" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left me-1"></i> Back to Listings
        </a>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body">
            <form action="{{ route('admin.cars.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Car Name</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="year" class="form-label">Year</label>
                        <input type="number" class="form-control" name="year" value="{{ old('year') }}" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="brand" class="form-label">Brand</label>
                        <input type="text" class="form-control" name="brand" value="{{ old('brand') }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="model" class="form-label">Model</label>
                        <input type="text" class="form-control" name="model" value="{{ old('model') }}" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="color" class="form-label">Color</label>
                        <input type="text" class="form-control" name="color" value="{{ old('color') }}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="price_per_day" class="form-label">Price per Day (₹)</label>
                        <input type="number" class="form-control" name="price_per_day" value="{{ old('price_per_day') }}" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="type" class="form-label">Type</label>
                        <select class="form-select" name="type" required>
                            <option disabled selected>Select Type</option>
                            <option value="Hatchback" {{ old('type') == 'Hatchback' ? 'selected' : '' }}>Hatchback</option>
                            <option value="Sedan" {{ old('type') == 'Sedan' ? 'selected' : '' }}>Sedan</option>
                            <option value="SUV" {{ old('type') == 'SUV' ? 'selected' : '' }}>SUV</option>
                            <option value="Luxury" {{ old('type') == 'Luxury' ? 'selected' : '' }}>Luxury</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" name="status">
                            <option value="available" {{ old('status') == 'available' ? 'selected' : '' }}>Available</option>
                            <option value="unavailable" {{ old('status') == 'unavailable' ? 'selected' : '' }}>Unavailable</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" rows="3">{{ old('description') }}</textarea>
                </div>

                <div class="mb-4">
                    <label for="image" class="form-label">Car Image</label>
                    <input type="file" class="form-control" name="image">
                </div>

                <div class="d-flex">
                    <button type="submit" class="btn btn-success me-2">
                        <i class="fas fa-save me-1"></i> Save Car
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
