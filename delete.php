<?php
include_once('inc/db.php');
    include_once('inc/function.php');
	include_once('public/header.php');

if(isset($_GET['id']))
$id=$_GET['id'];


delete_user($conn,$id);
?>