<?php
   session_start();
	include 'dbconnect.php';
    $uname=$_POST['email'];
    $new=$_POST['npwd'];
	$n=md5($new);
    $confirm=$_POST['cpwd'];
     $query_sel="select * from tbl_login where uname='$uname'";
    $res_sel=mysqli_query($con,$query_sel);
    echo $num=mysqli_num_rows($res_sel);
    if($num!=0 && $new==$confirm)
    {
    echo $query="update tbl_login set pwd='$n' where uname='$uname'";
    $res=mysqli_query($con,$query);
    header("Location:forgot_password.php?s=1");
    }
	else
	{
	  header("Location:forgot_password.php?s=2");
	}
    
?>

