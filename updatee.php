<?php
include_once('inc/db.php');
  include_once('inc/function.php');
  include_once('public/header.php');
if(isset($_GET['edit'])){
	//print_r($_GET);die;
$b=$_GET['edit'];
$a=select_users($conn,$b);


}
  
 
 //print_r($a);die;
 if(isset($_POST['submit']))
 {


 }
 if(isset($_POST['email'])||isset($_POST['username'])||isset($_POST['department'])||isset($_FILES['image'])){
	 $email=$_POST['email'];
	 $username=$_POST['username'];
	 $department=$_POST['department'];
	 $image=$_FILES['image']['name'];
	    $tempname=$_FILES['image']['tmp_name'];
	    $path="assets/img/".$image;
	     move_uploaded_file($tempname,$path);
		 
 update_user($conn,$_GET['edit'],$username,$email,$department,$image);
	
 
 }
 


 

if(isset($a)){
	
foreach($a as $key=>$value){
	//print_r($value);die;
  

?>

<div class="page login-page">
      <div class="container">
        <div class="form-outer text-center d-flex align-items-center">
          <div class="form-inner">
            <div class="logo text-uppercase"><span>Employee</span><strong class="text-primary">Express</strong></div>
            <p>Employees Update there profiles</p>
            <form class="text-left form-validate"  action="" id='register_form' action="" method="post" enctype="multipart/form-data">
			<img src="<?php echo BASE_URL; ?>assets/img/<?php echo $value['image'];?>" height="200" width="200" alt="person" class="img-fluid rounded-circle"></br></br>
              <div class="form-group-material">
                <input id="register-username" type="text" name="username" value="<?php echo $value['username'];?>"  class="input-material">
                
              </div>
              <div class="form-group-material">
                <input id="register-email" type="email" name="email" value="<?php echo $value['email'];?>"  class="input-material">
                <label for="register-email" class="label-material">    </label>
              </div>
			  <div class="form-group-material">
                <input id="register-email" type="text" name="department" value="<?php echo $value['department'];?>"  class="input-material">
                <label for="register-email" class="label-material">    </label>
              </div>
              
             Image:<input type="file" name="image" ></br></br>
              <div class="form-group text-center">
              <input id="" type="submit" name="submit" value="update" class="btn btn-primary">
              </div>
            </form>
          </div>
          <div class="copyrights text-center">
            <p>Design by <a href="https://bootstrapious.com" class="external">Bootstrapious</a></p>
            <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
          </div>
        </div>
      </div>
    </div>

<?php
}

}
?>



       <?php include_once('public/footer.php');?>

