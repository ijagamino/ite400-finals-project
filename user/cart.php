<?php
require_once '../bootstrap.php';
include APPROOT.'/inc/header.php';
?>
<div class="row">
  <?php include APPROOT.'/inc/aside.php'; ?>
  <section class="col-6">
    <form action="" method="POST" class="shadow card">
      <header class="card-header">
        <h1>My Cart</h1>
      </header>
      <div class="card-body">
        <div class="row">
          <div class="col-3">
            <img class="img-fluid rounded" src="../img/cake.jpeg"></img>
          </div>
          <div class="col-6">
            <h2>Name</h2>
            <small>Variation</small>
          </div>
          <div class="col-3">
            <p>Quantity</p>
            <p>Price</p>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-9">
            <h2>Total price</h2>
          </div>
          <div class="col">
            <p class="h2">P0000</p>
          </div>
        </div>
        <div class="d-grid">
          <button class="mt-3 btn btn-primary btn-lg">Checkout</button>
        </div>
      </div>
    </form>
  </section>
</div>
<?php include APPROOT.'/inc/footer.php'; ?>
