<?php 
	include_once('inc/db.php');
    include_once('inc/function.php');
	include_once('public/header.php');

	
	$id=$_GET['id'];
	$name=$_GET['name'];
	delete_user($conn,$id);
	header('location:usersTable.php?successfullyDeleted');
?>
	
	