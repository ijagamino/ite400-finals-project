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
<header class="row">
  <h1 class="col display-1 text-center">Our Menu</h1>
</header>
<section class="row">
  <h2 class="col display-2">Featured Products</h2>
  <div class="card-group">
    <div class="card shadow">
      <img src="<?php echo URLROOT; ?>/img/cake.jpeg" class="card-img-top object-fit-cover" alt="" style="height: 16rem;">
      <div class="card-body">
        <h3 class="card-title">Product Name</h3>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
    <div class="card shadow">
      <img src="<?php echo URLROOT; ?>/img/cake.jpeg" class="card-img-top object-fit-cover" alt="" style="height: 16rem;">
      <div class="card-body">
        <h3 class="card-title">Product Name</h3>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
    <div class="card shadow">
      <img src="<?php echo URLROOT; ?>/img/cake.jpeg" class="card-img-top object-fit-cover" alt="" style="height: 16rem;">
      <div class="card-body">
        <h3 class="card-title">Product Name</h3>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>

    </div>
  </div>
</section>
<section class="mt-5">
  <div class="row mt-4">
    <div class="col"></div>
    <h2 class="col text-center">Chocolate</h2>
    <h2 class="col text-center">Vanilla</h2>
    <h2 class="col text-center">Caramel</h2>
    <h2 class="col text-center">Strawberry</h2>
  </div>
  <div class="row mt-4 align-items-center">
    <h2 class="col">Bento Cakes</h2>
    <div class="col">
      <img src="<?php echo URLROOT; ?>/img/cake.jpeg" class="img-fluid" alt="" style="">
    </div>
    <div class="col">
      <img src="<?php echo URLROOT; ?>/img/cake.jpeg" class="img-fluid" alt="" style="">
    </div>
    <div class="col">
      <img src="<?php echo URLROOT; ?>/img/cake.jpeg" class="img-fluid" alt="" style="">
    </div>
    <div class="col">
      <img src="<?php echo URLROOT; ?>/img/cake.jpeg" class="img-fluid" alt="" style="">
    </div>
  </div>
  <div class="row mt-4 align-items-center">
    <h2 class="col">Bento Grande</h2>
    <div class="col">
      <img src="<?php echo URLROOT; ?>/img/cake.jpeg" class="img-fluid" alt="" style="">
    </div>
    <div class="col">
      <img src="<?php echo URLROOT; ?>/img/cake.jpeg" class="img-fluid" alt="" style="">
    </div>
    <div class="col">
      <img src="<?php echo URLROOT; ?>/img/cake.jpeg" class="img-fluid" alt="" style="">
    </div>
    <div class="col">
      <img src="<?php echo URLROOT; ?>/img/cake.jpeg" class="img-fluid" alt="" style="">
    </div>
  </div>
  <div class="row mt-4 align-items-center">
    <h2 class="col">Flower Bento Box</h2>
    <div class="col">
      <img src="<?php echo URLROOT; ?>/img/cake.jpeg" class="img-fluid" alt="" style="">
    </div>
    <div class="col">
      <img src="<?php echo URLROOT; ?>/img/cake.jpeg" class="img-fluid" alt="" style="">
    </div>
    <div class="col">
      <img src="<?php echo URLROOT; ?>/img/cake.jpeg" class="img-fluid" alt="" style="">
    </div>
    <div class="col">
      <img src="<?php echo URLROOT; ?>/img/cake.jpeg" class="img-fluid" alt="" style="">
    </div>
  </div>
</section>
<!-- End of content -->
<?php include APPROOT.'/inc/footer.php'; ?>
