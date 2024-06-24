<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Motoya Kouture')</title>
    <meta content="Motoya Kouture is a fashion hub for celebrities and Brides." name="description">
    <meta content="Bridals, Wedding." name="keywords">

     <!-- SEO Meta Tags -->
        <meta name="description" content="Welcome to Motoya Kouture - Your ultimate destination for fashion. Explore our latest collections and trends.">
        <meta name="keywords" content="Motoya Kouture, fashion, clothing, trends, luxury, style">
        <meta name="author" content="Motoya Kouture">
        <meta name="robots" content="index, follow">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url('/') }}">
        <meta property="og:title" content="Motoya Kouture - Fashion for Every Occasion">
        <meta property="og:description" content="Welcome to Motoya Kouture - Your ultimate destination for fashion. Explore our latest collections and trends.">
        <meta property="og:image" content="{{ asset('path/to/og-image.jpg') }}">
        
        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="{{ url('/') }}">
        <meta property="twitter:title" content="Motoya Kouture - Fashion for Every Occasion">
        <meta property="twitter:description" content="Welcome to Motoya Kouture - Your ultimate destination for fashion. Explore our latest collections and trends.">
        <meta property="twitter:image" content="{{ asset('path/to/twitter-image.jpg') }}">
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.js') }}" rel="stylesheet">
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- ======= Testmonial Script ======= -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


  <!--  Main CSS File -->
  <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
</head>
<body>
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

</body>
</html>
