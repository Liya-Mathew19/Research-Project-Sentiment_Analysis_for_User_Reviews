<?php
include'dbconnect.php';
session_start();
$a=$_SESSION['r_id'];
if(isset($_POST["submit"]))
{
	

	$f=$_POST['message'];
	$sql=mysqli_query($con,"SELECT * FROM `tbl_registration` WHERE `r_id`='$a'");
	
	
	$d=date("Y-m-d");
	$sql="INSERT INTO `tbl_feedback`(`r_id`,`f_date`,`f_msg`,`f_status`) VALUES ('$a','$d','$f','2')";

	$res=mysqli_query($con,$sql);
	header("Location:resort_system_feedback_view.php");
}
?>