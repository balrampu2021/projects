<?php
session_start();
include_once('inc/db.php');
include_once('inc/function.php');
include_once('public/header.php');

 date_default_timezone_set("Asia/kolkata");
 $_SESSION['logout_time']=date("h:i:sa");
 $login_time=$_SESSION['login_time'];$logout_time=$_SESSION['logout_time'] ;$user_id=$_SESSION['id'];
 if($a=time_user($conn,$login_time,$logout_time,$user_id)){
	echo"succesful";
 }

    session_destroy();
	
	header("location:login.php");
	?>
	
	
	

