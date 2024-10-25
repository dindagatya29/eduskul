<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduSkul - @yield('title', 'Welcome')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('asset/images/eduskul-logo.png') }}" alt="EduSkul Logo" height="30">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item me-3"> 
                            <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item me-3"> 
                            <a class="nav-link {{ Request::is('harga') ? 'active' : '' }}" href="{{ url('/harga') }}">Harga</a>
                        </li>
                        <li class="nav-item me-3"> 
                            <a class="nav-link {{ Request::is('tentang-kami') ? 'active' : '' }}" href="{{ url('/tentang-kami') }}">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('dapatkan-demo') ? 'active' : '' }}" href="{{ url('/dapatkan-demo') }}">Dapatkan Demo</a>
                        </li>
                    </ul>
                </div>
                
            </div>
        </nav>
    </header>

    <main class="flex-grow-1 py-4">
        @yield('content')
    </main>

    <footer class="text-white py-4 mt-5" style="background-color: #5BCD61;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3 mb-md-0">
                    <img src="{{ asset('asset/images/eduskul-logo.png') }}" alt="EduSkul Logo" height="30">
                    <div class="mt-3">
                        <div style="background-color: #ffffff; display: inline-block; border-radius: 10px; padding: 5px;">
                            <a href="#" class="text-success" style="padding: 5px; display: inline-block; font-size: 1.2rem;">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </div>
                        <div style="background-color: #ffffff; display: inline-block; border-radius: 10px; padding: 5px;">
                            <a href="#" class="text-success" style="padding: 5px; display: inline-block; font-size: 1.2rem;">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                        <div style="background-color: #ffffff; display: inline-block; border-radius: 10px; padding: 5px;">
                            <a href="#" class="text-success" style="padding: 5px; display: inline-block; font-size: 1.2rem;">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                        <div style="background-color: #ffffff; display: inline-block; border-radius: 10px; padding: 5px;">
                            <a href="#" class="text-success" style="padding: 5px; display: inline-block; font-size: 1.2rem;">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <h5>PAGES</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="{{ url('/') }}" class="text-white">Home</a></li>
                        <li class="mb-2"><a href="{{ url('/harga') }}" class="text-white">Harga</a></li>
                        <li class="mb-2"><a href="{{ url('/tentang-kami') }}" class="text-white">Tentang Kami</a></li>
                        <li class="mb-2"><a href="{{ url('/dapatkan-demo') }}" class="text-white">Dapatkan Demo</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>KONTAK</h5>
                    <p class="mb-2"><strong>Alamat:</strong></p>
                    <p class="mb-2"><i class="fas fa-map-marker-alt me-2"></i> Tiban Indah, Sekupang, Batam City, Riau Islands, Indonesia</p>
                    <p class="mb-2"><strong>Telepon:</strong></p>
                    <p class="mb-2"><i class="fas fa-phone me-2"></i> 085364665287</p>
                    <p class="mb-2"><strong>Email:</strong></p>
                    <p class="mb-2"><i class="fas fa-envelope me-2"></i> <a href="mailto:udacodingofficial@gmail.com" class="text-white">udacodingofficial@gmail.com</a></p>
                </div>
                                
            </div>
            <hr class="mt-4 mb-3">
            <p class="text-center mb-0">&copy; {{ date('Y') }} All rights reserved</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>
