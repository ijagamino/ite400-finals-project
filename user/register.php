<?php
require_once '../bootstrap.php';
include APPROOT.'/inc/header.php';
?>
<section class="row">
    <div class="col-6 mx-auto">
        <div class="shadow card">
            <form action="" method="POST" class="">
                <header class="card-header">
                    <h1>Registration Form</h1>
                </header>
                <div class="card-body">
                    <fieldset>
                        <legend class="col-form-label">
                            <h2>Account Information</h2>
                        </legend>
                        <div class="form-floating">
                            <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                            <label for="username" class="form-label">Username</label>
                        </div>

                        <div class="form-floating mt-3">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                            <label for="password" class="form-label">Password</label>
                        </div>
                    </fieldset>

                    <fieldset>
                        <legend class="col-form-label">
                            <h2>Personal Information</h2>
                        </legend>

                        <fieldset>
                            <legend class="col-form-label">
                                Full Name
                            </legend>

                            <div class="row">
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="text" name="firstname" id="firstname" class="form-control" placeholder="">
                                        <label for="firstname" class="form-label">First Name</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-floating">
                                        <input type="text" name="middlename" id="middlename" class="form-control" placeholder="">
                                        <label for="middlename" class="form-label">Middle Name</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-floating">
                                        <input type="text" name="lastname" id="lastname" class="form-control" placeholder="">
                                        <label for="lastname" class="form-label">Last Name</label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <div class="form-floating mt-3">
                            <input type="email" name="email" id="email" class="form-control" placeholder="">
                            <label for="email" class="form-label">Email</label>
                        </div>

                        <fieldset>
                            <legend class="col-form-label">
                                Address
                            </legend>

                            <div class="row">
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="text" name="street" id="street" class="form-control" placeholder="">
                                        <label for="street" class="form-label">Street</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="text" name="barangay" id="barangay" class="form-control" placeholder="">
                                        <label for="barangay" class="form-label">Barangay</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="text" name="city" id="city" class="form-control" placeholder="">
                                        <label for="city" class="form-label">City</label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <div class="form-floating mt-3">
                            <input type="text" name="mobilenumber" class="form-control" placeholder="">
                            <label for="mobilenumber" class="form-label">Mobile Number</label>
                        </div>
                    </fieldset>
                    <div class="row justify-content-center mt-5">
                        <div class="col-auto">
                            <button class="btn btn-primary btn-lg">Register</button>
                        </div>
                        <a href="<?php echo URLROOT; ?>/user/login.php" class="text-center mt-3">Already have an account? Log in</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<?php include APPROOT.'/inc/footer.php'; ?>
