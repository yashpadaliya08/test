@extends('client.layout')

@section('title', 'Contact Us')

@section('content')
    <div class="container py-5">
        <h2 class="mb-4 fw-bold text-primary">Contact Us</h2>

        <form method="POST" action="{{ route('contact.submit') }}" class="row g-4 needs-validation" novalidate>
            @csrf

            <div class="col-md-6">
                <label for="name" class="form-label fw-semibold">Your Name</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="John Doe" required>
                <div class="invalid-feedback">Please enter your name.</div>
            </div>

            <div class="col-md-6">
                <label for="email" class="form-label fw-semibold">Your Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="you@example.com" required>
                <div class="invalid-feedback">Please provide a valid email address.</div>
            </div>

            <div class="col-md-12">
                <label for="issue_type" class="form-label fw-semibold">Select Issue</label>
                <select id="issue_type" name="issue_type" class="form-select" required>
                    <option value="" disabled selected>Select an issue</option>
                    <option value="modify_booking">Modify or Cancel a Booking</option>
                    <option value="car_late">What if the Car is Late?</option>
                    <option value="refund_issues">Payment or Refund Issues</option>
                    <option value="car_not_described">Car Not as Described</option>
                    <option value="report_car_problem">Report a Car Problem</option>
                    <option value="other">Other</option>
                </select>
                <div class="invalid-feedback">Please select an issue type.</div>
            </div>

            <div class="col-12">
                <label for="message" class="form-label fw-semibold">Message</label>
                <textarea id="message" name="message" class="form-control" rows="5" placeholder="Type your message here..."
                    required></textarea>
                <div class="invalid-feedback">Please enter your message.</div>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary px-4">Send Message</button>
            </div>
        </form>
    </div>

    <script>
        // Bootstrap validation example
        (() => {
            'use strict'
            const forms = document.querySelectorAll('.needs-validation')
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
@endsection