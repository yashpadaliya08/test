@extends('client.layout')

@section('title', 'Dashboard')

@section('content')
<div class="container py-5">
    <h2 class="mb-4">Welcome, User!</h2>

    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">My Bookings</h5>
                    <p class="card-text">You have no upcoming bookings.</p>
                    <a href="{{ url('/browse') }}" class="btn btn-outline-primary">Browse Cars</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Profile Info</h5>
                    <p class="card-text">Name: John Doe<br>Email: john@example.com</p>
                    <a href="#" class="btn btn-outline-secondary">Edit Profile</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
