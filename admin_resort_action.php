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
	$sel1="select * from `tbl_addresort` where h_email='$email'";
	$qry1=mysqli_query($con,$sel1);
	$num=mysqli_num_rows($qry1);
	 if($num>0)
	  {
	 header("Location: admin_add_resort.php?error=true");
	 exit;
	  }
	  else
	  {
		   move_uploaded_file($_FILES["img"]["tmp_name"],"Uploads/".$_FILES["img"]["name"]);
	$varsql="INSERT INTO `tbl_addresort`(`h_name`, `h_address`, `h_star`, `d_id`, `s_id`, `h_pin`, `h_location`, `h_des`,`h_open`,`h_close`, `h_phone`, `h_url`, `h_email`, `h_image`, `h_status`) 
	VALUES ('$name','$add','$class','$dis','$state','$pin','$loc','$rdes','$open','$close','$phn','$url','$email','$image',1)";
	$varresult=mysqli_query($con,$varsql);
	$z=mysqli_insert_id($con);
	$varsql1="INSERT INTO `tbl_location`(`h_id`, `loc_nme`, `loc_status`) 
	VALUES ('$z','$loc',1)";
	$varresult1=mysqli_query($con,$varsql1);
	header("Location:admin_add_resort.php?registered=true");
	  }
?>
 