<?php
	include 'dbconnect.php';
    $name=$_POST['rname'];
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
	$sel1="select * from `tbl_registration` where h_email='$email'";
	$qry1=mysqli_query($con,$sel1);
	$num=mysqli_num_rows($qry1);
	 if($num>0)
	  {
	 echo ("<script language='javascript'>window.alert('Email already exists!!Try with another..')
		   window.location.href='admin_add_resort.php';</script>");
	  }
	  else
	  {
		   move_uploaded_file($_FILES["img"]["tmp_name"],"Uploads/".$_FILES["img"]["name"]);
	$varsql="INSERT INTO `tbl_addresort`(`h_name`, `h_address`, `h_star`, `d_id`, `s_id`, `h_pin`, `h_location`, `h_des`,`h_open`,`h_close`, `h_phone`, `h_url`, `h_email`, `h_image`, `h_status`) 
	VALUES ('$name','$add','$class','$dis','$state','$pin','$loc','$rdes','$open','$close','$phn','$url','$email','$image',2)";
	$varresult=mysqli_query($con,$varsql);
	header("Location:resort_add.php");
	  }
?>
 