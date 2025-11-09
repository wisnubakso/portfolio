<!DOCTYPE html>
<html lang="en">

<?php include 'head.html'; ?>

<body class="portfolio-details-page">

  <?php include 'header.html'; ?>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="container">
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">Portfolio Details</li>
          </ol>
        </nav>
        <h1>Portfolio Details</h1>
      </div>
    </div><!-- End Page Title -->

    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details section">
      <div class="container" data-aos="fade-up">
        <div class="portfolio-details-slider swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              },
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide">
              <img src="assets/img/portfolio/PORTFOLIO - PALM COUNTING CORRECTION.png" alt="">
            </div>
            <div class="swiper-slide">
              <img src="assets/img/portfolio/PORTFOLIO - TRIMBLE ECOGNITION OPA_1.png" alt="">
            </div>
            <div class="swiper-slide">
              <img src="assets/img/portfolio/PORTFOLIO - TRIMBLE ECOGNITION OPA_2.png" alt="">
            </div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
          <div class="swiper-pagination"></div>
        </div>
        <div class="row justify-content-between gy-4 mt-4">
          <div class="col-lg-8" data-aos="fade-up">
            <div class="portfolio-description">
              <h2>Aerial Photo Project </h2>
              <p>Aerial photo acquisition for a private company (1.300 Ha) with DJI Phantom 3, processed with Agisoft Photoscan. Completed within 4 months because this mission was held in rainy season.</p>
            </div>
          </div>
          <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>Aerial Photo Project </li>
                <li><strong>Client</strong>Private Company</li>
                <li><strong>Project date</strong>Nov 2020 - Feb 2021</li>
                <!-- <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li> -->
              </ul>
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