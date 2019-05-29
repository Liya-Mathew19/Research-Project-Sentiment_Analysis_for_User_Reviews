<?php
include 'dbconnect.php';
$kid=$_GET['uid'];
$res1=mysqli_query($con,"select * from tbl_addresort where h_id='$kid'");
$res=mysqli_query($con,"UPDATE `tbl_addresort` SET `h_status`='1' WHERE h_id='$kid'");
header("location:admin_approve_request.php");
?>