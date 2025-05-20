@extends('client.layout')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow rounded">
                <div class="row g-0">
                    @if ($car->image)
                    <div class="col-md-5">
                        <img src="{{ asset('storage/' . $car->image) }}" class="img-fluid rounded-start" alt="{{ $car->name }}">
                    </div>
                    @endif

                    <div class="col-md-7">
                        <div class="card-body">
                            <h3 class="card-title">{{ $car->name }}</h3>
                            <p class="card-text"><strong>Brand:</strong> {{ $car->brand }}</p>
                            <p class="card-text"><strong>Model:</strong> {{ $car->model }}</p>
                            <p class="card-text"><strong>Year:</strong> {{ $car->year }}</p>
                            <p class="card-text"><strong>Color:</strong> {{ $car->color }}</p>
                            <p class="card-text"><strong>Type:</strong> {{ $car->type ?? 'N/A' }}</p>
                            <p class="card-text"><strong>Price/Day:</strong> ₹{{ $car->price_per_day }}</p>
                            <p class="card-text"><strong>Description:</strong> {{ $car->description ?? 'No description available.' }}</p>

                            <div class="mt-4">
                               <a href="{{ route('book', ['car_id' => $car->id]) }}" class="btn btn-primary">Book Now</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>
@endsection
