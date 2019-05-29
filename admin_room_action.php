<?php
	include 'dbconnect.php';
    $name=$_POST['rname'];
	$cat=$_POST['category'];
	$bed=$_POST['bedtype'];
	$num=$_POST['number'];
	$pack=$_POST['package'];
	$img=$_FILES["img"]["name"];
	$res=mysqli_query($con,"SELECT * FROM `tbl_addresort` where h_status='1'");
	$row=mysqli_fetch_array($res);
	$res1=mysqli_query($con,"SELECT * FROM `tbl_rooms` rm_status='1'");
	$row1=mysqli_fetch_array($res1);
	
	/*echo $row1['rm_cat']." ";
	echo $cat." ";
	echo "\n";
	echo $row1['rm_bed']." ";
	echo $bed." ";*/
	$check=mysqli_query($con,"SELECT * FROM `tbl_rooms` where `h_id`='".$name."' AND `rm_cat`='".$cat."'	AND `rm_bed`='".$bed."'");
	
	if(!mysqli_num_rows($check))
	{
		move_uploaded_file($_FILES["img"]["tmp_name"],"Uploads/".$_FILES["img"]["name"]);
		$varsql="INSERT INTO `tbl_rooms`(`h_id`, `rm_cat`, `rm_bed`, `rm_number`, `rm_package`,`rm_image`, `rm_status`) 
	VALUES ('$name','$cat','$bed','$num','$pack','$img',1)";
	$varresult=mysqli_query($con,$varsql);

	header("Location:admin_add_rooms.php");
}
			else
	{
		 header("Location: admin_add_rooms.php?error=You Have Already Entered..");
		 
	}
	/*
	if($name==$row['h_name'] && $cat==$row1['rm_cat'] && $bed==$row1['rm_bed'])
	{
		 header("Location: admin_room_add.php?error=You Have Already Entered..");
		 //echo "equl";
	}
	else  
	{
		move_uploaded_file($_FILES["img"]["tmp_name"],"Uploads/".$_FILES["img"]["name"]);
	$varsql="INSERT INTO `tbl_rooms`(`h_id`, `rm_cat`, `rm_bed`, `rm_number`, `rm_package`,`rm_image`, `rm_status`) 
	VALUES ('$name','$cat','$bed','$num','$pack','$img',1)";
	$varresult=mysqli_query($con,$varsql);
}
	header("Location:admin_add_rooms.php");*/
	  
?>
 