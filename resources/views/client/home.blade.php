@extends('client.layout')

@section('title', 'Home')

@section('content')

<!-- 🚀 Hero Banner -->
<section class="text-center py-5 bg-white">
    <h1 class="display-4 fw-bold text-primary">SwiftRide - Rent Smarter, Drive Faster</h1>
    <p class="lead mt-3">Find the perfect car for your journey — anytime, anywhere.</p>
    <a href="{{ url('/browse') }}" class="btn btn-primary btn-lg mt-4">Browse Available Cars</a>
</section>

<!-- 🚗 How It Works -->
<section class="py-5 bg-light text-center">
    <div class="container">
        <h2 class="mb-4 fw-semibold">How It Works</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="p-4 shadow-sm bg-white rounded h-100">
                    <h4 class="text-primary">1. Choose Your Car</h4>
                    <p>Select from a wide range of cars for any occasion.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 shadow-sm bg-white rounded h-100">
                    <h4 class="text-primary">2. Book Instantly</h4>
                    <p>Pick a date, confirm your booking — done in minutes.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 shadow-sm bg-white rounded h-100">
                    <h4 class="text-primary">3. Drive & Enjoy</h4>
                    <p>Pick up your car and hit the road hassle-free.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 🏆 Why Choose SwiftRide -->
<section class="py-5 text-center">
    <div class="container">
        <h2 class="mb-4 fw-semibold">Why Choose SwiftRide?</h2>
        <div class="row g-4">
            <div class="col-md-3">
                <div class="p-3 border rounded h-100">
                    <h5 class="text-primary">Affordable Rates</h5>
                    <p>Transparent pricing with no hidden fees.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-3 border rounded h-100">
                    <h5 class="text-primary">24/7 Support</h5>
                    <p>We're always here to assist you anytime.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-3 border rounded h-100">
                    <h5 class="text-primary">Easy Pickup</h5>
                    <p>Multiple locations for convenient access.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="p-3 border rounded h-100">
                    <h5 class="text-primary">Quality Vehicles</h5>
                    <p>Clean, well-maintained, and reliable cars.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 🧍 Testimonials -->
<section class="py-5 bg-light">
    <div class="container text-center">
        <h2 class="mb-5">What Our Customers Say</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="p-4 bg-white rounded shadow-sm">
                    <p class="fst-italic">“Easy booking and amazing car condition. Loved it!”</p>
                    <h6 class="mt-3 mb-0">- Priya Patel</h6>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 bg-white rounded shadow-sm">
                    <p class="fst-italic">“Great rates, quick support, and smooth pickup!”</p>
                    <h6 class="mt-3 mb-0">- Rahul Desai</h6>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 bg-white rounded shadow-sm">
                    <p class="fst-italic">“Definitely my go-to car rental app from now on.”</p>
                    <h6 class="mt-3 mb-0">- Meera Joshi</h6>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 📞 CTA -->
<section class="py-5 text-center bg-primary text-white">
    <div class="container">
        <h2 class="fw-bold">Ready to ride?</h2>
        <p class="lead">Find your perfect car now and enjoy your journey.</p>
        <a href="{{ url('/browse') }}" class="btn btn-light btn-lg mt-3">Start Browsing</a>
    </div>
</section>

@endsection
