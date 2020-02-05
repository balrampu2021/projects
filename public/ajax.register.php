<?php
session_start();
include_once('../inc/db.php');
include_once('../inc/function.php');
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




if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['department']) && !empty($ipaddfinal)){
		if(create_user($conn, $_POST['username'], $_POST['email'], $_POST['password'], $_POST['department'], $ipaddfinal)){
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
