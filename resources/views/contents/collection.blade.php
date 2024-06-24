<!-- resources/views/contents/welcome/welcome.blade.php -->
@extends('layouts.app')

@section('title', 'Motoya Kouture - Home')

@section('content')

<main id="main">

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="{{url('/')}}">Home</a></li>
      <li>Collections</li>
    </ol>
    <!-- <h2>Our Collection</h2> -->

  </div>
</section><!-- End Breadcrumbs -->


    <!-- ======= Portfolio/Designs Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>our work</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
        </div>

        <!-- <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-dress">Dress</li>
          <li data-filter=".filter-wedding">Wedding</li>
          <li data-filter=".filter-bride">Bride</li>
        </ul> -->

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-dress">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-1.webp" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Dress </h4>
              <p>Dress</p>
              <a href="assets/img/portfolio/portfolio-1.webp" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Dress 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-bride">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-2.webp" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Bride</h4>
              <p>Bride</p>
              <a href="assets/img/portfolio/portfolio-2.webp" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Bride"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-dress">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-3.webp" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Dress</h4>
              <p>Dress</p>
              <a href="assets/img/portfolio/portfolio-3.webp" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Dress"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-wedding">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-4.webp" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Wedding</h4>
              <p>Wedding</p>
              <a href="assets/img/portfolio/portfolio-4.webp" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Wedding"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-bride">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-5.webp" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Bride</h4>
              <p>Bride</p>
              <a href="assets/img/portfolio/portfolio-5.webp" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Bride"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-dress">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-6.webp" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Dress</h4>
              <p>Dress</p>
              <a href="assets/img/portfolio/portfolio-6.webp" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Dress"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-wedding">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-7.webp" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Wedding</h4>
              <p>Wedding</p>
              <a href="assets/img/portfolio/portfolio-7.webp" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Wedding"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-wedding">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-8.webp" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Wedding</h4>
              <p>Wedding</p>
              <a href="assets/img/portfolio/portfolio-8.webp" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Wedding"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-bride">
            <div class="portfolio-img"><img src="assets/img/portfolio/portfolio-9.webp" class="img-fluid" alt=""></div>
            <div class="portfolio-info">
              <h4>Bride</h4>
              <p>Bride</p>
              <a href="assets/img/portfolio/portfolio-9.webp" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Bride"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

</main><!-- End #main -->


@endsection
