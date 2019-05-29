<?php

include 'dbconnect.php';
session_start();
$kid=$_SESSION['r_id'];
echo $kid;
 $res=mysqli_query($con,"select * from `tbl_registration` where `r_id`='$kid'");
 $fetch=mysqli_fetch_array($res);
  $res1=mysqli_query($con,"select * from `tbl_addresort` where `r_id`='$kid'");
 $fetch1=mysqli_fetch_array($res1);
 $hid= $fetch1['h_id'];
 $_SESSION['h_id']=$hid;
 echo $hid;
 
if(!isset($_SESSION['r_id'])){
	header("Location:login.php");
}

	//$type=$_POST['type'];
    $name=$_POST['nme'];
	//echo $name;
	$lname=$_POST['lnme'];
	$add=$_POST['add'];
	$dob=$_POST['dob'];
	$gender=$_POST['gender'];        
	$phn=$_POST['phn'];
    $email=$_POST['email'];
	$pwd=$_POST['pwd'];
	$pwd=md5($pwd);
	$confirm=$_POST['confirm'];
	$rname=$_POST['rname'];
	$dtype=$_POST['dtype'];
	$img=$_FILES["img"]["name"];
	$sel1="select * from `tbl_registration` where `r_email`='$email'";
	$qry1=mysqli_query($con,$sel1);
	$num=mysqli_num_rows($qry1);
	if($img==NULL)
	{
		$varsql=mysqli_query($con,"UPDATE `tbl_registration` SET `r_id`='$kid',`r_name`='$name',`r_lname`='$lname',`r_address`='$add',
	`r_dob`='$dob',`r_phone`='$phn',`r_email`='$email',`r_status`='2' WHERE `r_id`='$kid'");
	}
	else
	{
		move_uploaded_file($_FILES["img"]["tmp_name"],"Uploads/".$_FILES["img"]["name"]);
	$varsql=mysqli_query($con,"UPDATE `tbl_registration` SET `r_id`='$kid',`r_name`='$name',`r_lname`='$lname',`r_address`='$add',
	`r_dob`='$dob',`r_phone`='$phn',`r_email`='$email',`r_image`='$img',`r_status`='2' WHERE `r_id`='$kid'");
	}

			  
	//print_r($varsql);
		header("Location:resort_user_profile.php?registered=true");
	
	
	  
?>