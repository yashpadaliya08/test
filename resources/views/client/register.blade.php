@extends('client.layout')

@section('title', 'Register')

@section('content')
<div class="container py-5">
    <h2 class="mb-4 text-center">Create an Account</h2>

    <form class="row g-3 mx-auto" style="max-width: 500px;">
        <div class="col-12">
            <label class="form-label">Full Name</label>
            <input type="text" class="form-control" placeholder="Your Name">
        </div>
        <div class="col-12">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" placeholder="you@example.com">
        </div>
        <div class="col-12">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" placeholder="Choose password">
        </div>
        <div class="col-12">
            <label class="form-label">Confirm Password</label>
            <input type="password" class="form-control" placeholder="Repeat password">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary w-100">Register</button>
        </div>
        <div class="col-12 text-center">
            <p>Already have an account? <a href="{{ url('/login') }}">Login</a></p>
        </div>
    </form>
</div>
@endsection
