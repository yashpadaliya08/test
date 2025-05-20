@extends('admin.layout')

@section('content')
<div class="container-fluid py-4">
    <h2 class="mb-4">Admin Dashboard</h2>

    <div class="row">
        <!-- Total Cars -->
        <div class="col-md-3">
            <div class="card text-white bg-primary shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title">Total Cars</h5>
                    <p class="card-text fs-4">54</p>
                </div>
            </div>
        </div>

        <!-- Total Bookings -->
        <div class="col-md-3">
            <div class="card text-white bg-success shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title">Total Bookings</h5>
                    <p class="card-text fs-4">120</p>
                </div>
            </div>
        </div>

        <!-- Total Users -->
        <div class="col-md-3">
            <div class="card text-white bg-warning shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title">Total Users</h5>
                    <p class="card-text fs-4">76</p>
                </div>
            </div>
        </div>

        <!-- Total Revenue -->
        <div class="col-md-3">
            <div class="card text-white bg-danger shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title">Revenue</h5>
                    <p class="card-text fs-4">$5,420</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Bookings Section (Optional) -->
    <div class="card mt-4">
        <div class="card-header">
            <h5>Recent Bookings</h5>
        </div>
        <div class="card-body">
            <p>No recent bookings to show yet.</p>
        </div>
    </div>
</div>
@endsection
