@extends('client.layout')

@section('title', 'Contact Us')

@section('content')
    <div class="container py-5">
        <h2 class="mb-4">Contact Us</h2>
        <!-- <form class="row g-3" method="POST" > -->
        <form class="row g-3" method="POST" action="{{ route('contact.submit') }}">
        
            @csrf

            <div class="col-md-6">
                <label class="form-label">Your Name</label>
                <input type="text" name="name" class="form-control" placeholder="John Doe" required>
            </div>

            <div class="col-md-6">
                <label class="form-label">Your Email</label>
                <input type="email" name="email" class="form-control" placeholder="you@example.com" required>
            </div>

            <div class="col-md-12">
                <label class="form-label">Select Issue</label>
                <select name="issue_type" class="form-select" required>
                    <option value="" selected disabled>Select an issue</option>
                    <option value="modify_booking">Modify or Cancel a Booking</option>
                    <option value="car_late">What if the Car is Late?</option>
                    <option value="refund_issues">Payment or Refund Issues</option>
                    <option value="car_not_described">Car Not as Described</option>
                    <option value="report_car_problem">Report a Car Problem</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <div class="col-12">
                <label class="form-label">Message</label>
                <textarea name="message" class="form-control" rows="5" placeholder="Type your message here..." required></textarea>
            </div>

            <div class="col-12">
                <button class="btn btn-primary" type="submit">Send Message</button>
            </div>
        </form>
    </div>
@endsection
