<?php
include 'admin_header.php';
$kid=$_SESSION['r_id'];
//echo $kid;
$rmid=$_GET['uid'];
 $res1=mysqli_query($con,"select * from `tbl_addresort` where `r_id`='$kid' ");
 $row1=mysqli_fetch_array($res1);?>
 <div class="content mt-3">
        <div class="col-sm-12">
                 <div class="card-body">
                                    <div class="alert alert-success" role="alert">
                                        <h4 class="alert-heading" >General Information</h4>
                                        <p>Show potential guests you have the perfect room for them. Create a room type with sample images for each unique category of room, suite and/or unit in your property. 
                                        You may have 10 standard rooms—but are they all exactly alike and the same size, with the same features and view? 
                                        You can have as many room types as necessary to cover them all.</p>
                                        <hr>
                                       
                                    </div>
                                    
                        <div class="card">
                            <div class="card-header">
                                <h4>Your Room Types</h4>
                            </div>
                            <div class="card-body">
                           <div style="color:red;">  <?php              
            if(isset($_GET['error']))
            echo $_GET['error'];
            ?></div>
                                   <form action="admin_edit_room_action.php?uid=<?php echo $rmid; // $row1['rm_id'];?>" method="post" style="    padding: 16px;" enctype="multipart/form-data">
                        <div class="card">
                            <div class="card-header" style="background-color:grey;"><strong>New Room Information</strong></div>
                            <div class="card-body card-block">
                    
                                          <div class="form-group"><label for="company" class=" form-control-label" style="color:black;">Name</label>
                                        <select name="rname" id="rname" class="form-control" value=
                                        "<?php
                    $res=mysqli_query($con,"SELECT * FROM `tbl_addresort` where h_status='1' and `r_id`='$kid' and `h_id`='$hid'");
                    $r=mysqli_num_rows($res);
                    while($row=mysqli_fetch_array($res))
                    {  
                     echo $row['h_name']." ".$row['h_location']; 
                     //echo $fetch['h_id'];
                    }
                    ?>" readonly>
                                                                       
                    <?php
                    include 'dbconnect.php';
                    $res=mysqli_query($con,"SELECT * FROM `tbl_addresort` where h_status='1'");
                    $r=mysqli_num_rows($res);
                    while($row=mysqli_fetch_array($res))
                    {  
                    ?>
                    <option value = <?php echo $row['h_id'];
                    
                    
                    ?>><?php echo $row['h_name']; ?></option>
                    <?php
                    }
                    ?>
                    </select>
                    <?php
                    
                     
                    $ress=mysqli_query($con,"SELECT * FROM `tbl_rooms` WHERE  `rm_status`='1' and `rm_id`='$rmid' ");
                    $rowq=mysqli_fetch_array($ress);

                    
                    ?>
                    
                
                                 <div class="form-group"><label for="company" class=" form-control-label" style="color:black;">Category</label>
                    <select name="category" id="category"  class="form-control">
                    <option value="Family Rooms" <?php if($rowq['rm_cat']=="Family Rooms") echo 'selected';?>  > Family Rooms</option>
                    <option value="Deluxe Rooms" <?php if($rowq['rm_cat']=="Deluxe Rooms") echo 'selected';?> > Deluxe Rooms</option>
                    <option value="Standard Rooms" <?php if($rowq['rm_cat']=="Standard Rooms") echo 'selected';?> > Standard Rooms</option>
                    </select>
                    </div>
                
                                      <div class="form-group"><label for="company" class=" form-control-label" style="color:black;">Bed Type</label>
                    <select name="bedtype" id="bedtype" class="form-control">
                    <option value="Single Bed" <?php if($rowq['rm_bed']=="Single Bed") echo 'selected';?> >Single Bed</option>
                    <option value="Double Bed" <?php if($rowq['rm_bed']=="Double Bed") echo 'selected';?> >Double Bed</option>
                    </select>
                     </div>
                                            <div class="row form-group">
                                                <div class="col-8">
                                                    <div class="form-group"><label for="city" class=" form-control-label" style="color:black;">Number of rooms</label><input type="text" name="number" id="number" value="<?php
                    $ress=mysqli_query($con,"SELECT * FROM `tbl_rooms` where  `rm_id`='$rmid' ");
                    while($row2=mysqli_fetch_array($ress))
                    {  
                     echo $row2['rm_number']; 
                     //echo $fetch['h_id'];
                    
                    }
                    
                    ?>"class="form-control"></div>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="form-group"><label for="postal-code" class=" form-control-label"style="color:black;">Package</label><input type="text" id="package" name="package" value="<?php
                    $ress=mysqli_query($con,"SELECT * FROM `tbl_rooms` where  `rm_id`='$rmid' ");
                    while($row2=mysqli_fetch_array($ress))
                    {  
                    echo $row2['rm_package']; 
                     //echo $fetch['h_id'];
                    }               
                    ?>" class="form-control"></div>
                                                        </div>
                                                         <div class="col-8">
                                                        <div class="form-group"><label for="postal-code" class=" form-control-label"style="color:black;">Room Image</label><input type="file" name="img" id="img" class="form-control" accept="image/jpg, image/JPG,image/JPEG, image/jpeg, image/png, image/PNG">
                                                         <td><b><img src="Uploads/<?php echo $rowq['rm_image'];?>" alt="" height="100px" width="100px"/></img></td></tr></div>
                                                        </div>

                 
                                                   
                                                   
                                                </div>
                                                <input class="btn btn-success" type="submit" value="Update">
                                        

                                
                            </div>
                            
                           
                        </div>
                    </div>
                    <!-- /# column -->
                    
                
<div id="demo"></div>
                   
                </div>
            </div>
        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>