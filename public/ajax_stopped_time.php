
<?php
session_start();

include_once('../inc/db.php');
include_once('../inc/function.php');




if(!empty($_POST['stop_time'])){
	
	//$time=$_POST['stop_time'];
	
	$time    = json_encode($_POST['stop_time']);
	$_SESSION['time']=$time;
	
	//print_r($time); 
	
	
		$id = $_SESSION['id'];
		 $t=explode(",",$time);
		
	
	
 $b=time_select($conn,$id);

   $d=explode(",",$b);
		

  
   

 
	

	$c=update_time($conn,$time,$id);
	
	 

	
	
		
	

}
?>
