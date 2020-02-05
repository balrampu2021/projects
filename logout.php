<?php
session_start();
include_once('inc/db.php');
include_once('inc/function.php');
include_once('public/header.php');



    session_destroy();
	
	header("location:login.php");
	?>
	
	
	

