
<nav class="navbar navbar-expand-lg navbar-dark"">

<div class="container-fluid">

<!-- Logo -->
<a class="logo" href="#">
<img src="image/logo.webp" alt="">
</a>


<!-- Hamburger -->
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">

<i class="bi bi-list" id="menuIcon"></i>

</button>


<div class="collapse navbar-collapse justify-content-center" id="navmenu">

<ul class="navbar-nav">

<li class="nav-item">
<a class="nav-link" href="index.php">Home</a>
</li>

<li class="nav-item">
<a class="nav-link" href="about.php">About Us</a>
</li>

<li class="nav-item">
<a class="nav-link" href="terms.php">Terms & Condition</a>
</li>

<li class="nav-item">
<a class="nav-link" href="blog.php">Blogs</a>
</li>

<li class="nav-item">
<a class="nav-link" href="contact.php">Contact Us</a>
</li>

</ul>

<a href="#" class="book-btn ms-lg-4" id="bookBtn">Book Now</a>

</div>

</div>

</nav>
<div class="modal fade" id="bookingModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    
    <div class="modal-content booking-modal">

      <div class="modal-header border-0">
        <h5 class="modal-title">Book Your Ride</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <form>

          <div class="mb-3">
            <input type="text" class="form-control" placeholder="Your Name">
          </div>

          <div class="mb-3">
            <input type="tel" class="form-control" placeholder="Phone Number">
          </div>

          <div class="mb-3">
            <input type="text" class="form-control" placeholder="Pickup Location">
          </div>

          <div class="mb-3">
            <input type="text" class="form-control" placeholder="Drop Location">
          </div>

          <div class="mb-3">
            <input type="date" class="form-control">
          </div>

          <button class="btn book-submit w-100">
            Book Now
          </button>

        </form>

      </div>

    </div>

  </div>
</div>