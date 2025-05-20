<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SwiftRide Admin</title>
    <link rel="stylesheet" href="{{ asset('admin-assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Bootstrap, Font Awesome, etc. -->
</head>
<body>
    <div class="d-flex">
        @include('admin.partials.sidebar')

        <div class="flex-grow-1">
            @include('admin.partials.navbar')

            <main class="p-4">
                @yield('content')
            </main>
        </div>
    </div>
</body>

</html>
