@extends('admin.layout')

@section('title', 'Reports & Analytics')

@section('content')
<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Reports & Analytics</h2>
    </div>

    <!-- Summary Cards -->
    <div class="row g-4">
        <div class="col-md-3">
            <div class="card text-white bg-primary shadow-sm">
                <div class="card-body">
                    <h6 class="card-title">Total Users</h6>
                    <h3 class="mb-0">{{ $totalUsers ?? '0' }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-success shadow-sm">
                <div class="card-body">
                    <h6 class="card-title">Total Rides</h6>
                    <h3 class="mb-0">{{ $totalRides ?? '0' }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-warning shadow-sm">
                <div class="card-body">
                    <h6 class="card-title">Revenue</h6>
                    <h3 class="mb-0">${{ $totalRevenue ?? '0.00' }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-danger shadow-sm">
                <div class="card-body">
                    <h6 class="card-title">Active Drivers</h6>
                    <h3 class="mb-0">{{ $activeDrivers ?? '0' }}</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Rides Table -->
    <div class="card mt-5 shadow-sm">
        <div class="card-header bg-white">
            <h5 class="mb-0">Recent Rides</h5>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0 align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>User</th>
                            <th>Driver</th>
                            <th>Date</th>
                            <th>Fare</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>Jane Smith</td>
                            <td>17 May 2025</td>
                            <td>$15.00</td>
                            <td><span class="badge bg-success">Completed</span></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Emily Clark</td>
                            <td>Mike Johnson</td>
                            <td>16 May 2025</td>
                            <td>$22.50</td>
                            <td><span class="badge bg-secondary">Pending</span></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Chris Evans</td>
                            <td>Sarah Lee</td>
                            <td>15 May 2025</td>
                            <td>$18.75</td>
                            <td><span class="badge bg-success">Completed</span></td>
                        </tr>
                        <!-- You can loop through $recentRides here when dynamic -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
