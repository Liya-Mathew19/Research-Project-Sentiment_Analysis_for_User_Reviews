<?php
include 'admin_header.php'?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1 style="uppercase">Great images are key to attracting guests</h1>
                    </div>
                </div>
				
            </div>
           <!-- <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">UI Elements</a></li>
                            <li class="active">Buttons</li>
                        </ol>
                    </div>
                </div>
            </div>!-->
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="buttons">

                        <!-- Left Block -->
                

                            <div class="card">
                                <div class="card-header">
                                    <strong>  </strong>
									<h4>
									<small><p>For an outstanding profile, we recommend that you upload at least 
									5 high-quality images (2,000 pixels in width). 
									Please note that only .png or .jpg photo
									files are accepted.</p> </small></h4>
    
                                       <!-- <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code> or <code>&lt;input&gt;</code>!-->
                                    
                                </div>
								
								<?php
								if(@$_GET['error'])
								echo $_GET['error'];
								if(@$_GET['error2'])
								echo $_GET['error2'];
								if(@$_GET['error3'])
								echo $_GET['error3'];
							
								
								//header("Location: admin_add_images.php");
								
							
							
							
								?>
								
								<!--<form action="resort_photos_action.php" method="post">
                                <div class="card-body">
								<label> Select File: <input type="file" name="attachment[]" multiple class="btn btn-primary"> </label>
                                <input type="submit" class="btn btn-primary" name="submit" value="Add New Images"/>
								</div>
                                </form> !-->
<form action="admin_images_action.php" method="post" enctype="multipart/form-data">	
Resort Name : <select name="resortnme" id="resort" class="form-control" style="    width: 50%;">	
 <option>--Select Resort--</option>
					
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
 <br><input type="file" name="attachment[]"  class="btn btn-primary" accept="image/jpg, image/JPG,image/JPEG, image/jpeg, image/png, image/PNG" required onchange="return Validp();" multiple><hr>
 <input type="submit" onclick="myfunction()" name="HandleUpload" value="Upload" class="btn btn-primary">
</form>				
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

function validateExtension(v)
{
      var allowedExtensions = new Array("jpg","JPG","jpeg","JPEG","png","PNG");
      for(var ct=0;ct<allowedExtensions.length;ct++)
      {
          sample = v.lastIndexOf(allowedExtensions[ct]);
          if(sample != -1){return true;}
      }
      return false;
}
</script>				
                            </div><!-- /# card -->
							
							<div id="msg">	<?php
			if(@$_GET['success']=='true')
								
								echo "<h6 style='color:red;'>Image Uploaded Successfully!!</h6>";?></div>
							</div> <!-- .buttons -->
                        </div><!-- .row -->
                    </div><!-- .animated -->
                </div><!-- .content -->
            </div><!-- /#right-panel -->
		
            <!-- Right Panel -->
			
            <script src="vendors/jquery/dist/jquery.min.js"></script>
            <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
            <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
            <script src="assets/js/main.js"></script>
</body>
</html>

<script>
/*function myfunction()
{
	window.alert("clicked");
}*/
</script>


