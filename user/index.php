<?php
require_once '../bootstrap.php';
include APPROOT.'/inc/header.php';
?>
<div class="row">
  <?php include APPROOT.'/inc/aside.php'; ?>
  <section class="col-6">
    <h1>Overview</h1>
    <form action="">
      <h2>Profile Information</h2>
      <fieldset disabled>
        <div class="row">
          <div class="col">
            <label class="form-label">Address</label>
            <input class="form-control" type="text">
          </div>
          <div class="col">
            <label class="form-label">Contact Number</label>
            <input class="form-control" type="text">
          </div>
        </div>
      </fieldset>
    </form>
    <h2>Orders</h2>
    <h2>Recently ordered</h2>
  </section>
</div>
<?php include APPROOT.'/inc/footer.php'; ?>
