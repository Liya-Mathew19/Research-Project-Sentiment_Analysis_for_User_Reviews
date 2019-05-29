<?php
include 'dbconnect.php';
session_start();
$a=$_SESSION['r_id'];
echo $a;
$r=$_POST['val'];
echo $r;
$hid=$_POST['val1'];
echo $hid;

$sel="select * from tbl_registration where `r_id`='$a'";
$qry=mysqli_query($con,$sel);
$ans=mysqli_fetch_array($qry);
$x=$ans['r_id'];
echo $x;
$i=$_POST['cat'];
echo $i;
$sel1="select rm_id from tbl_rooms Where rm_id='$r'";
$res=mysqli_query($con,$sel1);
$row=mysqli_fetch_array($res);
$c=$row['rm_id'];
echo $c;
$cndate=$_POST['cn'];
$codate=$_POST['co'];
$no=$_POST['txt_qty'];
$total=$_POST['txt_total'];
echo $total;
$sql=mysqli_query($con,"INSERT INTO `tbl_Booking`(`r_id`, `rm_id`,`h_id`,`b_cn`, `b_co`,`b_no`, `b_total`, `b_status`) 
VALUES ('$x','$r','$hid','$cndate','$codate','$no','$total','1')");
header("location:payment.php?uid=$c");
//mysqli_query($con,"UPDATE `tbl_rooms` SET `rm_status`='0' WHERE `rm_id`='$c'");
?>