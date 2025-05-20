@extends('admin.layout')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4">Admin Settings</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header bg-primary text-white">
                        <h5>General Settings</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="siteName" class="form-label">Site Name</label>
                                <input type="text" class="form-control" id="siteName" value="SwiftRide">
                            </div>
                            <div class="mb-3">
                                <label for="adminEmail" class="form-label">Admin Email</label>
                                <input type="email" class="form-control" id="adminEmail" value="admin@swiftride.com">
                            </div>
                            <div class="mb-3">
                                <label for="currency" class="form-label">Currency</label>
                                <select class="form-select" id="currency">
                                    <option selected>USD ($)</option>
                                    <option>EUR (€)</option>
                                    <option>GBP (£)</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header bg-success text-white">
                        <h5>Driver Settings</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="minFare" class="form-label">Minimum Fare</label>
                                <input type="number" class="form-control" id="minFare" value="5.00">
                            </div>
                            <div class="mb-3">
                                <label for="maxRidesPerDay" class="form-label">Max Rides Per Day</label>
                                <input type="number" class="form-control" id="maxRidesPerDay" value="20">
                            </div>
                            <button type="submit" class="btn btn-success">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection