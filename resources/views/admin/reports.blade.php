@extends('admin.layout')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Admin Reports & Analytics</h2>
    <div class="row">
        <!-- Summary Cards -->
        <div class="col-md-3 mb-4">
            <div class="card text-white bg-primary">
                <div class="card-body">
                    <h5 class="card-title">Total Users</h5>
                    <p class="card-text display-6">{{ $totalUsers ?? '0' }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card text-white bg-success">
                <div class="card-body">
                    <h5 class="card-title">Total Rides</h5>
                    <p class="card-text display-6">{{ $totalRides ?? '0' }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card text-white bg-warning">
                <div class="card-body">
                    <h5 class="card-title">Revenue</h5>
                    <p class="card-text display-6">${{ $totalRevenue ?? '0.00' }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card text-white bg-danger">
                <div class="card-body">
                    <h5 class="card-title">Active Drivers</h5>
                    <p class="card-text display-6">{{ $activeDrivers ?? '0' }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Analytics Table -->
    <div class="card mt-4">
        <div class="card-header">
            <h5>Recent Rides</h5>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped mb-0">
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
                            <td>2025-05-17</td>
                            <td>$15.00</td>
                            <td>
                                <span class="badge bg-success">Completed</span>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Emily Clark</td>
                            <td>Mike Johnson</td>
                            <td>2025-05-16</td>
                            <td>$22.50</td>
                            <td>
                                <span class="badge bg-secondary">Pending</span>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Chris Evans</td>
                            <td>Sarah Lee</td>
                            <td>2025-05-15</td>
                            <td>$18.75</td>
                            <td>
                                <span class="badge bg-success">Completed</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection