<?php
	include 'dbconnect.php';
	$type=$_POST['type'];
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
	 if($num>0)
	  {
	 header("Location: register.php?error=Email already exists!!Try with another..");
	 exit;
	  }
	  else
	  {
		  if($type==1)
		  {
			  move_uploaded_file($_FILES["img"]["tmp_name"],"Uploads/".$_FILES["img"]["name"]);
	$varsql="INSERT INTO `tbl_registration`(`r_name`, `r_lname`,`r_address`, `r_dob`, `r_gender`, `r_phone`, `r_email`,`r_image`, `r_status`)
	VALUES('$name','$lname','$add','$dob','$gender','$phn','$email','$img','1')";
	print_r($varsql);
	$varresult=mysqli_query($con,$varsql);
	$z=mysqli_insert_id($con);
	$varsql1=mysqli_query($con,"INSERT INTO `tbl_login`(`uname`, `pwd`, `role_id`,`r_id`, `l_status`) 
	VALUES ('$email','$pwd','$type','$z','1')");
	header("Location:login.php?registered=true");
		  }
		  else if($type==2)
		  {
			  move_uploaded_file($_FILES["img"]["tmp_name"],"Uploads/".$_FILES["img"]["name"]);
	$varsql2="INSERT INTO `tbl_registration`(`r_name`, `r_lname`,`r_address`, `r_dob`, `r_gender`, `r_phone`, `r_email`,`r_image`, `r_status`)
	VALUES('$name','$lname','$add','$dob','$gender','$phn','$email','$img','2')";
	$varresult1=mysqli_query($con,$varsql2);
	$z=mysqli_insert_id($con);
	$varsql3=mysqli_query($con,"INSERT INTO `tbl_login`(`uname`, `pwd`, `role_id`,`r_id`, `l_status`) 
	VALUES ('$email','$pwd','$type','$z','2')");
	$varresult2=mysqli_query($con,$varsql3);
	$y=mysqli_insert_id($con);
	/*$varsql4="INSERT INTO `tbl_addresort`(`r_id`,`h_name`)
	VALUES('$z','$rname')";
	mysqli_query($con,$varsql4);*/
	$varsql5="INSERT INTO `tbl_resort`(`re_name`, `re_designation`, `r_id`, `l_id`, `re_status`)
	VALUES ('$rname','$dtype','$z','$y','1')";
	mysqli_query($con,$varsql5);
	
	
	
	
	
	
	header("Location:login.php?registered=true");
			  
		  }
	  }
?>