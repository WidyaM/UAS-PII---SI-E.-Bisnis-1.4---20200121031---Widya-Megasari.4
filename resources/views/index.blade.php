<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Mahasiswa</title>

    <link rel="stylesheet" href="{{ asset('assets/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main/app-dark.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.svg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}" type="image/png">

<link rel="stylesheet" href="{{ asset('assets/css/shared/iconly.css') }}">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                            <div class="form-check form-switch fs-6">
                                <input class="form-check-input  me-0" type="checkbox" id="toggle-dark" hidden>
                            </div>
                        </div>
                        <div class="sidebar-toggler  x">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li
                            class="sidebar-item active ">
                            <a href="/" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li
                            class="sidebar-item">
                            <a href="/mahasiswa" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Mahasiswa</span>
                            </a>
                        </li>
                        <li
                            class="sidebar-item">
                            <a href="/matakuliah" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Matakuliah</span>
                            </a>
                        </li>
                        <li
                            class="sidebar-item">
                            <a href="/semester" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Semester</span>
                            </a>
                        </li>
                        <li
                            class="sidebar-item">
                            <a href="/absen" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Absen</span>
                            </a>
                        </li>
                        <li
                            class="sidebar-item">
                            <a href="/kontrak" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Kontrak</span>
                            </a>
                        </li>
                        <li
                            class="sidebar-item">
                            <a href="/jadwal" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Jadwal</span>
                            </a>
                        </li>

                    </ul>
                    <div class="mx-5 mt-5">
                        <a href="/logout" class='sidebar-link btn btn-danger col-6'>
                            <span>Keluar</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            
    

            <div class="page-heading text-end">

                <h3><i class="bi bi-person-circle"></i> {{ auth()->user()->name }}</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    @yield('content')
                </section>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2022 &copy; Widya Megasari</p>
                    </div>
                    <div class="float-end">
                        <p>Dibuat Oleh<span class="text-danger"> <i class="bi bi-heart"></i></span><a
                                href="https://WidyaM.me"> WidyaM </a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

<!-- Need: Apexcharts -->
<script src="{{ asset('assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>

</body>

</html>
