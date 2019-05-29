<?php
		
	include 'dbconnect.php';
	session_start();
	//$kid=$_SESSION['r_id'];
	
	$hid=$_POST['rname'];
	//echo $hid;
	 $category=$_POST['category'];
	//echo $cat;
	
	 $bed=$_POST['bedtype'];
	$num=$_POST['number'];
	$pack=$_POST['package'];
	$img=$_FILES["img"]["name"];
	//echo $img;
	$check=mysqli_query($con,"SELECT * FROM `tbl_rooms` where rm_cat='".$category."'	AND `rm_bed`='".$bed."' AND h_id='".$hid."'	");
	





	//exit;
	if(!mysqli_num_rows($check))
	{ 	

		 move_uploaded_file($_FILES["img"]["tmp_name"],"Uploads/".$_FILES["img"]["name"]);
		$sql=mysqli_query($con,"INSERT INTO `tbl_rooms`( `h_id`,`rm_cat`, `rm_bed`, `rm_number`, `rm_package`,`rm_image`,`rm_status`)
			VALUES ('$hid','$category','$bed','$num','$pack','$img',1)") or die(mysqli_error($con));
			
			header("Location:resort_add_rooms.php");
			
	}
	else
	{
		header("Location: resort_add_rooms.php?error=You Have Already Entered..");
		 
	}
	
	
?>