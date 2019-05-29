<?php
include 'dbconnect.php';
session_start();
$kid=$_SESSION['r_id'];
//echo $kid;
$rmid=$_GET['uid'];
//echo $rmid;
 $res=mysqli_query($con,"select * from `tbl_registration` where `r_id`='$kid'");
 $fetch=mysqli_fetch_array($res);
  $res1=mysqli_query($con,"select * from `tbl_addresort` where `r_id`='$kid' ");
 $fetch1=mysqli_fetch_array($res1);
 $hid=$fetch1['h_id'];
 $_SESSION['hid']=$hid;

 
 //echo $hid;
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
	<link rel="icon" type="image/ico" href="images/logo.png" /
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
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


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
                            <li><i class="fa fa-table"></i><a href="resort_add_photos.phpuid=<?php echo $fetch1['h_id'];?>">Photos</a></li>
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
						i class="menu-icon fa fa-laptop"></i> Booking</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="resort_view_rating.php">View Booking</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->
	
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

        </header><!-- /header -->
		
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
		</div>

					<!--<form action="resort_room_update_action.php?uid=<?php //echo $fetch1['rm_id'];?>" method="post">!-->
					<form action="resort_room_update_action.php?uid=<?php echo $rmid; // $fetch1['rm_id'];?>" method="post" enctype="multipart/form-data">
                    <div class="card">
                     <div class="card-header" style="background-color:grey;"><strong>Edit Room Information<strong></div>
                    <div class="card-body card-block">                   
					<div class="form-group"><label for="company" class=" form-control-label" style="color:black;">Name</label>
                    <input type="text" name="r_name" id="r_name" class="form-control" style="color:rgb(52, 41, 72);" readonly
                                                                           
																			
					value="<?php
					$res=mysqli_query($con,"SELECT * FROM `tbl_addresort` where h_status='1'  and `h_id`='$hid'");
					$r=mysqli_num_rows($res);
					while($row=mysqli_fetch_array($res))
					{  
					 echo $row['h_name']." ".$row['h_location']; 
					 //echo $fetch['h_id'];
					
					}
					
					?>">
					<?php
					
					 
					$ress=mysqli_query($con,"SELECT * FROM `tbl_rooms` WHERE  `rm_status`='2' and `rm_id`='$rmid' ");
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
                    <div class="form-group"><label for="city" class=" form-control-label" style="color:black;">Number of rooms</label>
					<input type="text" name="number" id="number" placeholder="Enter the number of rooms" 
					value="<?php
					$ress=mysqli_query($con,"SELECT * FROM `tbl_rooms` where  `rm_id`='$rmid' ");
					while($row2=mysqli_fetch_array($ress))
					{  
					 echo $row2['rm_number']; 
					 //echo $fetch['h_id'];
					
					}
					
					?>" class="form-control"></div>
                     </div>
                    <div class="col-8">
					<div class="form-group"><label for="postal-code" class=" form-control-label"style="color:black;float:left;">Package</label>
					<input type="text" id="package" name="package" placeholder="Enter the package details" class="form-control" 
					value="<?php
					$ress=mysqli_query($con,"SELECT * FROM `tbl_rooms` where  `rm_id`='$rmid' ");
					while($row2=mysqli_fetch_array($ress))
					{  
					echo $row2['rm_package']; 
					 //echo $fetch['h_id'];
					}				
					?>"></div>
					<div class="form-holder">
						<span class="lnr lnr-picture"></span>
						<!-- upload upto 20 images!-->
						<?php $ress1=mysqli_query($con,"SELECT * FROM `tbl_rooms` where  `rm_id`='$rmid' ");
					while($row22=mysqli_fetch_array($ress1))
					{
						?>
						Image<input type="file" name="img" id="img" class="form-control" accept="image/jpg, image/JPG,image/JPEG, image/jpeg, image/png, image/PNG" onchange="return Validp();">
					<td><b><img src="Uploads/<?php echo $row22['rm_image'];?>" alt="fffgf" height="100" width="100"/></img></td></tr>
					</div>
					<?php
					}
					?>
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
 </div></div>
<input class="btn btn-success" type="submit" value="Update">							
</div>
</form>								
</div>
</div>
</div>
	

	
	<?php
}
?>