<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Travel Website</title>
  <?php include 'header-link.php'; ?>
 
</head>
<body>
 <?php
  include 'header.php';
 ?>
 <!-- hero section start -->
  <section class="travel-hero-section">

  <!-- Background Video -->
  <video id="travelHeroVideo" autoplay muted loop playsinline>
    <source src="image/videos-compressed/slide1.mp4" type="video/mp4">
  </video>

  <!-- Overlay -->
  <div class="travel-hero-overlay"></div>



  <!-- Categories -->
  <div class="travel-category-bar">
    <ul>
      <li class="active" onclick="changeTravelVideo('india')">India 360</li>
      <li onclick="changeTravelVideo('adventure')">Adventure</li>
      <li onclick="changeTravelVideo('nature')">Nature</li>
      <li onclick="changeTravelVideo('wildlife')">Wildlife</li>
      <li onclick="changeTravelVideo('heritage')">Heritage</li>
      <li onclick="changeTravelVideo('spiritual')">Spiritual</li>
    </ul>
  </div>

  <!-- Right Side Button -->
  <div class="travel-side-btn">
    Book Your Travel
  </div>

</section>
<!-- hero section end -->
 <section class="tt-hero-wrap">

  <!-- Background Image -->
  <div class="tt-hero-bg"></div>

  <!-- Overlay -->
  <div class="tt-hero-overlay"></div>

  <!-- Content -->
  <div class="container tt-hero-content text-center">
    <h1 class="tt-main-title">FLASH DEAL</h1>
    <p class="tt-sub-title">for every bucket list</p>
 
  
    <h2 class="tt-city-name">Delhi</h2>
    <button class="btn tt-book-btn">Book Now</button>
  </div>

  <!-- LEFT INDICATOR -->
  <div class="tt-left-indicator">
    <div class="tt-dot-line" 
         onmouseenter="showTTInfo()" 
         onmouseleave="hideTTInfo()"
         onclick="showTTInfo()">
    </div>

    <!-- Hidden Text -->
    <div class="tt-info-box" id="ttInfoBox">
      <h4>Red Fort</h4>
      <p>
        The Red Fort in Delhi is a historic fort built by Mughal Emperor Shah Jahan in 1648. 
        It is a UNESCO World Heritage Site and a symbol of India's rich history.
      </p>
    </div>
  </div>

</section>

<section class="packages-section">
<div class="container">

<h2 class="section-title">PACKAGES</h2>

<!-- Carousel -->
<div id="packagesCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">

<div class="carousel-inner">

<!-- Slide 1 -->
<div class="carousel-item active">
<div class="row g-4">

<div class="col-lg-3 col-md-6">
<div class="package-card">
<img src="image/portrait photos lower/SANCHI STUPA.jpg" alt="">
<div class="package-title">Sanchi Stupa</div>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="package-card">
<img src="image/portrait photos lower/RED FORT.jpg" alt="">
<div class="package-title">Swami Vivekananda Sarovar</div>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="package-card">
<img src="image/portrait photos lower/DZUKOU VALLEY.jpg" alt="">
<div class="package-title">Netarhat Dam</div>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="package-card">
<img src="image/landscape photos upper/char minar hydrabad.jpg" alt="">
<div class="package-title">Charminar</div>
</div>
</div>

</div>
</div>

<!-- Slide 2 (Duplicate for smooth loop effect) -->
<div class="carousel-item">
<div class="row g-4">

<div class="col-lg-3 col-md-6">
<div class="package-card">
<img src="image/landscape photos upper/char minar hydrabad.jpg" alt="">
<div class="package-title">Charminar</div>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="package-card">
<img src="image/portrait photos lower/TAWANG MONASTRY .jpg" alt="">
<div class="package-title">Netarhat Dam</div>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="package-card">
<img src="image/portrait photos lower/SHORE TEMPLE.jpg" alt="Swami Vivekananda Sarovar">
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="package-card">
<img src="image/portrait photos lower/SANCHI STUPA.jpg" alt="">
<div class="package-title">Sanchi Stupa</div>
</div>
</div>

</div>
</div>

</div>

<!-- Arrows -->
<button class="carousel-control-prev" type="button" data-bs-target="#packagesCarousel" data-bs-slide="prev">
<span class="carousel-control-prev-icon"></span>
</button>

<button class="carousel-control-next" type="button" data-bs-target="#packagesCarousel" data-bs-slide="next">
<span class="carousel-control-next-icon"></span>
</button>

</div>

<div class="text-center book-btn">
<button class="btn btn-danger px-4 py-2 rounded-pill">Book Now</button>
</div>

</div>
</section>

<section class="itinerary-section py-5">
<div class="container text-center">

