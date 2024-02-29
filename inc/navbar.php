<header class="shadow">
  <nav class="container navbar navbar-expand-lg">
    <a class="navbar-brand" href="<?php echo URLROOT; ?>/index.php">Cake Hub</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Displays when user is not logged in  -->
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/menu.php"?>Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/user/login.php"?>Log In</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/user/register.php"?>Register</a>
        </li>
      </ul>
      <!-- Displays when user is buyer -->
      <!-- <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/contact.php"?>Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo URLROOT; ?>/menu.php"?>Cart</a>
        </li>
      </ul> -->
      <!-- Displays when user is seller -->
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto">
        <!-- <li class="nav-item"> -->
        <!--   <a class="nav-link" href="<?php echo URLROOT; ?>/about.php"?>About</a> -->
        <!-- </li> -->
        <!-- <li class="nav-item"> -->
        <!--   <a class="nav-link" href="<?php echo URLROOT; ?>/contact.php"?>Contact</a> -->
        <!-- </li> -->
      </ul>
      <form class="d-flex">
        <input type="search" class="form-control me-2" placeholder="Search">
        <button class="btn btn-outline-success">Search</button>
      </form>
    </div>
  </nav>
</header>
