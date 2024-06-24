<!-- resources/views/partials/header.blade.php -->
<header>      <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="{{url('/')}}">MOTOYA KOUTURE</a></h1>
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/">Home</a></li>
           <li class="dropdown"><a href="{{ url('/collection') }}"><span>Collections</span> </i></a>
            <!-- <ul>
                <li><a href="collection.html">Weddings</a></li>
                <li><a href="collection.html">Bridal</a></li>
                <li><a href="collection.html">Reception</a></li>
                <li><a href="collection.html">Bridesmaid</a></li>
                <li><a href="collection.html">Prom</a></li>
                <li><a href="collection.html">Litte girls</a></li>
                <li><a href="collection.html">Men</a></li>
                <li><a href="collection.html">General Custom</a></li>
            </ul> -->
          </li> 
          <!-- <li><a class="nav-link scrollto" href="the_designer.html">The Designer</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="the_process.html">The Process</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="consultation.html">Consultation</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="faq.html">FAQ</a></li> -->

          <li><a class="nav-link scrollto" href="{{ url('/contact') }}">Contact</a></li>
          <!-- <li><a class="getstarted scrollto" href="consultation.html">Get Started</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

