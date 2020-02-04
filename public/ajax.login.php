
<?php 
   
 	session_start();

  date_default_timezone_set("Asia/kolkata");
// include_once('../inc/db.php');
// include_once('../inc/function.php');

// //print_r($_POST);
//  if(!empty($_POST['loginUsername']) && !empty($_POST['loginPassword'])){

	

// 		if(login_user($conn, $_POST['username'], $_POST['password']) ){
// 			$resp['error'] = false;
// 			$resp['success'] = "login successfully";
//  		   }else{
//  				$resp['error'] = true;
//  				$resp['error'] ="User Not exist";
//  			}
//  	}else{
//  		$resp['error'] = true;
//  		$resp['error'] = "All fields are required";
//  	}
//  echo json_encode($resp);


	

include_once('../inc/db.php');
include_once('../inc/function.php');


if(!empty($_POST['loginUsername']) && !empty($_POST['loginPassword'])){
		
		if($a=login_user($conn, $_POST['loginUsername'], $_POST['loginPassword']) ){
			
				
				if($a['role_id']==1){

					$resp['user'] = 'admin';

				}
				else{
					$resp['user']= 'user';
				}
				
				$_SESSION['user']=$_POST['loginUsername'];
				$_SESSION['password']=$_POST['loginPassword'];
				$_SESSION['id']=$a['id'];
				$_SESSION['login_time']=date("h:i:sa");
				$_SESSION['department']=$a['department'];
				$_SESSION['email']=$a['email'];
				
				
				$resp['error'] = false;
				$resp['msg'] = "login successfully";
				
				
			
				
			}else{
				//return $resp['error'];
				
				if(isset($_SESSION))
				{
					unset($_SESSION['user']);
				    unset($_SESSION['password']);
				}
				$resp['error'] = true;
				$resp['msg'] ="User Not exist";
				$resp['user']="";

				
			}
		
	}else{
		$resp['error'] = true;
		$resp['msg'] = "All fields are required";
	}
echo json_encode($resp);
if(isset($_SESSION))
	{
		//	print_r($_SESSION);
	}
	
	