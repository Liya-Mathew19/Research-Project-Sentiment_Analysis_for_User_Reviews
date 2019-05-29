<?php
	include 'dbconnect.php';
	session_start();
	$kid=$_SESSION['r_id'];
	//echo $kid;
	$rmid=$_GET['uid'];
	//echo $rmid;

	$res=mysqli_query($con,"SELECT * FROM `tbl_addresort` where h_status='1' and `r_id`='$kid' ");
	$row=mysqli_fetch_array($res);
	$hid=$row['h_id']; 
	$cat=$_POST['category'];
	$bed=$_POST['bedtype'];
	$num=$_POST['number'];
	$pack=$_POST['package'];
	$img=$_FILES["img"]["name"];
	 if($img==NULL)
	{
	
	$sql=mysqli_query($con,"UPDATE `tbl_rooms` SET `rm_id`='$rmid',`rm_cat`='$cat',`rm_bed`='$bed',`rm_number`='$num',`rm_package`='$pack' WHERE `rm_id`='$rmid'");
}
else
	{
			move_uploaded_file($_FILES['img']['tmp_name'],"Uploads/".$_FILES['img']['name']);
			$sql=mysqli_query($con,"UPDATE `tbl_rooms` SET `rm_id`='$rmid',`rm_cat`='$cat',`rm_bed`='$bed',`rm_number`='$num',`rm_package`='$pack',`rm_image`='$img' WHERE `rm_id`='$rmid'");

		}
			header("Location: admin_add_rooms.php");
	
	?>
	