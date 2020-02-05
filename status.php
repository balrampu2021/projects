<?php 

			include_once('inc/db.php');
            include_once('inc/function.php');

		if(isset($_GET))
		{
			$id=$_GET['id'];
			$status=$_GET['status'];

		}
		if(isset($id) && isset($status))
		{
			if(leave_status($conn,$status,$id))
			{
				header('location:leaves.php?msg=successfullyUpdated');
			}			
		}
		
	
		//leave_status($conn,$status,$id)
		