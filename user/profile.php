<?php
require_once '../bootstrap.php';
include APPROOT.'/inc/header.php';
?>
<div class="row">
  <?php include APPROOT.'/inc/aside.php'; ?>
  <section class="col-6 ">
    <form action="">
      <fieldset disabled>
        <h1>Profile Information</h1>
        <div class="row">
          <div class="col">
            <label class="form-label">First Name</label>
            <input class="form-control" type="text" placeholder="First Name">
          </div>
          <div class="col">
            <label class="form-label">Middle Name</label>
            <input class="form-control" type="text" placeholder="Middle Name">
          </div>
          <div class="col">
            <label class="form-label">Last Name</label>
            <input class="form-control" type="text" placeholder="Last Name">
          </div>
        </div>
        <label class="form-label">Email</label>
        <input class="form-control" type="text" placeholder="Email">

      </fieldset>
      <label class="form-label">Password</label>
      <input class="form-control" type="text">

      <label class="form-label">Address</label>
      <input class="form-control" type="text">

      <label class="form-label">Contact Number</label>
      <input class="form-control" type="text">
    </form>
    <button class="btn btn-primary btn-lg mt-3">Save changes</button>
  </section>
</div>
<?php include APPROOT.'/inc/footer.php'; ?>
