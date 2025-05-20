@extends('client.layout')

@section('content')
<div class="container py-5">
    <h2 class="mb-4">Available Cars</h2>
    <div class="row">
        @forelse($cars as $car)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    @if($car->image)
                        <img src="{{ asset('storage/' . $car->image) }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $car->brand }} {{ $car->model }}</h5>
                        <p class="card-text">₹{{ $car->price_per_day }} / day</p>
                        <a href="{{ route('car.details', $car->id) }}" class="btn btn-primary btn-sm">View Details</a>
                    </div>
                </div>
            </div>
        @empty
            <p>No cars available at the moment.</p>
        @endforelse
    </div>
</div>
@endsection