<h2 class="main-title">ITINERARIES</h2>
<p class="sub-title">that beckon every traveller</p>

<div id="itineraryCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500">

<div class="carousel-inner">

<!-- Slide 1 -->
<div class="carousel-item active">
<div class="row g-4">

<div class="col-lg-3 col-md-6">
<div class="itinerary-card">
<div class="image-wrapper">
<img src="image/portrait photos lower/TAWANG MONASTRY .jpg" class="w-100">
</div>
<div class="card-content mt-3">
<span class="days">2 Days</span>
<h6 class="place">Munnar</h6>
<p>A 2-day tour in Munnar</p>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="itinerary-card">
<div class="image-wrapper">
<img src="image/portrait photos lower/CHERAI BEACH .jpg" class="w-100">
</div>
<div class="card-content mt-3">
<span class="days">2 Days</span>
<h6 class="place">Mysuru</h6>
<p>Mysuru’s royal exploration</p>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="itinerary-card">
<div class="image-wrapper">
<img src="image/portrait photos lower/HAR KI PAUDI .jpg" class="w-100">
</div>
<div class="card-content mt-3">
<span class="days">2 Days</span>
<h6 class="place">Gulbarga</h6>
<p>48 hours in Gulbarga: unveiling hidden gems</p>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="itinerary-card">
<div class="image-wrapper">
<img src="image/landscape photos upper/rameshwaram temple .jpg" class="w-100">
</div>
<div class="card-content mt-3">
<span class="days">2 Days</span>
<h6 class="place">Rameshwaram</h6>
<p>Explore Rameshwaram’s spiritual tapestry</p>
</div>
</div>
</div>

</div>
</div>

<!-- Duplicate Slide for smooth loop -->
<div class="carousel-item">
<div class="row g-4">

<div class="col-lg-3 col-md-6">
<div class="itinerary-card">
<div class="image-wrapper">
<img src="image/landscape photos upper/rameshwaram temple .jpg" class="w-100">
</div>
<div class="card-content mt-3">
<span class="days">2 Days</span>
<h6 class="place">Rameshwaram</h6>
<p>Explore Rameshwaram’s spiritual tapestry</p>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="itinerary-card">
<div class="image-wrapper">
<img src="image/portrait photos lower/GULBARGA.jpg" class="w-100">
</div>
<div class="card-content mt-3">
<span class="days">2 Days</span>
<h6 class="place">Gulbarga</h6>
<p>48 hours in Gulbarga: unveiling hidden gems</p>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="itinerary-card">
<div class="image-wrapper">
<img src="image/portrait photos lower/SHRI JAGANATH TEMPLE.jpg" class="w-100">
</div>
<div class="card-content mt-3">
<span class="days">2 Days</span>
<h6 class="place">Mysuru</h6>
<p>Mysuru’s royal exploration</p>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="itinerary-card">
<div class="image-wrapper">
<img src="image/portrait photos lower/KAMAKHYA TEMPLE.jpg" class="w-100">
</div>
<div class="card-content mt-3">
<span class="days">2 Days</span>
<h6 class="place">Munnar</h6>
<p>A 2-day tour in Munnar</p>
</div>
</div>
</div>

</div>
</div>

</div>

<!-- Arrows -->
<button class="carousel-control-prev" type="button" data-bs-target="#itineraryCarousel" data-bs-slide="prev">
<span class="carousel-control-prev-icon"></span>
</button>

<button class="carousel-control-next" type="button" data-bs-target="#itineraryCarousel" data-bs-slide="next">
<span class="carousel-control-next-icon"></span>
</button>

</div>

<div class="mt-5">
<button class="btn btn-danger px-4 py-2 rounded-pill">Book now</button>
</div>

</div>
</section>

<section class="car-rental-sec">

<div class="container text-center">

<h2 class="car-rental-title">CAR RENTAL</h2>

<div id="carRentalCarousel" class="carousel slide"
data-bs-ride="carousel"
data-bs-interval="2500">

<div class="carousel-inner">

<!-- Slide 1 -->
<div class="carousel-item active">
<div class="row g-4">

<div class="col-lg-3 col-md-6">
<div class="car-card">
<img src="image/car photos/Maruti Celerio.jpg" alt="">
<div class="car-overlay"></div>
<h4 class="car-name">Maruti Celerio</h4>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="car-card">
<img src="image/car photos/maruti dezire.jpg" alt="">
<div class="car-overlay"></div>
<h4 class="car-name">Maruti Dzire</h4>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="car-card">
<img src="image/car photos/Honda City.jpg" alt="">
<div class="car-overlay"></div>
<h4 class="car-name">Honda City</h4>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="car-card">
<img src="image/car photos/hyndai verna.jpg" alt="">
<div class="car-overlay"></div>
<h4 class="car-name">Hyundai Verna</h4>
</div>
</div>

