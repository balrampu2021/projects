<?php
  include_once('inc/db.php');
  include_once('inc/function.php');
  include_once('public/header.php');

?>
<div class="page login-page">
      <div class="container">
        <div class="form-outer text-center d-flex align-items-center">
          <div class="form-inner">
            <div class="logo text-uppercase"><span>Dash</span><strong class="text-primary">Express</strong></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
            <form class="text-left form-validate" id='register_form' action="" method="post">
              <div class="form-group-material">
                <input id="register-username" type="text" name="username" required data-msg="Please enter your username" class="input-material">
                <label for="register-username" class="label-material">Username</label>
              </div>
              <div class="form-group-material">
                <input id="register-email" type="email" name="email" required data-msg="Please enter a valid email address" class="input-material">
                <label for="register-email" class="label-material">Email Address</label>
              </div>
              <div class="form-group-material">
                <input id="register-password" type="password" name="password" required data-msg="Please enter your password" class="input-material">
                <label for="register-password" class="label-material">Password</label>
              </div>
			  <div class="form-group-material">
                <input id="register-department" type="text" name="department" required data-msg=" enter your department" class="input-material">
                <label for="register-department" class="label-material">Department</label>
              </div>
              <div class="form-group terms-conditions text-center">
                <input id="register-agree" name="registerAgree" type="checkbox" required value="1" data-msg="Your agreement is required" class="form-control-custom">
                <label for="register-agree">I agree with the terms and policy</label>
              </div>
              <div class="form-group text-center">
                <input id="register" type="submit" name="submit" value="Register" class="btn btn-primary">
              </div>
            </form><small>Already have an account? </small><a href="<?= BASE_URL?>login.php" class="signup">Login</a>
          </div>
          <div class="copyrights text-center">
            <p>Design by <a href="https://bootstrapious.com" class="external">Bootstrapious</a></p>
            <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
          </div>
        </div>
      </div>
    </div>

       <?php include_once('public/footer.php');?>