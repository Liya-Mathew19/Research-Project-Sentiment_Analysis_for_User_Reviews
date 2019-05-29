<?php
	include 'dbconnect.php';
	session_start();
	$kid=$_SESSION['r_id'];
	
	
	 $res2=mysqli_query($con,"select * from `tbl_resort` where `r_id`='$kid'");
 $fetch2=mysqli_fetch_array($res2);
 $reid= $fetch2['re_id'];
 $name=$fetch2['re_name'];
	
   // $name=$_POST['rname'];
	echo $name;
	$add=$_POST['radd'];
	//echo $add;
	$class=$_POST['class'];
	//echo $class;
	$dis=$_POST['dis_name'];
	//echo $dis;
	$state=$_POST['state'];
	//echo $state;
	$pin=$_POST['pin'];
	//echo $pin;
	$loc=$_POST['loc']; 
echo $loc;	
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
	 header("Location: resort_add_resort.php?error=true");
	 exit;
	  }
	  else
	  {
		  move_uploaded_file($_FILES["img"]["tmp_name"],"Uploads/".$_FILES["img"]["name"]);
	$varsql="INSERT INTO `tbl_addresort`(`r_id`,`h_name`, `h_address`, `h_star`, `d_id`, `s_id`, `h_pin`, `h_location`, `h_des`,`h_open`,`h_close`, `h_phone`, `h_url`, `h_email`, `h_image`, `h_status`) 
	VALUES ('$kid','$name','$add','$class','$dis','$state','$pin','$loc','$rdes','$open','$close','$phn','$url','$email','$image',2)";
	$varresult=mysqli_query($con,$varsql);
	//print_r($varsql);
	header("Location:resort_resort_profile.php?registered=true");
	  }
?>
 