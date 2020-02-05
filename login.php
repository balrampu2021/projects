 <?php
 session_start();
  include_once('inc/db.php');
  include_once('inc/function.php');
  include_once('public/header.php');
  ob_start();
//Get the ipconfig details using system commond
system('ipconfig');
 
// Capture the output into a variable
$mycom=ob_get_contents();
//echo $mycom;die;
// Clean (erase) the output buffer
ob_clean();
 
$findme = "IPv4";
//Search the "Physical" | Find the position of Physical text
$ip = strpos($mycom, $findme);

 

$ipadd=substr($mycom,($ip+36),30);

$ipaddfinal= trim($ipadd,"( Subnet Mask .)");
$_SESSION['ip']=$ipaddfinal;
//print_r($_SESSION);die;
  
?>

 <div class="page login-page">
      <div class="container">
        <div class="form-outer text-center d-flex align-items-center">
          <div class="form-inner">
            <div class="logo text-uppercase"><span>Login</span><strong class="text-primary">Dashboard</strong></div>
            <p>Employees Login form</p>
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