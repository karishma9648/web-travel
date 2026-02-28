<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Travel Website</title>

  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- Navbar -->
<nav id="navbar" class="navbar navbar-expand-lg fixed-top">

  <div class="container-fluid position-relative">

    <!-- Logo -->
    <a class="navbar-brand text-white logo" href="#">
     <img src="image/logo.webp" alt="logo" class="logo-image">
    </a>

    <!-- Toggle Button -->
    <button class="navbar-toggler text-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
      <i class="fa-solid fa-bars"></i>
    </button>

    <!-- Menu -->
    <div class="collapse navbar-collapse justify-content-center" id="menu">
      <ul class="navbar-nav text-center" style="font-weight: 600; font-size: 20px; text-align: center; justify-content: center;">

        <li class="nav-item">
          <a class="nav-link text-white" href="#">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="#">About Us</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="#">Terms & Condition</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="#">Blogs</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="#">Contact Us</a>
        </li>

      </ul>
    </div>

  </div>
</nav>

<!-- Hero -->
<section class="hero">
      <video autoplay muted loop playsinline class="bg-video">
    <source src="image/slide1.mp4" type="video/mp4" style="height: 450px; width: 450px; object-fit: cover;">
  </video>


  <div class="overlay"></div>

  <!-- Categories -->
  <div class="categories text-white">

    <span class="active"> India 360</span>
    <span class="line"></span>

    <span> Adventure</span>
    <span class="line"></span>

    <span> Nature</span>
    <span class="line"></span>

    <span> Wildlife</span>
    <span class="line"></span>

    <span>Heritage</span>
    <span class="line"></span>

    <span>Spiritual</span>

  </div>
</section>
<section class="travelx-hero">

  <img src="image/landscape photos upper/delhi .jpg">

  <div class="travelx-overlay"></div>

  <!-- CENTER TEXT -->
  <div class="travelx-content">
    <h1 class="travelx-title">FLASH DEAL</h1>
    <p class="travelx-subtitle">for every bucket list</p>
  </div>

  <!-- BOTTOM -->
  <div class="travelx-bottom">
    <div class="travelx-city">Delhi</div>
    <button class="travelx-btn">Book Now</button>
  </div>
  <!-- LEFT DOTS -->
<!-- <div class="travelx-dots">
  <div class="travelx-dot" data-text="Explore Delhi - Heritage & Culture"></div>
  <div class="travelx-dot" data-text="Adventure trips & activities"></div>
  <div class="travelx-dot" data-text="Nature & peaceful destinations"></div>
  <div class="travelx-dot" data-text="Wildlife exploration tours"></div>
  <div class="travelx-dot" data-text="Spiritual journeys across India"></div>
</div> -->

 <!-- SIDE TEXT --> 
<!-- <div id="travelxSideText" class="travelx-side-text"></div>
</section> -->

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="js/script.js"></script>
</body>
</html>