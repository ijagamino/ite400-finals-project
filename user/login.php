<?php
require_once '../bootstrap.php';
include APPROOT.'/inc/header.php';
?>
<section class="row justify-content-center">
  <div class="col-6">
    <form action="" method="POST" class="shadow card">
      <header class="card-header">
        <h1>Log In</h1>
      </header>
      <div class="card-body">
        <div class="form-floating">
          <input type="text" name="username" id="username" class="form-control" placeholder="Username">
          <label for="username" class="form-label">Username</label>
        </div>

        <div class="form-floating mt-3">
          <input type="password" name="password" id="password" class="form-control" placeholder="Password">
          <label for="password" class="form-label">Password</label>
        </div>
        <div class="row justify-content-center mt-5">
          <div class="col-auto">
            <button class="btn btn-primary btn-lg">Log In</button>
          </div>
          <a href="<?= URLROOT; ?>/user/register.php" class="text-center mt-3">No account yet? Register</a>
        </div>
      </div>
    </form>
  </div>
</section>
<?php include APPROOT.'/inc/footer.php'; ?>

