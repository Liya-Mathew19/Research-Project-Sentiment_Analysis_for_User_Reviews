<?php
include 'dbconnect.php';
session_start();
$kid=$_SESSION['r_id'];

$h=$_GET['uid'];
//echo $h;


//echo $kid;

 $res=mysqli_query($con,"select * from `tbl_registration` where `r_id`='$kid'");
 $fetch=mysqli_fetch_array($res);
  $res1=mysqli_query($con,"select * from `tbl_addresort` where `h_id`='$h'");
  $fetch1=mysqli_fetch_array($res1);
  $a= $fetch1['h_id'];
   $res2=mysqli_query($con,"select * from `tbl_addresort` where `r_id`='$kid' and `h_id`='$h'");
 $fetch2=mysqli_fetch_array($res2);
 
 
 //echo $a;
if(!isset($_SESSION['r_id'])){
	header("Location:login.php");
}

$b=$_SESSION['r_id'];
$sql=mysqli_query($con,"SELECT * FROM tbl_login where l_status='2' and r_id='$b'");
while($row=mysqli_fetch_array($sql))
{
	?>


<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Travellog</title>
    <meta name="description" content="Travellog">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
               <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="resort_home.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
					
					<h3 class="menu-title">Resort Information</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Resort </a>
                        <ul class="sub-menu children dropdown-menu">
							<li><i class="fa fa-table"></i><a href="resort_add_resort.php?uid=<?php echo $hid;?>">Add Resort</a></li>
                            <li><i class="fa fa-table"></i><a href="resort_add_photos.php?uid=<?php echo $fetch1['h_id'];?>">Photos</a></li>
                            <li><i class="fa fa-table"></i><a href="resort_add_rooms.php">Room Types</a></li>
                        </ul>
                    </li>
					
					
                    <h3 class="menu-title">Profile Information</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i> Profile</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="resort_user_profile.php">User Profile</a></li>
							<li><i class="fa fa-puzzle-piece"></i><a href="resort_resort_profile.php">Resort Profile</a></li>
							
                         
                        </ul>
                    </li>
					
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Feedback</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="resort_system_feedback.php">System Feedback</a></li>
							<li><i class="menu-icon fa fa-th"></i><a href="resort_view_feeback.php">View Resort Feedback</a></li>
						 
                            
                        </ul>
                    </li> 

					<h3 class="menu-title">Booking</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="menu-icon fa fa-laptop"></i> Booking</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="resort_view_rating.php">View Booking</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

       

	
<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
	
	 <!-- Right Panel -->

   <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left"> 
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="Uploads/<?php echo $fetch['r_image'];?>"  alt="Resort">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="resort_user_profile.php"><i class="fa fa-user"></i> My Profile</a>
							<a class="nav-link" href="resort_resort_profile.php"><i class="fa fa-user"></i> Resort Profile</a>
                            <a class="nav-link" href="change_password.php"><i class="fa fa-cog"></i> Change Password</a>
                            <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                </div>
            </div>

        </header>
		 <div class="content mt-3">
	 <div class="content mt-3">

            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success"><?php 
					if(isset($fetch1['h_name'])){  echo $fetch1['h_name']; }else {  echo $fetch['r_name'];}?></span> Welcome To Travellog World.
                    <!--<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>!-->
                </div>
            </div>    

        </div>
	<div class="content mt-7">
		
	
		<div class="wrapper">
			<div class="inner" >
				<form action="resort_resort_profile_update.php?uid=<?php echo $h;?>"" method="post" enctype="multipart/form-data" onsubmit="return Validate()" style="margin-top: 20px;">
					
					<h3>Edit Resort Profile</h3>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" name="rname" id="rname" class="form-control" placeholder="Resort Name" value="<?php echo $fetch2['h_name'];?>" readonly required >
						</div>
						<span id="msg1" style="color:red;"></span>
						<div class="form-holder"> 
						<span class="lnr lnr-star"></span>
						
						<select name="class"  onchange="validatestar()" id="star" value="<?php echo $fetch2['h_star'];?>" selected style="border-style: initial;padding-top: 18px; padding-bottom: 10px; margin-bottom: 4px;width: 100%; border-bottom: 1px solid #e6e6e6;" Required >&nbsp &nbsp
						
					 
						<option value="" >&nbsp &nbsp&nbsp &nbsp----Select Star Classification--</option>
						<option value="1" <?php if($fetch2['h_star']=="1") echo 'selected';?>  >&nbsp &nbsp&nbsp &nbsp1-Star</option>
						<option value="2" <?php if($fetch2['h_star']=="2") echo 'selected';?>>&nbsp &nbsp&nbsp &nbsp2-Star</option>
						<option value="3" <?php if($fetch2['h_star']=="3") echo 'selected';?> >&nbsp &nbsp&nbsp &nbsp3-Star</option>
						<option value="4" <?php if($fetch2['h_star']=="4") echo 'selected';?> >&nbsp &nbsp&nbsp &nbsp4-Star</option>
						<option value="5" <?php if($fetch2['h_star']=="5") echo 'selected';?> >&nbsp &nbsp&nbsp &nbsp5-Star</option></select>
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
						<div></div>

					<div class="form-holder">
					<span class="lnr lnr-apartment"></span>
					<input type="text" name="radd" id="radd" class="form-control" placeholder="Resort Address" value="<?php echo $fetch2['h_address'];?>" required onchange="Validname();">
					</div>
								<span id="msg3" style="color:red;"></span>
					<script>		
					function Validname() 
					{
					var val = document.getElementById('radd').value;
					//if (!val.match(/^[A-Z][a-z]{3,}$/)) 
						if(!val.match(/^[a-zA-Z0-9-\/] ?([a-zA-Z0-9-\/]|[a-zA-Z0-9-\/] )*[a-zA-Z0-9-\/]$/))
						{
							document.getElementById('msg3').innerHTML="Give your Resort Address";
							document.getElementById('radd').value = "";
							return false;
						}
					document.getElementById('msg3').innerHTML=" ";
					return true;
					}
					</script>
					<div class="form-holder">
					<span class="lnr lnr-apartment"></span>
					<select name="state" class="tkvsoft" style="border-style: initial;padding-top: -18px; padding-bottom: 10px; margin-bottom: 4px;width: 100%; border-bottom: 1px solid #e6e6e6;"required>
					<!--<option>&nbsp &nbsp&nbsp &nbsp--Select State--</option>!-->
					<option value="Kerala" selected>&nbsp &nbsp&nbsp &nbspKerala </option>
					</select>
					</div>
					<!--<input type="text" name="radd" id="radd" class="form-control" placeholder="District" required onchange="Validname();">
					!-->
					<div class="form-holder" id="tkvsoft">
					<span class="lnr lnr-map"></span> &nbsp&nbsp&nbsp &nbsp &nbsp &nbsp 
					<select name="dis_name" class="tkvsoft1" onchange="validatedis()" id="districtlist" style="border-style: initial;padding-top: -18px; padding-bottom: 10px; margin-bottom: 4px;width: 100%; border-bottom: 1px solid #e6e6e6;"required>
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
					
					
					?> selected >&nbsp &nbsp&nbsp &nbsp	  <?php echo $row['d_name']; ?></option>
					<?php
					}
					?>
					</select>					
					<script>
					function validatedis(){
							var listBoxSelection=document.getElementById("districtlist").value;
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
					</div> 
					<div></div>
					<div class="form-holder">
					<span class="lnr lnr-apartment"></span>
					<input type="text" name="pin" id="pin" class="form-control" maxlength="6" placeholder="PIN Code" value="<?php echo $fetch2['h_pin'];?>" required onchange="Validpin();">
					</div>
<span id="msg4" style="color:red;"></span>
			
<script>
function Validpin() 
{
    var val = document.getElementById('pin').value;

    if (!val.match(/^[6-9][0-9]{1,6}$/)) 
    {
        document.getElementById('msg4').innerHTML="Only Numbers are allowed and must contain 6 number";
	
		
		            document.getElementById('pin').value = "";
        return false;
    }
document.getElementById('msg4').innerHTML=" ";
    return true;
}

</script>
					<div class="form-holder">
					<span class="lnr lnr-location"></span>
					<input type="text" name="loc" id="loc" onchange="Validloc();"class="form-control" value="<?php echo $fetch2['h_location'];?>" placeholder="Location">
					</div>
					<span id="msg5"style="color:red;"></span>
					<script>		
					function Validloc() 
					{
						var val = document.getElementById('loc').value;

						if (!val.match(/^[A-Za-z]{3,}$/)) 
						{
							document.getElementById('msg5').innerHTML="Enter Resort Location";
										document.getElementById('loc').value = "";
							return false;
						}
					document.getElementById('msg5').innerHTML=" ";
						return true;
					}
					</script>
					
					<div class="form-holder">
					<span class="lnr lnr-apartment"></span>
					<input type="text" name="rdes" id="rdes" class="form-control" placeholder="Description About Resort" value="<?php echo $fetch2['h_des'];?>" required onchange="Validdes();">
					</div>
					<span id="msg6"style="color:red;"></span>
					<script>		
					function Validdes() 
					{
					var val = document.getElementById('rdes').value;
						if (!val.match(/^[A-Za-z]{3,}$/)) 
						{
							document.getElementById('msg5').innerHTML="Enter Description About your Resort";
							document.getElementById('rdes').value = "";
							return false;
						}
					document.getElementById('msg5').innerHTML=" ";
					return true;
					}
					</script>

					<div class="form-holder">
					<span class="lnr lnr-clock"></span>
					<input type="time" name="open" id="open" class="form-control" placeholder="Opening time" value="<?php echo $fetch2['h_open'];?>" required onchange="Validname();">
					</div>
					<div class="form-holder">
					<span class="lnr lnr-clock"></span>
					<input type="time" name="close" id="close" class="form-control" placeholder="Closing time"  value="<?php echo $fetch2['h_close'];?>" required onchange="Validname();">
					</div>
				<!--	<div class="form-holder">
					<span class="lnr lnr-apartment"></span>&nbsp &nbsp &nbsp &nbsp Check-In Time
					<input type="text" name="checkin" id="radd" class="form-control" placeholder="Check-In Time" required onchange="Validname();">
					</div>!-->
					<div class="form-holder">
					<span class="lnr lnr-phone-handset"></span>
					<input type="text" name="phone" id="phn" maxlength="10" onchange="Validat();" class="form-control" placeholder="Phone Number" value="<?php echo $fetch2['h_phone'];?>" required onchange="Validat();">
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
						<input type="text" name="url" id="url" class="form-control" placeholder="Website Link"  value="<?php echo $fetch2['h_url'];?>" required onchange="checkUrl();">
					<script>
					function checkUrl() 
					{
						var val = document.getElementById('url').value;
						if (!val.match(/^(http[s]?:\/\/){0,1}(www\.){0,1}[a-zA-Z0-9\.\-]+\.[a-zA-Z]{2,5}[\.]{0,1}/)) 
						{
							document.getElementById('msg8').innerHTML="Only Numbers are allowed and must contain 10 number";
							document.getElementById('url').value = "";
							return false;
						}
					document.getElementById('msg8').innerHTML=" ";
					return true;
					}
					</script>
					</div>
					
	
					<div class="form-holder">
						<span class="lnr lnr-envelope"></span>
						<input type="email" name="email" id="email" class="form-control" onchange="Validata();" placeholder="Resort Email" readonly value="<?php echo $fetch2['h_email'];?>" required onchange="return Validata();">
					</div>
					<span id="msg7" style="color:red"></span>
					<script>		
function Validata() 
{
    var val = document.getElementById('email').value;

    if (!val.match(/([A-z0-9_\-\.]){1,}\@([A-z0-9_\-\.]){1,}\.([A-Za-z]){2,4}$/)) 
    {
       document.getElementById('msg7').innerHTML="Enter a Valid Email";
		
		     document.getElementById('email').value = "";
        return false;
    }
 document.getElementById('msg7').innerHTML=" ";
    return true;
}

</script>
					<div class="form-holder">
						<span class="lnr lnr-picture"></span>
						<!-- upload upto 20 images!-->
						<input type="file" name="img" id="img" class="form-control" accept="image/jpg, image/JPG,image/JPEG, image/jpeg, image/png, image/PNG" onchange="return Validp();">
					<td><b><img src="Uploads/<?php echo $fetch1['h_image'];?>" alt="fffgf" height="500" width="550"/></img></td></tr>
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
					<button type="submit" name="submit" value="Add">Update 
						</button></div>
						<br>
						<!--<center><a href="admin_resort_view.php">View Resorts</a>!-->
					
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
    </div>
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


</div>
 </body>         
</html>
<?php
}
?>