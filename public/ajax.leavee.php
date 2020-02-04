<?php
session_start();

include_once('../inc/db.php');
include_once('../inc/function.php');

if(!empty($_SESSION['user']) && !empty($_SESSION['email']) && !empty($_SESSION['department']) && !empty($_POST['leave_in']) && !empty($_POST['leave_out']) && !empty($_POST['reason']) &&  !empty($_SESSION['id'])){
	
		if(employee_leave($conn,$_SESSION['user'], $_SESSION['email'], $_SESSION['department'],  $_POST['leave_in'], $_POST['leave_out'], $_POST['reason'], $_SESSION['id'])){
			    
				$resp['error'] = false;
				$resp['success'] = "Your leave has been submitted";
				
				
}}
	else{
		$resp['error'] = true;
		$resp['error'] = "enter your field";
}
echo json_encode($resp);