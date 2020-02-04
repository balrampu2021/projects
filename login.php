 <?php
  include_once('inc/db.php');
  include_once('inc/function.php');
  include_once('public/header.php');
?>

 <div class="page login-page">
      <div class="container">
        <div class="form-outer text-center d-flex align-items-center">
          <div class="form-inner">
            <div class="logo text-uppercase"><span>Register</span><strong class="text-primary">Dashboard</strong></div>
            <p>Employees registration form</p>
            <form method="post" class="text-left form-validate" id="login_user1" action="">
              <div class="form-group-material">
                <input id="login-username" type="text" name="loginUsername" required data-msg="Please enter your username" class="input-material">
                <label for="login-username" class="label-material">Username</label>
              </div>
              <div class="form-group-material">
                <input id="login-password" type="password" name="loginPassword" required data-msg="Please enter your password" class="input-material">
                <label for="login-password" class="label-material">Password</label>
              </div>
            <!--iv class="form-group text-center"><a id="login" href="index.html" class="btn btn-primary">Login</a>-->
                <input type=submit value="submit" id="login"  name="login" class="btn btn-primary">
                <div class='msg text-primary'></div>

                <!-- This should be submit button but I replaced it with <a> for demo purposes-->
              </div>

            </form><a href="#" class="forgot-pass">Forgot Password?</a><small>Do not have an account? </small><a href="register.html" class="signup">Signup</a>
          </div>
          <div class="copyrights text-center">
            <p>Design by <a href="https://bootstrapious.com/p/bootstrap-4-dashboard" class="external">Bootstrapious</a></p>
            <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
          </div>
        </div>
      </div>
    </div>
	
</head>


     <?php include_once('public/footer.php');?>