<form action="admin_room_action.php" method="post" style="    padding: 16px;">

                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title" style="color:black;">ROOM DETAILS</strong>
                            </div>
							<?php
							include 'dbconnect.php';
							$res1=mysqli_query($con,"SELECT * FROM `tbl_rooms` where rm_status=1");
$row1=mysqli_fetch_array($res1);
if(empty($row1))
{
	echo "<br><br><center><font color=red size=3>No Room Types added Yet !!!</font></center>";
}
else
{
?>
                            <div class="card-body">
                                <table class="table table-white">
                                    <thead>
                                        <tr>
                                            <th scope="col"style="color:black;">#</th>
                                            <th scope="col"style="color:black;">Resort Name</th>
                                            <th scope="col"style="color:black;">Category</th>
                                            <th scope="col"style="color:black;">Bed Type</th>
											 <th scope="col"style="color:black;">Number of rooms</th>
											  <th scope="col"style="color:black;">Package</th>
                                              <th scope="col"style="color:black;">Images</th>
                                              <th scope="col"style="color:black;">Update</th>
                                        </tr>
                                    </thead>
	<?php
	
	$res=mysqli_query($con,"SELECT * FROM `tbl_rooms` where `rm_status`='1'");
	$i=1;
	while($row=mysqli_fetch_array($res))
	{
		$kid=$row['h_id'];
		$res1=mysqli_query($con,"SELECT * FROM `tbl_addresort` where `h_id`='$kid'");
		$row1=mysqli_fetch_array($res1);
	?>
	
                                    <tbody>
                                        <tr>
                                            <th style="color:black;"><?php echo $i?></th>
                                            <td style="color:black;"><?php echo $row1['h_name'];?></td>
                                            <td style="color:black;"><?php echo $row['rm_cat'];?></td>
                                            <td style="color:black;"><?php echo $row['rm_bed'];?></td>
											<td style="color:black;"><?php echo $row['rm_number'];?></td>
											<td style="color:black;"><?php echo $row['rm_package'];?></td>
                                            <td style="color:black;"><img src="Uploads/<?php echo $row['rm_image'];?>" style="width:100px;height:100px;"></td>
                                            <td style="color:black;"><a href="admin_room_edit.php?uid=<?php echo $row['rm_id'];?>" style='font-color:red';>Edit</a></td>
                                        </tr>
                                      		<?php
												$i++;
}}
	?>
                                    </tbody>
                                </table>
						
                            </div>
                        </div>
                    