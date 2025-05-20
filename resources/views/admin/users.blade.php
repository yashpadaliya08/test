@extends('admin.layout')

@section('content')
<div class="container-fluid">
    <h2 class="mb-4">Registered Users</h2>

    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-hover table-bordered align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>#ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Registered On</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Dummy Data --}}
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>john@example.com</td>
                        <td>+91 9876543210</td>
                        <td>2025-04-15</td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>
                            <button class="btn btn-sm btn-info">View</button>
                            <button class="btn btn-sm btn-danger">Disable</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jane Smith</td>
                        <td>jane@example.com</td>
                        <td>+91 9123456789</td>
                        <td>2025-03-22</td>
                        <td><span class="badge bg-danger">Inactive</span></td>
                        <td>
                            <button class="btn btn-sm btn-info">View</button>
                            <button class="btn btn-sm btn-success">Enable</button>
                        </td>
                    </tr>
                    {{-- End Dummy --}}
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
