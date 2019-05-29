<?php
include 'dbconnect.php';

session_start();
$a=$_SESSION['r_id'];
$fid=$_GET['uid'];
$sql=mysqli_query($con,"UPDATE `tbl_feedback` SET `f_status`=0 WHERE `r_id`='$a' and `f_id`='$fid'");
header("Location:resort_system_feedback_view.php");
?>