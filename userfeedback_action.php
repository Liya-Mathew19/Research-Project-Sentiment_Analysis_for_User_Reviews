<?php
include'dbconnect.php';
$b=$_GET['uid1'];
echo $b;
$sql=mysqli_query($con,"SELECT * FROM `tbl_addresort` WHERE `h_id`='$b'");
//$row=mysqli_fetch_array($sql);

session_start();
$a=$_SESSION['r_id'];
	//$f=$_POST['sent_data'];
	$sql=mysqli_query($con,"SELECT * FROM `tbl_registration` WHERE `r_id`='$a'");
	
	
	/*$d=date("Y-m-d");
	$sql="INSERT INTO `tbl_userfeedback`(`r_id`,`h_id`,`uf_msg`,`uf_date`,`uf_status`) VALUES ('$a','$b','$f','$d','1')";

	$res=mysqli_query($con,$sql);*/
	header("Location:resort_view.php?uid=$b");

?>