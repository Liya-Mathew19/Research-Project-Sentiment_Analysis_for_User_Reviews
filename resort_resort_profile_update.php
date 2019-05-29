<?php

include 'dbconnect.php';
session_start();
$kid=$_SESSION['r_id'];
echo $kid;
$h=$_GET['uid'];
 $res=mysqli_query($con,"select * from `tbl_registration` where `r_id`='$kid'");
 $fetch=mysqli_fetch_array($res);
  $res1=mysqli_query($con,"select * from `tbl_addresort` where `r_id`='$kid' and `h_id`='$h'");
 $fetch1=mysqli_fetch_array($res1);
 $hid= $fetch1['h_id'];
 $_SESSION['h_id']=$hid;
 echo $hid;
 $res2=mysqli_query($con,"select * from `tbl_resort` where `r_id`='$kid'");
 $fetch2=mysqli_fetch_array($res2);
 $reid= $fetch2['re_id'];
 $name=$fetch2['re_name'];
 
if(!isset($_SESSION['r_id'])){
	header("Location:login.php");
}


	
	//$b=$_SESSION['r_id'];
	//echo $b;
   // $name=$_POST['rname'];
	$add=$_POST['radd'];
	$class=$_POST['class'];
	$dis=$_POST['dis_name'];
	$state=$_POST['state'];
	$pin=$_POST['pin'];
	$loc=$_POST['loc'];   
$rdes=$_POST['rdes'];
$open=$_POST['open'];
$close=$_POST['close'];	
	$phn=$_POST['phone'];
    $url=$_POST['url'];
	$email=$_POST['email'];
	$image=$_FILES["img"]["name"];
	
	  if($image==NULL)
	  {
	  	$varsql=mysqli_query($con,"UPDATE `tbl_addresort` SET `h_id`='$hid',`r_id`='$kid',`h_name`='$name',`h_address`='$add',`h_star`='$class',`d_id`='$dis',`s_id`='$state',`h_pin`='$pin',
	`h_location`='$loc',`h_des`='$rdes',`h_open`='$open',`h_close`='$close',
	`h_phone`='$phn',`h_url`='$url',`h_email`='$email' WHERE `h_id`='$hid' and `r_id`='$kid'");
	  }
	  else
	  {
	   move_uploaded_file($_FILES["img"]["tmp_name"],"Uploads/".$_FILES["img"]["name"]);
	$varsql=mysqli_query($con,"UPDATE `tbl_addresort` SET `h_id`='$hid',`r_id`='$kid',`h_name`='$name',`h_address`='$add',`h_star`='$class',`d_id`='$dis',`s_id`='$state',`h_pin`='$pin',
	`h_location`='$loc',`h_des`='$rdes',`h_open`='$open',`h_close`='$close',
	`h_phone`='$phn',`h_url`='$url',`h_email`='$email',`h_image`='$image' WHERE `h_id`='$hid' and `r_id`='$kid'");
 //print_r($varsql);	
	  }
	  
		  
	//$varresult=mysqli_query($con,$varsql);
	header("Location:resort_resort_profile.php?registered=true");
	  
?>