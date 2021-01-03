<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UAS 5B</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('Delicious/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('Delicious/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('Delicious/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('Delicious/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('Delicious/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('Delicious/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('Delicious/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('Delicious/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('Delicious/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Delicious - v2.1.0
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <!-- <section id="topbar" class="d-none d-lg-flex align-items-center fixed-top topbar-transparent">
    <div class="container text-right">
      <i class="icofont-phone"></i> +1 5589 55488 55
      <i class="icofont-clock-time icofont-rotate-180"></i> Mon-Sat: 11:00 AM - 23:00 PM
    </div>
  </section> -->

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="/"><span>Traveller's Blog</span></a></h1>
      </div>
      @if(auth()->user())
      <nav class="nav-menu d-none d-lg-block">
     
        <ul>
          <li class="active"><a href="/">Home</a></li>
          <li><a href="#menu">Content</a></li>

          <li class="book-a-table text-center"><a href="/form">Create Story</a></li>
          <!-- <li><a href="#">My Blog</a></li> -->
          <li><a href="/profile">My Profile</a></li>
          <li><a href="/logout">Logout</a></li>
        </ul>
      </nav><!-- .nav-menu -->
      @endif
      @if(empty(auth()->user()))
      <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li class="active"><a href="/">Home</a></li>
        <li><a href="#menu">Content</a></li>
        <li><a href="/login">Login</a></li>
        <li><a href="/register">Register</a></li>
        <!-- <li class="book-a-table text-center"><a href="/form">Create Story</a></li> -->
      </ul>
    </nav>
    @endif
    </div>
  </header>
  <!-- End Header -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('Delicious/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('Delicious/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('Delicious/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('Delicious/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('Delicious/assets/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
  <script src="{{asset('Delicious/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('Delicious/assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('Delicious/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('Delicious/assets/js/main.js')}}"></script>

  @yield('header')
  @yield('content')
  @yield('footer')
</body>
</html>