<?php
include 'dbconnect.php';
session_start();
$kid=$_SESSION['r_id'];
 $res=mysqli_query($con,"select * from `tbl_registration` where `r_id`='$kid'");
 $fetch=mysqli_fetch_array($res);
  $res1=mysqli_query($con,"select * from `tbl_addresort` where `r_id`='$kid'");
 $fetch1=mysqli_fetch_array($res1);
 $hid=$fetch1['h_id'];
 //echo $hid;
if(!isset($_SESSION['r_id'])){
	header("Location:login.php");
}

$b=$_SESSION['r_id'];
$sql=mysqli_query($con,"SELECT * FROM tbl_login where r_id='$b'");
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
	<link rel="icon" type="image/ico" href="images/logo.png" />
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

    <!-- Left Panel -->

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
        <!-- Header-->
		<div class="content mt-3">

            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success"><?php 
					if(isset($fetch1['h_name'])){  echo $fetch1['h_name']; }else {  echo $fetch['r_name'];}?></span> Welcome To Travellog World.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div> 
<hr>
<br><br><br><br><br> <center><button class="btn btn-danger" style="background-color:#6f42c1;border-color:#0277BD;" onclick="loadDoc1()" 
 type="submit"><b><font color="white">  View Booking Details </b></button>
 </center>
<div id="demo"></div>							
<?php

if(isset($_POST['rname']))
{
	$kid = $_POST['rname'];	
}
?>


<script>
function loadDoc1() {
  var xhttp;
  if (window.XMLHttpRequest) {
    // code for modern browsers
    xhttp = new XMLHttpRequest();
    } else {
    // code for IE6, IE5
    xhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "resort_view_booking.php", true);
  xhttp.send();
}
</script>

<div class="card-header">                              
</div>
		<?php
		$resa=mysqli_query($con,"SELECT * FROM `tbl_rooms` where `rm_status`=1 and `h_id`='$kid'");
		$rowa=mysqli_fetch_array($resa);
		$rm= $rowa['rm_id'];
		echo $rm;
		$h=$rowa['h_id'];
		echo $h;
if(!$rowa)
{
	echo "<br><br><center><font color=green size=3><i> <b> View Your Bookings</i> </b> </font></center>";
}
else
{
	if(isset($_POST['rname']))
	{
		echo $_POST['rname'];
?>
<?php
	}
	//$resultss=mysqli_query($con,"SELECT * FROM tbl_booking where 
	$results=mysqli_query($con,"SELECT * FROM tbl_booking t1 LEFT JOIN tbl_rooms t2 ON t1.rm_id = t2.rm_id
WHERE t1.h_id='$h'");	
	$i=1;
	if(mysqli_num_rows($results))
	{
		?>
									<div class="card-body">
                                <table class="table table-white">
                                    <thead>
                                        <tr>
											<th scope="col"style="color:black;">Customer Name</th>
                                            <th scope="col"style="color:black;">Resort Name</th>
                                            <th  scope="col"style="color:black;">Category</th>
                                            <th scope="col"style="color:black;">Bed Type</th>
											<th scope="col"style="color:black;">Number of rooms</th>
											<th scope="col"style="color:black;">Package</th>
											<th scope="col"style="color:black;"> Check - In </th>
											<th scope="col"style="color:black;"> Check - Out </th>
											<th scope="col"style="color:black;"> Room Count </th>
											<th scope="col"style="color:black;"> Total Amount  </th>				
											<th scope="col" style="color:black;">Verify</th>
                                        </tr>
									</thead>
									<!--<a href="Approved List">Verified Bookings</a>!-->
	<?php
	
	while($roww=mysqli_fetch_array($results))
	{	
		$ress1=mysqli_query($con,"SELECT * FROM `tbl_addresort` where `h_id`='$kid' ");
		while($roww1=mysqli_fetch_array($ress1))
		{
	?>
                                    <tbody>
                                        <tr>
											<td style="color:black;"><?php echo $fetch['r_name']." ".$fetch['r_lname'];?></td> 
											<td style="color:black;"><?php echo $roww1['h_name']." ".$roww1['h_location'];?></td> 
											<td style="color:black;"><?php echo $roww['rm_cat'];?></td>
                                            <td style="color:black;"><?php echo $roww['rm_bed'];?></td>
											<td style="color:black;"><?php echo $roww['rm_number'];?></td>
											<td style="color:black;"><?php echo $roww['rm_package'];?></td>						
											<td style="color:black;"><?php echo $roww['b_cn'];?></td>
											<td style="color:black;"><?php echo $roww['b_co'];?></td>
											<td style="color:black;"><?php echo $roww['b_no'];?></td>
											<td style="color:black;"><?php echo $roww['b_total'];?></td>
											<td><center><a   onclick="alert('Verifed');" href="?uid=<?php echo $roww['rm_id'];?>"><img src="images/Approve.png" width="30px"></a></td></tr>									
                                        </tr>
                                      		<?php
		}
												$i++;
}

}
	
	
	
	
	
	
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
	

</body>
</html>


<?php
}}
?>