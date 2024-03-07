<?php
require_once 'bootstrap.php';
include APPROOT.'/inc/header.php';
?>
<h1 class="display-1 text-center">Contact Us</h1>
<p class="text-center">Do you have any feedback? Send a message below!</p>
<section class="row justify-content-center">
  <div class="col-6">
    <form class="shadow card" action="">
      <div class="card-header">
        <fieldset>
          <legend>Sender Information</legend>
        </fieldset>
      </div>
      <div class="card-body">
        <div class="">
          <label for="name" class="form-label">Name (optional)</label>
          <input type="text" name="name" id="name" class="form-control" placeholder="John Doe">
        </div>

        <div class="mt-3">
          <label for="email" class="form-label">Email (optional)</label>
          <input type="email" name="email" id="email" class="form-control" placeholder="johndoe@email.com">
        </div>

        <div class="mt-3">
          <label for="message" class="form-label">Message</label>
          <textarea name="message" id="message" class="form-control" placeholder="Type your message here..." rows="3"></textarea>
        </div>

        <div class="row justify-content-center mt-5">
          <div class="col-auto">
            <button class="btn btn-primary btn-lg">Submit</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</section>
<?php include APPROOT.'/inc/footer.php'; ?>
