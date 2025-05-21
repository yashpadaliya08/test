@extends('admin.layout')

@section('title', 'Registered Users')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Registered Users</h2>
        <span class="badge bg-primary">{{ date('F d, Y') }}</span>
    </div>

    <div class="card shadow-sm">
        <div class="card-body table-responsive">
            <table class="table table-hover table-bordered align-middle mb-0">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Registered On</th>
                        <th scope="col">Status</th>
                        <th scope="col" class="text-center">Actions</th>
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
                        <td>
                            <span class="badge bg-success">Active</span>
                        </td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-outline-primary me-1" title="View">
                                <i class="bi bi-eye-fill"></i>
                            </button>
                            <button class="btn btn-sm btn-outline-danger" title="Disable">
                                <i class="bi bi-x-circle-fill"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jane Smith</td>
                        <td>jane@example.com</td>
                        <td>+91 9123456789</td>
                        <td>2025-03-22</td>
                        <td>
                            <span class="badge bg-danger">Inactive</span>
                        </td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-outline-primary me-1" title="View">
                                <i class="bi bi-eye-fill"></i>
                            </button>
                            <button class="btn btn-sm btn-outline-success" title="Enable">
                                <i class="bi bi-check-circle-fill"></i>
                            </button>
                        </td>
                    </tr>
                    {{-- End Dummy --}}
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
