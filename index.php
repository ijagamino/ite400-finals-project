<?php
require_once 'bootstrap.php';
include APPROOT.'/inc/header.php';
?>
<div class="align-items-center justify-content-center">
  <section class="row">
    <div class="col-lg-7 d-flex align-content-between flex-wrap">
      <div class="">
        <header>
          <h1 class="display-1">Lorem ipsum dolor sit amet consectetur.</h1>
        </header>
        <p class="lead">Lorem ipsum dolor sit amet, qui minim labore adipisicing minim sint cillum sint consectetur cupidatat.</p>
      </div>
      <div class="d-flex justify-content-between flex-grow-1 align-items-center">
        <a href="<?php echo URLROOT; ?>/user/login.php"class="btn btn-lg btn-primary">Order now</a>
        <div class="">
          <a href="<?php echo URLROOT; ?>/menu.php" class="link-underline link-underline-opacity-0">Browse menu</a>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
          </svg>
        </div>
      </div>
    </div>
    <div class="col-lg-5 mt-lg-0 mt-3">
      <img class="shadow rounded object-fit-cover img-fluid h-100" src="<?php echo URLROOT; ?>/img/cake.jpeg" alt="">
    </div>
  </section>
</div>

<?php include APPROOT.'/inc/footer.php'; ?>
