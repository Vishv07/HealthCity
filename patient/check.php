<?php
	include "connection.php";	
	session_start();
	$log = $_POST['email'];
	$passx = $_POST['password'];
	$pass=md5($passx);
	$qry = "SELECT * FROM user_master WHERE (email='$log' AND password='$pass') OR (phone_no='$log' AND password='$pass')";
	$result = mysqli_query($con,$qry);
	$value = mysqli_fetch_array($result);
	$count = mysqli_num_rows($result);
	$id=$value['login_id'];	
	if($count==1 && $value['password']==$pass)
	{
		if($value['active']==1 && $value['role_id']==2 )
		{
			$_SESSION['log'] = $value['email'];
			$_SESSION['utype'] = $value['role_id'];
			$status = $value['status'];
			
				header("location:view_record.php");
			

		}
		else
		{
			header("location:sign_up.php?flag=1");
		}
	}
	else
	{
		header("location:sign_up.php?flag=1");
	}				
?>