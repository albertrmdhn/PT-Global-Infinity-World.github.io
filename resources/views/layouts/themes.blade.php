<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>@yield('title')- PT.Global Infinity</title>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->
<link href="{{asset('/assets/favicon.png')}}" rel="icon">
<link href="{{asset('/assets/apple-touch-icon.png')}}" rel="apple-touch-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="{{asset('/styles/vendor/aos/aos.css')}}" rel="stylesheet">
<link href="{{asset('styles/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('styles/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
<link href="{{asset('styles/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
<link href="{{asset('styles/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
<link href="{{asset('styles/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="{{asset('styles/css/style.css')}}" rel="stylesheet">
@yield('extracss')

<!-- =======================================================
* Template Name: PT.Global Infinity
* Updated: Jul 27 2023 with Bootstrap v5.3.1
* Template URL: https://bootstrapmade.com/PT.Global Infinity-bootstrap-startup-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
<div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="{{('/')}}" class="logo d-flex align-items-center">
    <!-- <img src="{{asset('assets/logo.png')}}" alt=""> -->
    <span>PT.Global Infinity</span>
    </a>

    <nav id="navbar" class="navbar">
    <ul>
        <li><a class="nav-link scrollto active" href="{{('#')}}">Home</a></li>
        <li><a class="nav-link scrollto" href="{{('#')}}">About</a></li>
        <li><a class="nav-link scrollto" href="{{('#')}}">Product</a></li>
        <li><a class="nav-link scrollto" href="{{('#')}}">Galery</a></li>
        <li><a href="{{url('/blogs')}}">Blog</a></li>
        <li><a href="{{url('/announcement')}}">Announcement</a></li>
        </li>

        <li><a class="nav-link scrollto" href="#">Contact</a></li>
        <li><a class="getstarted scrollto" href="#">Get Started</a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

</div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->

@yield('hero') 

<!-- End Hero --> 


<!-- Main Started -->
<main id="main">
@yield('main')
</main>
<!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

<div class="footer-top">
    <div class="container">
    <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
        <a href="{{('/')}}" class="logo d-flex align-items-center">
            <!-- <img src="{{asset('assets/logo.png')}}" alt=""> -->
            <span>PT.Global Infinity</span>
        </a>
        <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
        <div class="social-links mt-3">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Galery</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Galery</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Blog</a></li>
        </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
        <h4>Our Galery</h4>
        <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Galery 1</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Galery 2</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Galery 3</a></li>
        </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
        <h4>Contact Us</h4>
        <p>
            jalan <br>
            jalan<br>
            jalan  <br><br>
            <strong>Phone:</strong> +62<br>
            <strong>Email:</strong> a@gmail.com<br>
        </p>

        </div>

    </div>
    </div>
</div>

<div class="container">
    <div class="copyright">
    &copy; Copyright <strong><span>PT.Global Infinity</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/PT.Global Infinity-bootstrap-startup-template/ -->
        2023
    </div>
</div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{asset('styles/vendor/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{asset('styles/vendor/aos/aos.js')}}"></script>
<script src="{{asset('styles/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('styles/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('styles/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('styles/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('styles/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('styles/js/main.js')}}"></script>
@yield('extrajs')

</body>

</html>