@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <h2 class="mb-4">Add New Car</h2>

        <div class="card shadow-sm">
            <div class="card-body">
                <form action="{{ route('admin.cars.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Car Name</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="year" class="form-label">Year</label>
                            <input type="number" class="form-control" name="year" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="color" class="form-label">Color</label>
                            <input type="text" class="form-control" name="color" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" rows="3"></textarea>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="brand" class="form-label">Brand</label>
                            <input type="text" class="form-control" name="brand" required>
                        </div>
                        <div class="col-md-6">
                            <label for="model" class="form-label">Model</label>
                            <input type="text" class="form-control" name="model" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="type" class="form-label">Type</label>
                            <select class="form-select" name="type" required>
                                <option value="Hatchback">Hatchback</option>
                                <option value="Sedan">Sedan</option>
                                <option value="SUV">SUV</option>
                                <option value="Luxury">Luxury</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="price_per_day" class="form-label">Price per Day (₹)</label>
                            <input type="number" class="form-control" name="price_per_day" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Car Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" name="status">
                            <option value="available">Available</option>
                            <option value="unavailable">Unavailable</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success"><i class="fas fa-save me-2"></i>Save</button>
                    <a href="{{ route('admin.cars.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection