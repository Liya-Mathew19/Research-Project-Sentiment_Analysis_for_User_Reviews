<?php
include 'dbconnect.php';
$sql="SELECT * FROM `tbl_images` ";
$query=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($query))
{
$image=$row ['i_filename'];

echo '<img src="Uploads/'.$image.'" width="360" height="150" alt="not available">';

}