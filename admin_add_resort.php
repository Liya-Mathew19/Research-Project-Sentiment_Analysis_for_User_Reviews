<?php
include 'admin_header.php';?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
        <div class="content mt-3">
	<body>
<div class="wrapper">
			<div class="inner" >
			
<script src="jquery.js" ></script>
<script src="clientval-script.js"></script>


<style>
.oh-autoval-error{display: block;position: absolute;background: rgba(228, 0, 0, 1);padding: 0.3em;color: #FFF !important;border-radius: 

0.25em;pointer-events: none;-webkit-transition: opacity 0.2s 0, visibility 0 0;-moz-transition: opacity 0.2s 0, visibility 0 

0;transition: opacity 0.2s 0, visibility 0 0;z-index:999;}

.oh-autoval-error::after {content: '';position: absolute;left: 10px;bottom: 

100%;height: 0;width: 0;border-bottom: 8px solid rgba(228, 0, 0, 1);border-left: 8px solid transparent;border-right: 8px solid 

transparent;}
</style>	
		<div class="wrapper">
			<div class="inner" >
				<form action="admin_resort_action.php" method="post" enctype="multipart/form-data" onsubmit="return Validate()" style="margin-top: 20px;">
					
					<h3>New Resort??</h3>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" name="rname" id="rname" class="form-control av-required" av-message="Enter Your  Resort Name.Start with a capital letter & Only alphabets are allowed!!" placeholder="Resort Name" required onchange="Validate();">
						</div>
						<span id="msg1" style="color:red;"></span>
						<script>		
function Validate() 
{
    var val = document.getElementById('rname').value;

    if (!val.match(/^[A-Z][a-zA-Z ]{0,}$/)) 
    {
        document.getElementById('msg1').innerHTML="Start with a capital letter & Only alphabets are allowed!!";
		            document.getElementById('rname').value = "";
        return false;
    }
document.getElementById('msg1').innerHTML=" ";
    return true;
}
</script>
						<div class="form-holder"> 
						<span class="lnr lnr-star"></span>
						<select name="class" onchange="validatestar()" id="star" style="border-style: initial;padding-top: 18px; padding-bottom: 10px; margin-bottom: 4px;width: 100%; border-bottom: 1px solid #e6e6e6;" required="">&nbsp &nbsp
						<option value="">&nbsp &nbsp&nbsp &nbsp----Select Star Classification--</option>
						<option value="1">&nbsp &nbsp&nbsp &nbsp1-Star</option>
						<option value="2">&nbsp &nbsp&nbsp &nbsp2-Star</option>
						<option value="3">&nbsp &nbsp&nbsp &nbsp3-Star</option>
						<option value="4">&nbsp &nbsp&nbsp &nbsp4-Star</option>
						<option value="5">&nbsp &nbsp&nbsp &nbsp5-Star</option></select>
						</div>
						<script>
						function validatestar(){
						var listBoxSelection=document.getElementById("star").value;
						if(listBoxSelection==" "){
						alert("Select Resort Star Classification");
						return false;
						}else{
						//alert("Ok your selection is valid");
						return true;
						}
						return true;
						}
						</script>
						

					<div class="form-holder">
					<span class="lnr lnr-apartment"></span>
					<input type="text" name="radd" id="radd" class="form-control av-required" av-message="Enter your Address"  placeholder="Resort Address" required onchange="Validname();">
					</div>

					<div class="form-holder">
					<span class="lnr lnr-apartment"></span>
					<select name="state" class="tkvsoft"  onchange="validatestate()" id="statelist"  style="border-style: initial;padding-top: -18px; padding-bottom: 10px; margin-bottom: 4px;width: 100%; border-bottom: 1px solid #e6e6e6;"required>
					<option value="">&nbsp &nbsp&nbsp &nbsp--Select State--</option>
					<option value=1>&nbsp &nbsp&nbsp &nbspKerala </option>
					</select>
					</div>
					<script>
					function validatestate(){
					var listBoxSelection=document.getElementById("statelist").value;
					if(listBoxSelection==" "){
					alert("Select Your State");
					return false;
					}else{
					//alert("Ok your selection is valid");
					return true;
					}
					return true;
					}
					</script>
					
					<div class="form-holder" id="tkvsoft">
					<span class="lnr lnr-map"></span> &nbsp&nbsp&nbsp &nbsp &nbsp &nbsp 
					<select name="dis_name" class="tkvsoft1" onchange="validatedis()" id="districtlist"  style="border-style: initial;padding-top: -18px; padding-bottom: 10px; margin-bottom: 4px;width: 100%; border-bottom: 1px solid #e6e6e6;"required>
					<option value="">&nbsp &nbsp&nbsp &nbsp--Select District--</option>
					<!--<option value="1">Kottayam</option>
					<option value="2">Kochi</option>
					</select></div>!-->
					<?php
					$res=mysqli_query($con,"SELECT * FROM `tbl_district` where d_status='1'");
					$r=mysqli_num_rows($res);
					while($row=mysqli_fetch_array($res))
					{  
					?>
					<option value = <?php echo $row['d_id'];
					
					
					?>>&nbsp &nbsp&nbsp &nbsp	  <?php echo $row['d_name']; ?></option>
					<?php
					}
					?>
					</select>
					</div>
					<script>
					function validatedis(){
					var listBoxSelection=document.getElementById("districtlist").value;
					if(listBoxSelection==" "){
					alert("Select Your District");
					return false;
					}else{
					//alert("Ok your selection is valid");
					return true;
					}
					return true;
					}
					</script>					
					
					<div class="form-holder">
					<span class="lnr lnr-apartment"></span>
					<input type="text" name="pin" id="pin" class="form-control" maxlength="6" placeholder="PIN Code" required onchange="Validpin();">
					</div>
