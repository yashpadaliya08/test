@extends('client.layout')

@section('title', 'Login')

@section('content')
<div class="container py-5">
    <h2 class="mb-4 text-center">Login to Your Account</h2>

    <form class="row g-3 mx-auto" style="max-width: 500px;">
        <div class="col-12">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" placeholder="you@example.com">
        </div>
        <div class="col-12">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" placeholder="Enter password">
        </div>
        <div class="col-12 text-end">
            <a href="#" class="text-decoration-none">Forgot Password?</a>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </div>
        <div class="col-12 text-center">
            <p>Don't have an account? <a href="{{ url('/register') }}">Register</a></p>
        </div>
    </form>
</div>
@endsection
