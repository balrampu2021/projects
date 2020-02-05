<?php 

session_start();

include_once('../inc/db.php');
include_once('../inc/function.php');
if(isset($_SESSION['id']))
{
$employee_id=$_SESSION['id'];
}


if(!empty($_POST['leave_in']) && !empty($_POST['leave_out']) && !empty($_POST['reason'])){

	$name=$_POST['name'];
	$email=$_POST['email'];
	$leave_start=$_POST['leave_in'];
	$leave_end=$_POST['leave_out'];
	$reason=$_POST['reason'];


// submit_leave($conn,$name,$email,$leave_start,$leave_end,$reason,$employee_id)

	
		if(submit_leave($conn,$name,$email,$leave_start,$leave_end,$reason,$employee_id)){
			    
				$resp['error'] = false;
				$resp['success'] = "Your leave has been submitted";
}}
	else{
		$resp['error'] = true;

		$resp['error'] = "enter your field";
}
echo json_encode($resp);