<span id="msg4" style="color:red;"></span>
			
<script>
function Validpin() 
{
    var val = document.getElementById('pin').value;

    if (!val.match(/^[6-9][0-9]{1,6}$/)) 
    {
        document.getElementById('msg4').innerHTML="Enter pincode";
	
		
		            document.getElementById('pin').value = "";
        return false;
    }
document.getElementById('msg4').innerHTML=" ";
    return true;
}

</script>
					<div class="form-holder">
					<span class="lnr lnr-location"></span>
					<input type="text" name="loc" id="loc" onchange="Validloc();"class="form-control" placeholder="Location" required>
					</div>
					<span id="msg5"style="color:red;"></span>
					<script>		
function Validloc() 
{
    var val = document.getElementById('loc').value;

    if (!val.match(/^[A-Z][a-z" "]{3,}$/)) 
    {
        document.getElementById('msg5').innerHTML="Start with a capital letter & Only alphabets are allowed";
		            document.getElementById('loc').value = "";
        return false;
    }
document.getElementById('msg5').innerHTML=" ";
    return true;
}
</script>
					
					<div class="form-holder">
					<span class="lnr lnr-apartment"></span>
					<input type="text" name="rdes" id="rdes" class="form-control" placeholder="Description About Resort" required onchange="Validdes();">
					</div>
					<span id="msg6"style="color:red;"></span>
					<script>		
function Validdes() 
{
    var val = document.getElementById('rdes').value;

    if (!val.match(/^[A-Z][a-z ]{3,}$/)) 
    {
        document.getElementById('msg6').innerHTML="Start with a capital letter & Only alphabets are allowed";
		            document.getElementById('loc').value = "";
        return false;
    }
document.getElementById('msg6').innerHTML=" ";
    return true;
}
</script>
					<div class="form-holder">
					<span class="lnr lnr-clock"></span>
					<input type="time" name="open" id="open" class="form-control" placeholder="Opening time" required onchange="Validname();">
					</div>
					<div class="form-holder">
					<span class="lnr lnr-clock"></span>
					<input type="time" name="close" id="close" class="form-control" placeholder="Closing time" required onchange="Validname();">
					</div>
				<!--	<div class="form-holder">
					<span class="lnr lnr-apartment"></span>&nbsp &nbsp &nbsp &nbsp Check-In Time
					<input type="text" name="checkin" id="radd" class="form-control" placeholder="Check-In Time" required onchange="Validname();">
					</div>!-->
					<div class="form-holder">
					<span class="lnr lnr-phone-handset"></span>
					<input type="text" name="phone" id="phn" maxlength="10" class="form-control av-phone" av-message="Enter your phone" onchange="Validat();" class="form-control" placeholder="Phone Number" required onchange="Validat();">
					</div>
					<span id="msg8"style="color:red"></span>
<script>
function Validat() 
{
    var val = document.getElementById('phn').value;

    if (!val.match(/^[7-9][0-9]{1,9}$/)) 
    {
         document.getElementById('msg8').innerHTML="Only Numbers are allowed and must contain 10 number";
		            document.getElementById('phn').value = "";
        return false;
    }
document.getElementById('msg8').innerHTML=" ";
    return true;
}

</script>
					<div class="form-holder">
						<span class="lnr lnr-link"></span>
						<input type="text" name="url" id="url"  class="form-control av-url" av-message="Enter your resort site URL" placeholder="Website Link" required >
					</div>
					
	
					<div class="form-holder">
						<span class="lnr lnr-envelope"></span>
						<input type="email" name="email" id="email" class="form-control av-email" av-message="Enter your Resort's Email"  placeholder="Resort Email" required onchange="return Validata();">
					</div>
					
					<div class="form-holder">
						<span class="lnr lnr-picture"></span>
						<!-- upload upto 20 images!-->
						<input type="file" name="img" id="img" class="form-control" accept="image/jpg, image/JPG,image/JPEG, image/jpeg, image/png, image/PNG" required onchange="return Validp();">
					</div>
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
					<div>
					<button type="submit" name="submit" value="Add">Add
						</button></div>
						<br>
					
					
				</form>
			
			</div>
		</div>
		<?php
if (@$_GET['registered'] == 'true')
   echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Your resort added successfully!!')</script>");
	
			if(@$_GET['error']=='true')
				 echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Email already exists!!Try with another..!')</script>");
			
?>

			

            


    
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

<script>
			
		
$(document).ready(function()
{
	
	
	
$(".tkvsoft").on('change', function()
	{
		
		
		var t=this;
		
		if($(t).val()==1)
		$("#tkvsoft").show();
	else
		$("#tkvsoft").hide();
		
		
	});
			
	});		
			</script>
</body>

</html>