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
  <video id="travelHeroVideo" autoplay controls loop playsinline>
    <source src="image/videos-compressed/360 dd(1).mp4" type="video/mp4">
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

<div class="text-center book-btn2">
<button class="btn btn-danger px-4 py-2 rounded-pill mt-5">Book Now</button>
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
<img src="image/portrait photos lower/MAHABHODHI TEMPLE.jpg" class="w-100">
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
<img src="image/portrait photos lower/ROHTANG PASS.jpg" class="w-100">
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
<img src="image/car photos/hyndai verna.jpg" alt="">
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
<img src="image/car photos/maruti dezire.jpg" alt="">
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
<img src="image/1.webp">
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
<img src="image/2.webp">
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
<img src="image/3.webp">
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
<img src="image/1.webp">
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
<img src="image/4.webp">
</div>
<div class="wwdo-content">
<h5>Bus & Tempo Traveller Rentals</h5>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="wwdo-card">
<div class="wwdo-img">
<img src="image/2.webp">
</div>
<div class="wwdo-content">
<h5>Local & Outstation Car Rentals</h5>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="wwdo-card">
<div class="wwdo-img">
<img src="image/2.webp">
</div>
<div class="wwdo-content">
<h5>Customized Tour Packages</h5>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="wwdo-card">
<div class="wwdo-img">
<img src="image/5.webp">
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
<section class="whyus-section">

<div class="container text-center">

<h2 class="whyus-title">WHY TRAVEL WITH US</h2>

<p class="whyus-desc">
At Kanpur Tour and Travels, we do more than just take you from one place to another — 
we deliver a safe, stress-free, and satisfying travel experience every time. 
Here’s why thousands of customers choose us for their journeys:
</p>

<div id="whyusCarousel"
class="carousel slide"
data-bs-ride="carousel"
data-bs-interval="3500">

<div class="carousel-inner">

<!-- SLIDE 1 -->
<div class="carousel-item active">
<div class="row g-4">

<!-- CARD 1 -->
<div class="col-lg-3 col-md-6">
<div class="whyus-card">
<div class="whyus-img">
<img src="image/w-1.webp">
</div>
<div class="whyus-content">
<h5>Wide Range of Vehicles</h5>
<p>
From hatchbacks and sedans to luxury cars, tempo travellers, and Volvo buses —
we have the perfect ride for every occasion, group size, and budget.
</p>
</div>
</div>
</div>

<!-- CARD 2 -->
<div class="col-lg-3 col-md-6">
<div class="whyus-card">
<div class="whyus-img">
<img src="image/w-5.webp">
</div>
<div class="whyus-content">
<h5>Experienced, Verified Drivers</h5>
<p>
Our drivers are not just trained professionals — they’re punctual, polite,
and well-versed with routes across India. Your safety comes first.
</p>
</div>
</div>
</div>

<!-- CARD 3 -->
<div class="col-lg-3 col-md-6">
<div class="whyus-card">
<div class="whyus-img">
<img src="image/w-3.webp">
</div>
<div class="whyus-content">
<h5>Clean, GPS-Enabled Vehicles</h5>
<p>
Every vehicle in our fleet is regularly sanitized, maintained,
and equipped with GPS tracking for a smooth and secure ride.
</p>
</div>
</div>
</div>

<!-- CARD 4 -->
<div class="col-lg-3 col-md-6">
<div class="whyus-card">
<div class="whyus-img">
<img src="image/w-4.webp">
</div>
<div class="whyus-content">
<h5>Customized Travel Packages</h5>
<p>
We don’t believe in one-size-fits-all. Whether you need a quick ride,
a weekend escape, or a multi-day tour — we tailor your trip.
</p>
</div>
</div>
</div>

</div>
</div>

<!-- DUPLICATE SLIDE FOR LOOP -->
<div class="carousel-item">
<div class="row g-4">

<div class="col-lg-3 col-md-6">
<div class="whyus-card">
<div class="whyus-img">
<img src="image/w-4.webp">
</div>
<div class="whyus-content">
<h5>Customized Travel Packages</h5>
<p>We tailor your journey exactly as per your needs.</p>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="whyus-card">
<div class="whyus-img">
<img src="image/w-3.webp">
</div>
<div class="whyus-content">
<h5>Clean, GPS-Enabled Vehicles</h5>
<p>Safe and sanitized vehicles with live GPS tracking.</p>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="whyus-card">
<div class="whyus-img">
<img src="image/w-3.webp">
</div>
<div class="whyus-content">
<h5>Experienced Drivers</h5>
<p>Professional and verified drivers for your comfort.</p>
</div>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="whyus-card">
<div class="whyus-img">
<img src="image/w-1.webp">
</div>
<div class="whyus-content">
<h5>Wide Range of Vehicles</h5>
<p>Choose from multiple vehicle categories.</p>
</div>
</div>
</div>

</div>
</div>

</div>

</div>
</div>
</section>

<section class="stories-section">

<div class="container text-center">

<p class="stories-tag">TRAVELER STORIES</p>
<h2 class="stories-title">Journeys Remembered</h2>

<p class="stories-subtitle">
Hear from our valued clients who chose Kanpur Travels for seamless
planning and memorable adventures.
</p>

<div class="row g-4 mt-4">

<!-- CARD 1 -->
<div class="col-lg-3 col-md-6">
<div class="stories-card">
<div class="stories-stars">
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
</div>

<p class="stories-text">
"The historical tour of Lucknow and surrounding areas was perfectly curated.
Our guide was incredibly knowledgeable, bringing every monument to life.
It was more than a trip; it was an experience."
</p>

<h6 class="stories-name">— Rohit Kapoor</h6>
<p class="stories-type">Trip Type: Historical Tour</p>
</div>
</div>

<!-- CARD 2 -->
<div class="col-lg-3 col-md-6">
<div class="stories-card">
<div class="stories-stars">
  <i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
</div>

<p class="stories-text">
"Planning a family vacation used to be a nightmare, but Kanpur Travels made it stress-free.
They handled all the logistics, from flights to kid-friendly activities.
The custom planning was exceptional."
</p>

<h6 class="stories-name">— Saumya Gupta</h6>
<p class="stories-type">Trip Type: Family Vacation</p>
</div>
</div>

<!-- CARD 3 -->
<div class="col-lg-3 col-md-6">
<div class="stories-card">
<div class="stories-stars">
  <i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
</div>

<p class="stories-text">
"The historical tour of Lucknow and surrounding areas was perfectly curated.
Our guide was incredibly knowledgeable, bringing every monument to life.
It was truly unforgettable."
</p>

<h6 class="stories-name">— Rohit Kapoor</h6>
<p class="stories-type">Trip Type: Historical Tour</p>
</div>
</div>

<!-- CARD 4 -->
<div class="col-lg-3 col-md-6">
<div class="stories-card">
<div class="stories-stars">
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
<i class="fa-solid fa-star"></i>
</div>

<p class="stories-text">
"Planning a family vacation used to be stressful, but Kanpur Travels made it easy.
Everything was organized perfectly from start to finish."
</p>

<h6 class="stories-name">— Saumya Gupta</h6>
<p class="stories-type">Trip Type: Family Vacation</p>
</div>
</div>

</div>

<!-- BUTTON -->
<div class="stories-btn-wrapper">
<a href="#" class="stories-btn">Start Planning Your Trip</a>
</div>

</div>
</section>
<!-- Right Side Vertical Button -->
  <div class="tu-book-btn">
    Book Your Travel
  </div>


<?php
  include 'footer.php';

  ?>
  

</body>
</html>