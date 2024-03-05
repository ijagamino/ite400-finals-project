<?php
require_once 'bootstrap.php';
include APPROOT.'/inc/header.php';
?>
<!-- Content here -->
<!-- ### Enticing Menu Page

#### Categorized Offerings

Separate sections for cakes with clear descriptions and high-quality photos.

#### Highlight Specialties

Feature your signature desserts or seasonal creations with detailed descriptions and enticing names. -->
<header class="">
  <h1 class="display-1 text-center">Our Menu</h1>
</header>
<p class="lead text-center">Check out our featured products</p>
<section class="row">
  <div id="carouselExampleCaptions" class="col-6 mx-auto carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?= URLROOT; ?>/img/cake.jpeg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?= URLROOT; ?>/img/cake.jpeg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?= URLROOT; ?>/img/cake.jpeg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- <h2 class="col display-2">Featured Products</h2>
<div class="card-group">
<div class="card shadow">
<img src="<?= URLROOT; ?>/img/cake.jpeg" class="card-img-top object-fit-cover" alt="" style="height: 16rem;">
<div class="card-body">
<h3 class="card-title">Product Name</h3>
<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
</div>
</div>
<div class="card shadow">
<img src="<?= URLROOT; ?>/img/cake.jpeg" class="card-img-top object-fit-cover" alt="" style="height: 16rem;">
<div class="card-body">
<h3 class="card-title">Product Name</h3>
<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
</div>
</div>
<div class="card shadow">
<img src="<?= URLROOT; ?>/img/cake.jpeg" class="card-img-top object-fit-cover" alt="" style="height: 16rem;">
<div class="card-body">
<h3 class="card-title">Product Name</h3>
<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
</div>
</div>
</div> -->
</section>
<section class="row mt-5">
  <header class="col-12">
    <h2 class="display-2">Cakes</h2>
  </header>
  <div class="row mt-4 align-items-center">
    <div class="col-4">
      <div class="card">
        <img src="<?= URLROOT; ?>/img/cake.jpeg" class="img-fluid card-img-top" alt="" style="">
        <div class="card-body">
          <h3 class="card-title">Bento Cakes</h3>
          <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id sunt cumque earum.</p>
        </div>
      </div>
    </div>
    <div class="col-4">
      <div class="card">
        <img src="<?= URLROOT; ?>/img/cake.jpeg" class="img-fluid card-img-top" alt="" style="">
        <div class="card-body">
          <h3 class="card-title">Bento Grande</h3>
          <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id sunt cumque earum.</p>
        </div>
      </div>
    </div>
    <div class="col-4">
      <div class="card">
        <img src="<?= URLROOT; ?>/img/cake.jpeg" class="img-fluid card-img-top" alt="" style="">
        <div class="card-body">
          <h3 class="card-title">Flower Bento Box</h3>
          <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id sunt cumque earum.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End of content -->
<?php include APPROOT.'/inc/footer.php'; ?>
