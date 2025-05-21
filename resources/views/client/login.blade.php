@extends('client.layout')

@section('title', 'Login')

@section('content')
<div class="container py-5">
    <h2 class="mb-4 text-center">Login to Your Account</h2>

    <form id="loginForm" class="row g-3 mx-auto shadow p-4 rounded bg-light needs-validation" style="max-width: 500px;" novalidate>
        @csrf
        <div class="col-12">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" placeholder="you@example.com" required>
        </div>
        <div class="col-12">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Enter password" required>
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

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.19.5/jquery.validate.min.js"></script>
<script>
$(document).ready(function () {
    $('#loginForm').validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 6
            }
        },
        messages: {
            email: {
                required: "Please enter your email",
                email: "Please enter a valid email address"
            },
            password: {
                required: "Please enter your password",
                minlength: "Your password must be at least 6 characters long"
            }
        },
        submitHandler: function (form) {
            $.ajax({
                url: '{{ route('login.submit') }}',
                method: 'POST',
                data: $(form).serialize(),
                success: function (response) {
                    if (response.success) {
                        window.location.href = response.redirect;
                    } else {
                        alert(response.message);
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
