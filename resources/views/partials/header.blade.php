{{-- resources/views/partials/header.blade.php --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>SMK Canda Bhirawa - VOCATIONAL HIGH SCHOOL</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicons -->
    <link href="{{ asset('img/galery/LOGO_CB-removebg-preview.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <style>
        .nav-link.active {
            background-color: #0d6efd;
            color: #fff !important;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-primary px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.youtube.com/channel/UCFKw9fQO678f5yCYIkDH0UA"><i class="fab fa-youtube fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.facebook.com/groups/smkcbpare/?locale=id_ID"><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.instagram.com/smkcandabhirawa/"><i class="fab fa-instagram fw-normal"></i></a>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a href="{{ url('registration-form/regis') }}"><small class="me-3 text-light"><i class="fa fa-user me-2"></i>Register</small></a>
                    <a href="{{ url('login/login') }}"><small class="me-3 text-light"><i class="fa fa-sign-in-alt me-2"></i>Login</small></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="{{ url('/') }}" class="navbar-brand p-0">
                <h1 class="m-0">
                    <img src="{{ asset('img/cb/logocb.png') }}" alt="Travela Logo" style="height: 60px; width: auto; margin-right: 10px;">
                    SMK Canda Bhirawa
                </h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ url('/') }}" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle
                            {{ request()->is('ppdb/*') ? 'active' : '' }}"
                            data-bs-toggle="dropdown">
                            PPDB
                        </a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ url('ppdb/pengumuman') }}" class="dropdown-item {{ request()->is('ppdb/pengumuman') ? 'active' : '' }}">Pengumuman</a>
                            <a href="{{ url('tour') }}" class="dropdown-item {{ request()->is('tour') ? 'active' : '' }}">Jurusan</a>
                            <a href="{{ url('gallery') }}" class="dropdown-item {{ request()->is('gallery') ? 'active' : '' }}">Penunjang</a>
                            <a href="{{ url('guides') }}" class="dropdown-item {{ request()->is('guides') ? 'active' : '' }}">Teacher</a>
                            <a href="{{ url('testimonial') }}" class="dropdown-item {{ request()->is('testimonial') ? 'active' : '' }}">Testimonial</a>
                            <a href="{{ url('04') }}" class="dropdown-item {{ request()->is('04') ? 'active' : '' }}">404 Page</a>
                        </div>
                    </div>

                    <a href="{{ url('services') }}" class="nav-item nav-link {{ request()->is('services') ? 'active' : '' }}">Fasilitas</a>
                    <a href="{{ url('campus') }}" class="nav-item nav-link {{ request()->is('campus') ? 'active' : '' }}">Kampus</a>
                    <a href="{{ url('extra') }}" class="nav-item nav-link {{ request()->is('extra') ? 'active' : '' }}">Extrakulikuler</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle
                            {{ request()->is('destination') ? 'active' : '' }}"
                            data-bs-toggle="dropdown">
                            Explore
                        </a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ url('destination') }}" class="dropdown-item {{ request()->is('destination') ? 'active' : '' }}">Perusahaan</a>
                            <a href="{{ url('tour') }}" class="dropdown-item {{ request()->is('tour') ? 'active' : '' }}">Jurusan</a>
                            <a href="{{ url('gallery') }}" class="dropdown-item {{ request()->is('gallery') ? 'active' : '' }}">Penunjang</a>
                            <a href="{{ url('guides') }}" class="dropdown-item {{ request()->is('guides') ? 'active' : '' }}">Teacher</a>
                            <a href="{{ url('testimonial') }}" class="dropdown-item {{ request()->is('testimonial') ? 'active' : '' }}">Testimonial</a>
                            <a href="{{ url('04') }}" class="dropdown-item {{ request()->is('04') ? 'active' : '' }}">404 Page</a>
                        </div>
                    </div>

                    <a href="{{ url('contact') }}" class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
                </div>
                <a href="{{ url('login/login') }}" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">PPDB NOW</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
