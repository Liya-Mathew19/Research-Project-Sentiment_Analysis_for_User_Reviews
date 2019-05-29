<html>
<?php
	include 'dbconnect.php';
	session_start();
	$kid=$_SESSION['r_id'];
			//echo $kid."my kid";
		/*	$sql=mysqli_query($con,"SELECT * FROM `tbl_addresort` WHERE `r_id`='$kid'");
			$fetch=mysqli_fetch_array($sql);
			$hid1= $fetch['h_id'];
			echo $hid1."hjjh";*/
			
			?>
			
<form method="post" action="resort_add_rooms.php">
<select name="rname" required id="rname" required="required" class="form-control"  >
<option>--Select Resort--</option>
										
<?php

$res=mysqli_query($con,"SELECT * FROM `tbl_addresort` where h_status='1' and `r_id`='$kid'");
$r=mysqli_num_rows($res);
while($row=mysqli_fetch_array($res))
{  
?>									
<option  value="<?php echo $row['h_id'];?>"><?php echo $row['h_name']." ".$row['h_location']." ".$row['h_id']; ; ?></option>
<?php
}
?>									
</select>
<input type="submit" style="width:100%;padding:10px;" value="Search">
</form>
<?php 
$res=mysqli_query($con,"SELECT * FROM `tbl_addresort` where h_status='1' and `r_id`='$kid'");
$r=mysqli_num_rows($res);

while($row=mysqli_fetch_array($res))
{  								
  //echo $row['h_id'];
 // echo $row['h_name']. " ".$row['h_location']." ".$row['r_id']." ".$row['h_id'];
  //echo "hid Ann:"." ".$row['h_id'];
  $hidd=$row['h_id'];
  echo $hidd;
$results=mysqli_query($con,"SELECT * FROM tbl_rooms t1 LEFT JOIN tbl_addresort t2 ON t1.h_id = t2.h_id
WHERE t2.r_id='$kid'");

  
}
?>              
    </div>
    </html>                