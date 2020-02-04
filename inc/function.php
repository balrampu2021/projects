<?php

	include_once('db.php');
	   


	function create_user($conn, $user, $email, $pass ,$department){
		$stmt = $conn->prepare("INSERT INTO tbl_user(username, password, email, department) 
			VALUES(:username, :password, :email,:department)");
		$stmt->execute([
			':username' =>$user,
			':email' =>$email,
			':password' =>md5($pass),
			':department' =>$department,
            			
		]);
		if($stmt->rowCount() > 0){
			return true;
		}else{
			return false;
		}
		  
	}

	function check_user($conn,$username)
{
	$stmt = $conn->prepare("select username from tbl_user where username= :username LIMIT 1");
	$stmt->execute([ ':username' => $username ]);
	$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
	if( $stmt->rowCount() > 0)
	{
		return true;
	} 
	return false;
}
function login_user($conn,$user,$pass){
	$stmt=$conn->prepare("select * from tbl_user where username=:username and password=:password");
	$stmt->execute([
		':username'=> $user,
		':password'=> md5($pass),
		
	]);
	
	$res= $stmt->fetch(PDO::FETCH_ASSOC);
	//print_r($res);
	//echo $res['role_id'];
	
	//count($res);
	return $res;	
	
}
// function checkAdmin($conn,$user)
// {
// 	$num=1;
// 	$stmt=$conn->prepare("select * from tbl_user where username=:username and role_id=:num");
// 	$stmt->execute([
// 		':username'=> $user,
// 		':num'=> $num,
		
// 	]);
// 	$res= $stmt->fetch(PDO::FETCH_ASSOC);
// 	if( $stmt->rowCount() > 0)
// 	{
// 		return true;
// 	} 
// 	else
// 		false;
	
	
// }

function show_users($conn,$role_id){
	$stmt=$conn->prepare("select * from tbl_user where role_id=:role_id");
	$stmt->execute([
		':role_id'=>$role_id,
		
	]);
		$res=$stmt->fetchAll(PDO::FETCH_ASSOC);
		//echo '<pre>';
		//print_r($res);die();
		return $res;
		
		

}
function select_users($conn,$id){
	$stmt=$conn->prepare("select * from tbl_user where id=:id");
	$stmt->execute([
		':id'=>$id,
		
	]);
		$res=$stmt->fetchAll(PDO::FETCH_ASSOC);
		//echo '<pre>';
		//print_r($res);die();
		return $res;
		
		

}
function delete_user($conn,$id){

	$stmt=$conn->prepare("DELETE FROM `tbl_user` WHERE id=:id");
	$stmt->execute([
	':id'=>$id,

	]);
	
	


	
	
}
function update_user($conn,$id,$username,$email,$department,$image){
	$stmt=$conn->prepare("update `tbl_user` set image=:image ,username=:username ,email=:email ,department=:department where id=:id");
	$stmt->execute([
	':id'=>$id,
	':image'=>$image,
	':username'=>$username,
	':department'=>$department,
	':email'=>$email,
	]);
}
function time_user($conn,$login_time,$logout_time,$user_id){
	$stmt=$conn->prepare("INSERT INTO table_login(check_in,check_out,user_id) 
			VALUES(:check_in, :check_out, :user_id)");
			$stmt->execute([
			':check_in'=>$login_time,
			':check_out'=>$logout_time,
			':user_id'=>$user_id,
			]);
	
}
function show_time($conn){
	$stmt=$conn->query("select * from table_login ");
	$stmt->execute();
		$res=$stmt->fetchAll(PDO::FETCH_ASSOC);
		//echo '<pre>';
		//print_r($res);die();
		return $res;
		
	
}
function user_image($conn,$image,$id,$username,$email,$department){
	$stmt=$conn->prepare("update tbl_user set image=:image ,username=:username ,email=:email ,department=:department  where id=:id");
	$stmt->execute([
	':image'=>$image,
	':id'=>$id,
	':username'=>$username,
	':email'=>$email,
	':department'=>$department,
	
	]);
	return true;
	
}
function employee_leave($conn,$username,$email,$department,$leave_in,$leave_out,$reason,$user_id){
	$stmt = $conn->prepare("INSERT INTO employ_table(username, email,department,leave_in, leave_out, reason, approve, user_id) 
			VALUES(:username, :email, :department, :leave_in, :leave_out, :reason, :approve, :user_id)");
		$stmt->execute([
			':username'=>$username,
			':email'=>$email,
			':department'=>$department,
			':leave_in' =>$leave_in,
			':leave_out' =>$leave_out,
			':reason' =>$reason,
			':approve' =>'pending',
			':user_id'=>$user_id,
			
			
            			
		]);

if($stmt->rowCount() > 0){
			return true;
		}else{
			return false;
		}
}

function show_leave($conn){
	$stmt=$conn->prepare("select * from employ_table where approve=:approve");
	$stmt->execute([
	':approve'=>'pending',
	]);
	$res=$stmt->fetchAll(PDO::FETCH_ASSOC);
	return $res;
	
}
function leave_approval($conn,$id,$approve){
	$stmt=$conn->prepare("UPDATE employ_table SET approve = :approve WHERE id = :id");
	$stmt->execute([
	':approve'=>$approve,
	':id'=>$id,
	]);
	return true;
	
}
function leave_status($conn,$id,$approval){
	$stmt=$conn->prepare("select * from employ_table where approve=:approve and id = :id");
	$stmt->execute([
	':approve'=>$approve,
	':id'=>$id,
	]);
	$res=$stmt->fetchAll(PDO::FETCH_ASSOC);
	return $res;
	
}
function select_leave($conn,$id){
	$stmt=$conn->prepare("select * from employ_table where id = :id");
	$stmt->execute([
	':id'=>$id,
	]);
	$res=$stmt->fetchAll(PDO::FETCH_ASSOC);
	return $res;
}
function update_time($conn,$time,$id){
	$stmt=$conn->prepare("UPDATE employ_table SET time = :time WHERE user_id = :user_id");
	$stmt->execute([
	':time'=>$time,
	':user_id'=>$id,
	
]);

			return true;
		
}
function time_select($conn,$id){

	$stmt=$conn->prepare("SELECT * FROM employ_table Where user_id=:user_id");
	
	$stmt->execute([':user_id' => $id]);
	$res=$stmt->fetch(PDO::FETCH_ASSOC);
	return $res['time'];
}

function select_time($conn){
	$stmt=$conn->prepare("SELECT * FROM employ_table");
	$stmt->execute();
	
	$res=$stmt->fetchAll(PDO::FETCH_ASSOC);
	
	return $res;
}













