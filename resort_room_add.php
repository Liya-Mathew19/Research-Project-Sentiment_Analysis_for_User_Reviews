<?php
					
include 'dbconnect.php';
session_start();
$kid=$_SESSION['r_id'];
//echo $kid;
$sql=mysqli_query($con,"SELECT * FROM `tbl_addresort` WHERE `r_id`='$kid'");
$fetch=mysqli_fetch_array($sql);
$hid= $fetch['h_id'];
			
	?>		

<form action="resort_room_action.php" method="post" enctype="multipart/form-data">

<div class="card">
<div class="card-header" style="background-color:grey;"><strong>New Room Information<?php// echo $kid;?><strong></div>
<div class="card-body card-block">										
<div class="form-group"><label for="company" class=" form-control-label" style="color:black;">Name</label>
<select name="rname" required id="rname" required="required" class="form-control"  >
<option>--Select Resort--</option>
										
<?php
include 'dbconnect.php';
$res=mysqli_query($con,"SELECT * FROM `tbl_addresort` where h_status='1' and `r_id`='$kid'");
$r=mysqli_num_rows($res);
while($row=mysqli_fetch_array($res))
{  
?>									
<option value = <?php echo $row['h_id'];?>><?php echo $row['h_name']. " ".$row['h_location']; ?></option>
<?php
}
?>									
</select>
				
					
					
						
					<?php
					/*$res=mysqli_query($con,"SELECT * FROM `tbl_addresort` where h_status='1' and `r_id`='$kid' ");
					$r=mysqli_num_rows($res);
					$id=mysqli_insert_id();
					//echo $id;
					while($row=mysqli_fetch_array($res))
					{  
					 echo $row['h_name']; 
					 //echo $fetch['h_id'];
					
					}*/
					?>
					
				
                                  <div class="form-group"><label for="company" class=" form-control-label" style="color:black;">Category<?php ////echo $id;?></label>
                                                                        <select name="category" required id="category" class="form-control">
                                                                            <option value="0">--Select Category--</option>
                                                                            <option value="FamilyRooms">Family Rooms</option>
                                                                            <option value="DeluxeRooms">Deluxe Rooms</option>
                                                                            <option value="StandardRooms">Standard Rooms</option>
                                                                        </select>
                                                                   </div>
                                                                
                                       <div class="form-group"><label for="company" class=" form-control-label" style="color:black;">Bed Type</label>
                                                                        <select name="bedtype" id="bedtype" class="form-control" required >
                                                                            <option value="0">--Select Bed Type--</option>
                                                                            <option value="Single Bed">Single Bed</option>
                                                                            <option value="Double Bed">Double Bed</option>

                                                                        </select>
                                                                   </div>
													<div class="row form-group">
													<div class="col-8">
                                                    <div class="form-group"><label for="city" class=" form-control-label" style="color:black;">Number of rooms</label><input type="number" name="number" id="number" min=0 max=100 placeholder="Enter the number of rooms" required class="form-control"></div>
                                                    </div>
                                                    <div class="col-8">
                                                    <div class="form-group"><label for="postal-code" class=" form-control-label"style="color:black;">Package</label><input type="text" id="package" name="package" placeholder="Enter the package details" required class="form-control"></div>
                                                    </div>
													 <div class="col-8">
                                                    <div class="form-group"><label for="postal-code" class=" form-control-label"style="color:black;">Room Image:</label>	<input type="file" name="img" id="img" class="form-control" accept="image/jpg, image/JPG,image/JPEG, image/jpeg, image/png, image/PNG" required onchange="return Validp();">
													</div>
                                                    </div>		
													</div>
													<input class="btn btn-success" name="submit" type="submit" value="Save">
                                        													
<script type="text/javascript">
function load_image(id,ext)
{
   if(validateExtension(ext) == false)
   {
      alert("Upload only JPEG or JPG or PNG format ");
      
      document.getElementById("img").value = "";
	  document.getElementById("file").focus();
	  
      return;
   }
}

                                                   
        </script>                                       

										<?php
					if(isset($_POST['submit']))
					{
					$a=$_POST['rname'];
					
					echo "ujhuyu7ygugty".$a;
				
					}
					?>
					<input type="hidden" name="id" value="<?php echo $a;?>">