<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PT. Universal Luggage Indonesia</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="aset/img/Favicon-Uli.png" rel="icon">
  <link href="aset/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="aset/vendor/aos/aos.css" rel="stylesheet">
  <link href="aset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="aset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="aset/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="aset/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="aset/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="aset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="aset/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  @include('frontend.partials.header')
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  @include('frontend.partials.hero')
  <!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    @include('frontend.partials.about')
    <!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    @include('frontend.partials.client')
    <!-- End Clients Section -->

    <!-- ======= Features Section ======= -->
    {{-- @include('frontend.partials.feature') --}}
    <!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    @include('frontend.partials.services')
    <!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Call To Action</h3>
          <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <a class="cta-btn" href="#">Call To Action</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    @include('frontend.partials.portofilio')
    <!-- End Portfolio Section -->

    <!-- ======= Counts Section ======= -->
    {{-- @include('frontend.partials.counts') --}}
    <!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->
    {{-- @include('layout.testimonial') --}}
    <!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    @include('frontend.partials.team')
    <!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    @include('frontend.partials.contact')
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('frontend.partials.footer')
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="aset/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="aset/vendor/aos/aos.js"></script>
  <script src="aset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="aset/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="aset/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="aset/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="aset/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="aset/js/main.js"></script>

</body>

</html>
