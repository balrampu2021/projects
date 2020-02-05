<?php 
	include_once('inc/db.php');
    include_once('inc/function.php');
	include_once('public/header.php');
	if(isset($_GET['id']))
	{
		//print_r($_GET);die;
		$id=$_GET['id'];
		//echo "$id";

        
	}
		
	if(isset($_GET['id']))
	{
	$a=show_users_with_id($conn,$id);	
		
	}		//print_r($a);

		
	

	if(isset($_POST['username']) || isset($_POST['email'])){
		//print_r($_POST);die;
		$username=$_POST['username'];
		$email=$_POST['email'];

		if(update_user($conn,$id,$username,$email))
		{
			if(isset($_SESSION['admin'])){

			header("location:usersTable.php?msg='successfully updated'");
		}
		else
		{
			header("location:user.php?msg='successfully updated'");	
		}
		}
		else
		{
			header("location:editUser.php?msg='missing values'");	
		}


	}
	//print_r($a);
	
	//exit;
	?>
<div class="page login-page">
	<?php 
	if(isset($a)){
	foreach ($a as $key => $value) {
?>
      <div class="container">
        <div class="form-outer text-center d-flex align-items-center">
          <div class="form-inner">
            <div class="logo text-uppercase"><span>Dash</span><strong class="text-primary">Express</strong></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
            <form class="text-left form-validate" id='register_form' action="#" method="post">
              <div class="form-group-material">
              <label for="register-username" class="label-material">Username</label>

                <input id="register-username" type="text" name="username"  value="<?php echo $value['username'];?>" required data-msg="Please enter your username" class="input-material">
              </div>
              <div class="form-group-material">
                <label for="register-email" class="label-material">Email Address</label>

                <input id="register-email" type="email" name="email" value="<?php echo $value['email'];?>"  required data-msg="Please enter a valid email address" class="input-material">
              </div>
             
             
              <div class="form-group text-center">
                <input id="register" type="submit" name="UPDATE" value="UPDATE"  class="btn btn-primary">
              </div>
            </form>
          </div>
          <div class="copyrights text-center">
            <?php }
            } ?>
          </div>
        </div>
      </div>
    </div>