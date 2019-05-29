

<!DOCTYPE html>
<html lang="en">
<head>
<title>Travelog</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>

<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
						<div class="logo_container">
							<div class="logo" style="
    margin-left: -150px;"><a href="#"><img src="images/logo.png" alt="">travelog</a></div>
						</div>
						<div class="main_nav_container ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="resort_home.php">home</a></li>
								<li class="main_nav_item"><a href="resort_add.php">Add Resort</a></li>
								<li class="main_nav_item"><a href="resort_profile.php">Profile</a></li>
								<li class="main_nav_item"><a href="admin_view_rating.php">View Rating</a></li>
								<li class="main_nav_item"><a href="view_feedback.php">View Feedback</a></li>
								<li class="main_nav_item"><a href="logout.php">Logout</a></li>
							</ul>
						</div>
						<div class="content_search ml-lg-0 ml-auto">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="17px" height="17px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
								<g>
									<g>
										<g>
											<path class="mag_glass" fill="#FFFFFF" d="M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
											s112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
											C407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
											M119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
											c0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z"/>
										</g>
									</g>
									<g>
										<g>
											<path class="mag_glass" fill="#FFFFFF" d="M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
											c8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
											C-2.019,484.77-2.019,497.865,6.057,505.942z"/>
										</g>
									</g>
								</g>
							</svg>
						</div>

						<form id="search_form" class="search_form bez_1">
							<input type="search" class="search_content_input bez_1">
						</form>

						<div class="hamburger">
							<i class="fa fa-bars trans_200"></i>
						</div>
					</div>
				</div>
			</div>	
		</nav>

	</header>
	<?php session_start();
include 'dbconnect.php';

if(!isset($_SESSION['r_id']))
	{
		header("location:login.php");
	}
	?>
	
<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="wrapper" style="background-image:url('images/bg-01.jpg');">
			<div class="inner" >
				<form action="resort_add_action.php" method="post" enctype="multipart/form-data" onsubmit="return Validate()" style="margin-top: 203px;">
		<h3>New Resort??</h3>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" name="rname" id="rname" class="form-control" placeholder="Resort Name" required onchange="Validate();">
						</div>
						<span id="msg1" style="color:red;"></span>
						<script>		
function Validate() 
{
    var val = document.getElementById('rname').value;

    if (!val.match(/^[A-Z][a-z]{0,}$/)) 
    {
        document.getElementById('msg1').innerHTML="Only alphabets are allowed!!";
		            document.getElementById('rname').value = "";
        return false;
    }
document.getElementById('msg1').innerHTML=" ";
    return true;
}
</script>
						<div class="form-holder"> 
						<span class="lnr lnr-star"></span>
						<select name="class" style="border-style: initial;padding-top: 18px; padding-bottom: 10px; margin-bottom: 4px;width: 100%; border-bottom: 1px solid #e6e6e6;" Required>&nbsp &nbsp
						<option>&nbsp &nbsp&nbsp &nbsp----Select Star Classification--</option>
						<option value="1">&nbsp &nbsp&nbsp &nbsp1-Star</option>
						<option value="2">&nbsp &nbsp&nbsp &nbsp2-Star</option>
						<option value="3">&nbsp &nbsp&nbsp &nbsp3-Star</option>
						<option value="4">&nbsp &nbsp&nbsp &nbsp4-Star</option>
						<option value="5">&nbsp &nbsp&nbsp &nbsp5-Star</option></select>
						</div><div></div>

					<div class="form-holder">
					<span class="lnr lnr-apartment"></span>
					<input type="text" name="radd" id="radd" class="form-control" placeholder="Resort Address" required onchange="Validname();">
					</div>
								<span id="msg3" style="color:red;"></span>
<script>		
function Validname() 
{
    var val = document.getElementById('radd').value;

    if (!val.match(/^[A-Z][a-z]{3,}$/)) 
    {
        document.getElementById('msg3').innerHTML="Only alphabets are allowed";
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
					<option>&nbsp &nbsp&nbsp &nbsp--Select State--</option>
					<option value=1>&nbsp &nbsp&nbsp &nbspKerala </option>
					</select>
					</div>
					<!--<input type="text" name="radd" id="radd" class="form-control" placeholder="District" required onchange="Validname();">
					!-->
					<div class="form-holder" id="tkvsoft">
					<span class="lnr lnr-map"></span> &nbsp&nbsp&nbsp &nbsp &nbsp &nbsp 
					<select name="dis_name" class="tkvsoft1" style="border-style: initial;padding-top: -18px; padding-bottom: 10px; margin-bottom: 4px;width: 100%; border-bottom: 1px solid #e6e6e6;"required>
					<option>&nbsp &nbsp&nbsp &nbsp--Select District--</option>
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
					<div></div>
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
					<input type="text" name="loc" id="loc" onchange="Validloc();"class="form-control" placeholder="Location">
					</div>
					<span id="msg5"style="color:red;"></span>
					<script>		
function Validloc() 
{
    var val = document.getElementById('loc').value;

    if (!val.match(/^[A-Za-z]{3,}$/)) 
    {
        document.getElementById('msg5').innerHTML="Only alphabets are allowed";
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

    if (!val.match(/^[A-Za-z]{3,}$/)) 
    {
        document.getElementById('msg5').innerHTML="Only alphabets are allowed";
		            document.getElementById('loc').value = "";
        return false;
    }
document.getElementById('msg5').innerHTML=" ";
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
					<input type="text" name="phone" id="phn" maxlength="10" onchange="Validat();" class="form-control" placeholder="Phone Number" required onchange="Validat();">
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
						<input type="text" name="url" id="url" class="form-control" placeholder="Website Link" required onchange="checkUrl();">
					</div>
					
	
					<div class="form-holder">
						<span class="lnr lnr-envelope"></span>
						<input type="email" name="email" id="email" class="form-control" onchange="Validata();" placeholder="Resort Email" required onchange="return Validata();">
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
						<center><a href="resort_view.php?uid=<?php echo $row['r_id'];?>">View Resorts</a>
					
				</form>
			
			</div>
		</div>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-lg-1 order-2  ">
					<div class="copyright_content d-flex flex-row align-items-center">
						<div><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					</div>
				</div>
				<div class="col-lg-9 order-lg-2 order-1">
					<div class="footer_nav_container d-flex flex-row align-items-center justify-content-lg-end">
						<div class="footer_nav">
							
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="admin_home.php">home</a></li>
								<li class="main_nav_item"><a href="admin_add_resort.php">Add Resort</a></li>
								<li class="main_nav_item"><a href="admin_approve_requests.php">Approve Requests</a></li>
								<li class="main_nav_item"><a href="admin_view_rating.php">View Rating</a></li>
								<li class="main_nav_item"><a href="view_feedback.php">View Feedback</a></li>
								<li class="main_nav_item"><a href="logout.php">Logout</a></li>
							</ul>
						
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
