<?php
					
					include 'dbconnect.php';
					session_start();
			$kid=$_SESSION['r_id'];
			echo $kid;
			$sql=mysqli_query($con,"SELECT * FROM `tbl_addresort` WHERE `r_id`='$kid'");
			$fetch=mysqli_fetch_array($sql);
			$hid= $fetch['h_id'];
			
			$ress=mysqli_query($con,"SELECT * FROM `tbl_room` where `h_id`='$hid' ");
			$roww=mysqli_fetch_array($ress);
			$rmid= $roww['rm_id'];
			echo $rmid;
			
			
	?>		

<form action="resort_room_action.php?uid=<?php $rmid;?>" method="post">

                        <div class="card">
                            <div class="card-header" style="background-color:grey;"><strong>Edit Room Information<?php echo $rmid;?><strong></div>
                            <div class="card-body card-block">
                    
								          <div class="form-group"><label for="company" class=" form-control-label" style="color:black;">Name</label>
                                                                        <input type="text" name="r_name" id="r_name" class="form-control" style="color:rgb(52, 41, 72);" readonly
                                                                           
																			
					value="
					<?php
					$res=mysqli_query($con,"SELECT * FROM `tbl_addresort` where h_status='1' and `r_id`='$kid' ");
					$r=mysqli_num_rows($res);
					while($row=mysqli_fetch_array($res))
					{  
					 echo $row['h_name']; 
					 //echo $fetch['h_id'];
					
					}
					
					?>">
					
				
                                  <div class="form-group"><label for="company" class=" form-control-label" style="color:black;">Category</label>
                                                                        <select name="category" id="category" class="form-control">
                                                                            <option value="0" selected >--Select Category--</option>
                                                                            <option value="Family Rooms" selected >Family Rooms</option>
                                                                            <option value="Deluxe Rooms" selected >Deluxe Rooms</option>
                                                                            <option value="Standard Rooms" selected >Standard Rooms</option>
                                                                        </select>
                                                                   </div>
                                                                
                                       <div class="form-group"><label for="company" class=" form-control-label" style="color:black;">Bed Type</label>
                                                                        <select name="bedtype" id="bedtype" class="form-control">
                                                                            <option value="0">--Select Bed Type--</option>
                                                                            <option value="Single Bed" selected >Single Bed</option>
                                                                            <option value="Double Bed" selected >Double Bed</option>

                                                                        </select>
                                                                   </div>
                                            <div class="row form-group">
                                                <div class="col-8">
                                                    <div class="form-group"><label for="city" class=" form-control-label" style="color:black;">Number of rooms</label><input type="text" name="number" id="number" placeholder="Enter the number of rooms" 
													value="
					<?php
					$ress=mysqli_query($con,"SELECT * FROM `tbl_room` where `h_id`='$hid' and `rm_id`='$rmid' ");
					while($row2=mysqli_fetch_array($ress))
					{  
					 echo $row2['rm_number']; 
					 //echo $fetch['h_id'];
					
					}
					
					?>" class="form-control"></div>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="form-group"><label for="postal-code" class=" form-control-label"style="color:black;float:left;">Package</label><input type="text" id="package" name="package" placeholder="Enter the package details" class="form-control" 
														value="	<?php
					$ress=mysqli_query($con,"SELECT * FROM `tbl_room` where `h_id`='$hid' and `rm_id`='$rmid' ");
					while($row2=mysqli_fetch_array($ress))
					{  
					 echo $row2['rm_package']; 
					 //echo $fetch['h_id'];
					
					}
					
					?>" 
														
														></div>
                                                        </div>
                                                   
                                                </div>
												<input class="btn btn-success" type="submit" value="Save">
                                        
