<!DOCTYPE html>
<html lang="en">

<?php include 'head.html'; ?>

<body class="portfolio-details-page">

  <?php include 'header.html'; ?>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Portfolio Details</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">Portfolio Details</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper init-swiper">

              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  }
                }
              </script>

              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/PORTFOLIO - WEBMAP UTMU_ARESTA.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/PORTFOLIO - WEBMAP UTMU_LOGIN PAGE.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/PORTFOLIO - CODING PROCESS WITH VSCODE.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/PORTFOLIO - GEOSERVER.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/portfolio/PORTFOLIO - WEBMAP AND VSCODE.png" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info" data-aos="fade-up" data-aos-delay="200">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>: Webmap Project </li>
                <li><strong>Client</strong>: PT. Umaq Tukung Mandiri Utama (PT. WITA Internasional Bisnis Artisan)</li>
                <li><strong>Project date</strong>: Jun 2024 - Present</li>
                <!-- <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li> -->
              </ul>
            </div>
            <div class="portfolio-description" data-aos="fade-up" data-aos-delay="300">
              <h2>PT. UTMU Webmap Development</h2>
              <p>Integrating PgSQL-Geoserver-Leaflet to develop Webmap-WebGIS for PT. UTMU. This project is still continuing to this day until Webmap publishment stage.</p>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Portfolio Details Section -->

  </main>

  <?php include 'footer-preloader.html'; ?>

  <?php include 'script.html'; ?>

</body>

</html>