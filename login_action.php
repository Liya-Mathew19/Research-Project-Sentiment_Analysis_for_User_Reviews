<?php
include "dbconnect.php";

 	$uname=$_POST['username'];
 	$pwd=$_POST['pass'];
	$p=md5($pwd);
	$a=mysqli_query($con,"select * from `tbl_login` where `uname`='$uname' and `pwd`='$p' or `pwd`='$pwd'");
	$row=mysqli_fetch_array($a);
	if(!empty($row))
	{
		if($row['role_id']==1)
		{
			session_start();
			$_SESSION['username']=$row['uname'];
			//$_SESSION['password']=$row['Password'];
			$_SESSION['r_id']=$row['r_id'];
			header("Location:customer_home.php?uid=$row[r_id]");
		}
		else if($row['role_id']==2)
		{
			session_start();
			$_SESSION['username']=$row['uname'];
			//$_SESSION['password']=$row['Password'];
			$_SESSION['r_id']=$row['r_id'];
			header("Location:resort_home.php?uid=$row[r_id]");
			
		}	
		
		else 
		{	
			session_start();
			$_SESSION['username']=$row['uname'];
			//$_SESSION['password']=$row['Password'];
			$_SESSION['r_id']=$row['r_id'];
			if($uname==$_SESSION['username'])
			{
			header("Location:admin_home.php");
		}
		else
			{
				header("Location:login.php?error=Invalid Username/Password!!</center>"); 
	
			}
		}
	}
	else
		header("Location:login.php?error=Invalid Username/Password!!</center>"); 
	

		
?>				

