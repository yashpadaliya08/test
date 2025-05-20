<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SwiftRide - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f7f9fc;
            font-family: 'Segoe UI', sans-serif;
        }
        .navbar {
            background-color: #0056d2;
        }
        .navbar-brand, .nav-link, .footer-text {
            color: #fff !important;
        }
        .nav-link:hover {
            color: #cce5ff !important;
        }
        footer {
            background-color: #003e99;
            padding: 20px 0;
            color: #fff;
        }
    </style>
</head>
<body>

    <!-- 🔷 Navbar -->
    <nav class="navbar navbar-expand-lg shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">SwiftRide</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon bg-light"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/browse') }}">Browse Cars</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/my_bookings') }}">My Bookings</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
                 {{--     @guest
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="nav-item"><a class="nav-link" href="#">{{ Auth::user()->name }}</a></li>
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="btn btn-sm btn-link nav-link">Logout</button>
                            </form>
                        </li>
                    @endguest--}}
                </ul>
            </div>
        </div>
    </nav>

    <!-- 🔷 Page Content -->
    <main class="py-4">
        <div class="container">
            @yield('content')
        </div>
    </main>

    <!-- 🔷 Footer -->
    <footer class="text-center mt-5">
        <div class="container">
            <p class="footer-text mb-0">&copy; {{ date('Y') }} SwiftRide. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