</div>
</div>

<!-- Duplicate slide for smooth infinite -->
<div class="carousel-item">
<div class="row g-4">

<div class="col-lg-3 col-md-6">
<div class="car-card">
<img src="image/car photos/Hyundai Verna.jpg" alt="">
<div class="car-overlay"></div>
<h4 class="car-name">Hyundai Verna</h4>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="car-card">
<img src="image/car photos/Honda City.jpg" alt="">
<div class="car-overlay"></div>
<h4 class="car-name">Honda City</h4>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="car-card">
<img src="image/car photos/Maruti Dzire.jpg" alt="">
<div class="car-overlay"></div>
<h4 class="car-name">Maruti Dzire</h4>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="car-card">
<img src="image/car photos/Maruti Celerio.jpg" alt="">
<div class="car-overlay"></div>
<h4 class="car-name">Maruti Celerio</h4>
</div>
</div>

</div>
</div>

</div>

<!-- Arrows -->
<button class="carousel-control-prev" type="button"
data-bs-target="#carRentalCarousel"
data-bs-slide="prev">
<span class="carousel-control-prev-icon"></span>
</button>

<button class="carousel-control-next" type="button"
data-bs-target="#carRentalCarousel"
data-bs-slide="next">
<span class="carousel-control-next-icon"></span>
</button>

</div>

<div class="mt-5">
<button class="btn btn-danger px-4 py-2 rounded-pill">Book now</button>
</div>

</div>
</section>

<section class="wwdo-section">

<div class="container text-center">

<h2 class="wwdo-title">WHAT WE DO OFFERS</h2>

<div class="wwdo-subtitle">
<span></span>
<p>of timeless tradition</p>
<span></span>
</div>

<div id="wwdoCarousel" class="carousel slide"
data-bs-ride="carousel"
data-bs-interval="3000">

<div class="carousel-inner">

<!-- SLIDE 1 -->
<div class="carousel-item active">
<div class="row g-4">

<!-- CARD 1 -->
<div class="col-lg-3 col-md-6">
<div class="wwdo-card">
<div class="wwdo-img">
<img src="image1.jpg">
</div>
<div class="wwdo-content">
<h5>Corporate & Institutional Tie-Ups</h5>
</div>
</div>
</div>

<!-- CARD 2 -->
<div class="col-lg-3 col-md-6">
<div class="wwdo-card">
<div class="wwdo-img">
<img src="image2.jpg">
</div>
<div class="wwdo-content">
<h5>Customized Tour Packages</h5>
</div>
</div>
</div>

<!-- CARD 3 -->
<div class="col-lg-3 col-md-6">
<div class="wwdo-card">
<div class="wwdo-img">
<img src="image3.jpg">
</div>
<div class="wwdo-content">
<h5>Local & Outstation Car Rentals</h5>
</div>
</div>
</div>

<!-- CARD 4 -->
<div class="col-lg-3 col-md-6">
<div class="wwdo-card">
<div class="wwdo-img">
<img src="image4.jpg">
</div>
<div class="wwdo-content">
<h5>Bus & Tempo Traveller Rentals</h5>
</div>
</div>
</div>

</div>
</div>

<!-- DUPLICATE FOR SMOOTH LOOP -->
<div class="carousel-item">
<div class="row g-4">

<div class="col-lg-3 col-md-6">
<div class="wwdo-card">
<div class="wwdo-img">
<img src="image4.jpg">
</div>
<div class="wwdo-content">
<h5>Bus & Tempo Traveller Rentals</h5>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="wwdo-card">
<div class="wwdo-img">
<img src="image3.jpg">
</div>
<div class="wwdo-content">
<h5>Local & Outstation Car Rentals</h5>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="wwdo-card">
<div class="wwdo-img">
<img src="image2.jpg">
</div>
<div class="wwdo-content">
<h5>Customized Tour Packages</h5>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="wwdo-card">
<div class="wwdo-img">
<img src="image1.jpg">
</div>
<div class="wwdo-content">
<h5>Corporate & Institutional Tie-Ups</h5>
</div>
</div>
</div>

</div>
</div>

</div>

<!-- ARROWS -->
<button class="carousel-control-prev"
type="button"
data-bs-target="#wwdoCarousel"
data-bs-slide="prev">
<span class="carousel-control-prev-icon"></span>
</button>

<button class="carousel-control-next"
type="button"
data-bs-target="#wwdoCarousel"
data-bs-slide="next">
<span class="carousel-control-next-icon"></span>
</button>

</div>
</div>
</section>



<?php
  include 'footer.php';

  ?>
</body>
</html>