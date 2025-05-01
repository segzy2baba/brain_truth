<?php
// Get the current script name (e.g., 'index.php')
$current_page = basename($_SERVER['PHP_SELF']);
?>
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-0 pe-5">
  <a href="index.php" class="navbar-brand ps-5 me-0 d-flex align-items-center">
    <div class="logo-container" style="height: 50px; display: flex; align-items: center">
      <img src="img/logo.png" alt="Brain & Truth Logo" style="height: 40px; margin-right: 10px" />
      <!-- Ensure h1 text color is visible on the white background if needed -->
      <h1 class="text-white m-0">Brain & Truth</h1>
    </div>
  </a>
  <button
    type="button"
    class="navbar-toggler me-0"
    data-bs-toggle="collapse"
    data-bs-target="#navbarCollapse"
  >
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav ms-auto p-4 p-lg-0">
      <a href="index.php" class="nav-item nav-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">Home</a>
      <a href="service.php" class="nav-item nav-link <?php echo ($current_page == 'service.php') ? 'active' : ''; ?>">Services</a>
      <a href="contact.php" class="nav-item nav-link <?php echo ($current_page == 'contact.php') ? 'active' : ''; ?>">Contact</a>
    </div>
    <a href="contact.php" class="btn btn-primary px-3 d-none d-lg-block">Get A Quote</a>
  </div>
</nav>
