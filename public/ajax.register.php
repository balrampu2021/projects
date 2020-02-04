<?php
include_once('../inc/db.php');
include_once('../inc/function.php');

if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['department'])){
		if(create_user($conn, $_POST['username'], $_POST['email'], $_POST['password'], $_POST['department'])){
				$resp['error'] = false;
				$resp['success'] = "Your account has been created";
			}else{
				$resp['error'] = true;
				$resp['error'] ="Username already exist";
			}
	}else{
		$resp['error'] = true;
		$resp['error'] = "All fields are required";
	}
echo json_encode($resp);
