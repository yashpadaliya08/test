@extends('client.layout')

@section('title', 'Register')

@section('content')
<div class="container py-5">
    <h2 class="mb-4 text-center">Create an Account</h2>

    <form id="registerForm" class="row g-3 mx-auto shadow p-4 rounded bg-light" style="max-width: 500px;" novalidate>
        @csrf

        <div class="col-12">
            <label class="form-label">Full Name</label>
            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
        </div>

        <div class="col-12">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" placeholder="you@example.com" required>
        </div>

        <div class="col-12">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Choose password" required>
        </div>

        <div class="col-12">
            <label class="form-label">Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control" placeholder="Repeat password" required>
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

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.19.5/jquery.validate.min.js"></script>
<script>
$(document).ready(function () {
    $('#registerForm').validate({
        rules: {
            name: {
                required: true,
                minlength: 2
            },
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 6
            },
            password_confirmation: {
                required: true,
                equalTo: '[name="password"]'
            }
        },
        messages: {
            name: {
                required: "Please enter your full name",
                minlength: "Name must be at least 2 characters long"
            },
            email: {
                required: "Please enter your email",
                email: "Enter a valid email address"
            },
            password: {
                required: "Please choose a password",
                minlength: "Password must be at least 6 characters"
            },
            password_confirmation: {
                required: "Please confirm your password",
                equalTo: "Passwords do not match"
            }
        },
        submitHandler: function (form) {
            $.ajax({
                url: '{{ route('register.submit') }}',
                method: 'POST',
                data: $(form).serialize(),
                success: function (response) {
                    if (response.success) {
                        window.location.href = response.redirect;
                    } else {
                        alert(response.message || 'Registration failed.');
                    }
                },
                error: function () {
                    alert('Something went wrong. Please try again.');
                }
            });
        }
    });
});
</script>
@endpush
