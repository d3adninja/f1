<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>F1 Infotech</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Space+Grotesk&display=swap" rel="stylesheet" />

  <!-- Icon Font -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />

  <!-- Owl Carousel CSS (CDN) -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet" />

  <!-- Animate.css (v4) -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet" />

  <!-- Your project CSS (keep local if you modified it) -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />

  <style>
    /* helpers */
    .hero-header { background: #f8f9fa; }
    .owl-carousel .item img { width: 100%; height: auto; display: block; }
    .header-carousel .item { min-height: 220px; display:flex; align-items:center; justify-content:center; }
  </style>
</head>
<body>

  <!-- Hero Start (place inside BODY) -->
  <div class="container-fluid pb-5 hero-header bg-light mb-5">
    <div class="container py-5">
      <div class="row g-5 align-items-center mb-5">
        <div class="col-lg-6">
          <!-- animate.css v4 class names -->
          <h1 class="display-1 mb-4 animate__animated animate__slideInRight">
            Simplifying Complex
            <span class="text-primary">IT Landscapes</span>
          </h1>
          <h5 class="d-inline-block border border-2 border-white py-3 px-5 mb-0 animate__animated animate__slideInRight">
            From virtualization to migration — we design, deploy, and manage technology that works for your business.
          </h5>
        </div>

        <div class="col-lg-6">
          <!-- each slide wrapped in .item -->
          <div class="owl-carousel header-carousel animate__animated animate__fadeIn">
            <div class="item"><img class="img-fluid" src="img/c3.jpg" alt="Slide 1"></div>
            <div class="item"><img class="img-fluid" src="img/c1.jpg" alt="Slide 2"></div>
            <div class="item"><img class="img-fluid" src="img/c2.jpg" alt="Slide 3"></div>
          </div>
        </div>
      </div>

      <div class="row g-5 animate__animated animate__fadeIn">
        <div class="col-md-6 col-lg-3">
          <div class="d-flex align-items-center">
            <div class="flex-shrink-0 btn-square border border-2 border-white me-3"><i class="fa fa-trophy text-primary"></i></div>
            <h5 class="lh-base mb-0">60+ Industry & OEM Awards</h5>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="d-flex align-items-center">
            <div class="flex-shrink-0 btn-square border border-2 border-white me-3"><i class="fa fa-history text-primary"></i></div>
            <h5 class="lh-base mb-0">23+ Years of Proven Expertise</h5>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="d-flex align-items-center">
            <div class="flex-shrink-0 btn-square border border-2 border-white me-3"><i class="fa fa-globe text-primary"></i></div>
            <h5 class="lh-base mb-0">300+ Global <br> Customers</h5>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="d-flex align-items-center">
            <div class="flex-shrink-0 btn-square border border-2 border-white me-3"><i class="fa fa-users text-primary"></i></div>
            <h5 class="lh-base mb-0">100+ Skilled Professionals</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Hero End -->

  <!-- Scripts (put before closing body) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>

  <script>
    $(function () {
      if ($('.header-carousel').length) {
        $('.header-carousel').owlCarousel({
          items: 1,
          loop: true,
          margin: 10,
          nav: true,
          dots: true,
          autoplay: true,
          autoplayTimeout: 3500,
          autoplayHoverPause: true,
          smartSpeed: 700,
          animateOut: 'fadeOut'
        });
      }
    });
  </script>


