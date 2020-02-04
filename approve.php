<?php
session_start();
if(isset($_GET)){
$id=$_GET['id'];

$approve=$_GET['status'];

}
include_once('inc/db.php');
include_once('inc/function.php');
include_once('public/header.php');
if(isset($id) && isset($approve)){
if(leave_approval($conn,$id,$approve)){
	header('location:leave_status.php?msg=succeffuly approved');
	
}}





	

?>
	
  
  


	