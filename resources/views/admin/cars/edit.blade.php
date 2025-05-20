@extends('admin.layout')

@section('content')
    <div class="container-fluid">
        <h2 class="mb-4">Edit Car - {{ $car->brand }} {{ $car->model }}</h2>

        <div class="card shadow-sm">
            <div class="card-body">
                <form action="{{ route('admin.cars.update', $car->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')


                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Car Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $car->name }}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="year" class="form-label">Year</label>
                            <input type="number" class="form-control" name="year" value="{{ $car->year }}" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="color" class="form-label">Color</label>
                            <input type="text" class="form-control" name="color" value="{{ $car->color }}" required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" rows="3" >{{ $car->description }}</textarea>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Brand</label>
                            <input type="text" class="form-control" name="brand" value="{{ $car->brand }}" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Model</label>
                            <input type="text" class="form-control" name="model" value="{{ $car->model }}" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Type</label>
                            <select class="form-select" name="type">
                                <option value="Hatchback" {{ $car->type == 'Hatchback' ? 'selected' : '' }}>Hatchback</option>
                                <option value="Sedan" {{ $car->type == 'Sedan' ? 'selected' : '' }}>Sedan</option>
                                <option value="SUV" {{ $car->type == 'SUV' ? 'selected' : '' }}>SUV</option>
                                <option value="Luxury" {{ $car->type == 'Luxury' ? 'selected' : '' }}>Luxury</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Price per Day (₹)</label>
                            <input type="number" class="form-control" name="price_per_day" value="{{ $car->price_per_day }}"
                                required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Car Image</label>
                        <input type="file" class="form-control" name="image">
                        @if($car->image)
                            <img src="{{ asset('storage/' . $car->image) }}" alt="Car Image" class="mt-2" width="100">
                        @endif
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select class="form-select" name="status">
                            <option value="available" {{ $car->status == 'available' ? 'selected' : '' }}>Available</option>
                            <option value="unavailable" {{ $car->status == 'unavailable' ? 'selected' : '' }}>Unavailable
                            </option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary"><i class="fas fa-save me-2"></i>Update</button>
                    <a href="{{ route('admin.cars.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection