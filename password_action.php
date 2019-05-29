<?php
   session_start();
include 'dbconnect.php';
    $uname=$_SESSION['uname'];
    $old=$_POST['old'];
    $new=$_POST['new'];
	$n=md5($new);
    $confirm=$_POST['confirm'];
     $query_sel="select * from tbl_login where uname='$uname' and pwd='$old'";
    $res_sel=mysqli_query($con,$query_sel);
    $num=mysqli_num_rows($res_sel);
    if($num!=0 && $new==$confirm)
    {
    $query="update `tbl_login` set pwd='$n' where uname='$uname'";
    $res=mysqli_query($con,$query);

    header("Location:admin_change_password.php?s=1");
}
	else
	{

	  header("Location:admin_change_password.php?s=2");
	}
    
?>

