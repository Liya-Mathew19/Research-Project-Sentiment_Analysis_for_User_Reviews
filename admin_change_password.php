


<?php
include 'admin_header.php';?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
<script type="text/javascript">
function validate()
{
var pas1=document.getElementById("new");
							  var pas2=document.getElementById("confirm");
							
							  if(pas1.value=="")
	{
		alert("Password cant be null!!");
		pas1.focus();
		return false;
	}
	if(pas2.value=="")
	{
		alert("Please confirm password!!");
		pass2.focus();
		return false;
	}
	if(pas1.value!=pas2.value)
	{
		alert("Passwords does not match!!");
		pas1.focus();
		return false;
	}
	
        {  alert("Request Send!!"); }
      
	
	
}
</script>
<?php
error_reporting(0);
//session_start();
$uname=$_SESSION['uname'];
 ?>

 <div class="wrapper">
			<div class="inner" >
                                 <form action="password_action.php" method="post" onsubmit="return validate()">
								
                                     
									   <div align="center">
									         <?php
                                     if($_GET['s']==1)
                                     {
                                         echo "<script>alert('Password Has Changed!!')</script>";
                                     }
                                     else if($_GET['s']==2)
                                     {
                                        echo "<script>alert('The Password could not be changed due to some internal errors!!')</script>";
                                     }
                                     ?>
									<!-- <br><br><br><br><br><br><br><br>
                                    <div align="center" > 
                                   <fieldset style="width:35%">
									<legend>Change password</legend>-->
									<h3>Change Password</h3>
                                      <div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<!-- upload upto 20 images!-->
						<input type="password" placeholder="Old Password"name="old" id="old" class="form-control"required >
					</div>
       
       <div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<!-- upload upto 20 images!-->
						<input type="password" placeholder="New Password" name="new" id="new" class="form-control"required>
					</div>
       <div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<!-- upload upto 20 images!-->
						<input type="password" placeholder="Re-Type Password" name="confirm" id="confirm" class="form-control"required>
					</div> 
                                             <div>
					<button type="submit" name="submit" value="Save Changes">Save Changes
						</button></div>
</div>
</div>

</div>
</form>
</body>
		
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