<!DOCTYPE html>
<?php
include 'customer_header.php';
?>
				<html>
				
<body>
<center><br><br><br><br><br><br><br><h1><font color="blue">RESORT DETAILS</h1></font>
<form action="#" method="post" enctype="multipart/form-data">
<?php
include 'dbconnect.php';
$kid=$_GET['uid'];
$result=mysqli_query($con,"select * from tbl_addresort where h_id='$kid'");
$i=1;
while($row=mysqli_fetch_array($result))
{
	?>
	<table width=10%>
<img src="Uploads/<?php echo $row['h_image'];?>" alt="" height="281" width="246"/>
<tr><td>Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row['h_name'];?></td></tr>
<tr><td>Address:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row['h_address'];?></td></tr>
<tr><td>Location:&nbsp&nbsp&nbsp&nbsp<?php echo $row['h_location'];?></td></tr>
<tr><td>Phone:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row['h_phone'];?></td></tr>
<tr><td>Url:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row['h_url'];?></td></tr>
<tr><td>Email:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row['h_email'];?></td></tr>
<
<td><a href="customer_resort_view.php?>"><img src="images/fleche.png" width="35px" style=" padding-left: 370px;">Back To Previous Page</td></tr></a>
<?php
				$i++;
}
?>
<?php
include 'customer_footer.php';
?>
