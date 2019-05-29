<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
    <?php
include 'dbconnect.php';
session_start();
if(!isset($_SESSION['r_id']))
    {
        header("location:login.php");
    }
    ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Travelog</title>
    <link rel="icon" type="image/ico" href="images/logo.png" />
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/offers_styles.css">
<link rel="stylesheet" type="text/css" href="styles/offers_responsive.css">
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i> Rating</a>
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
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
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
        <!-- Header-->

<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- LINEARICONS -->
        <link rel="stylesheet" href="fonts/linearicons/style.css">
        <!-- STYLE CSS -->
        
<!--<<div class="col-lg-12" style="border-style: groove;    padding: 10px;">!-->
                
<body>
<center><h1><font color="purple">RESORT DETAILS</h1></font><br><br>
<form action="#" method="post" enctype="multipart/form-data">
<div class="offers_item rating_4">
                    <!-- Offers Grid -->                    
    <?php 
include 'dbconnect.php';
$kid=$_SESSION['r_id'];
//echo $kid;
    $result1=mysqli_query($con,"select * from tbl_addresort where r_id='$kid' ");
$i=1;
while($row1=mysqli_fetch_array($result1))
{
$hid=$row1['h_id'];
?>  
<div class="col-lg-12" style="border-style: groove;    padding: 10px;">                             
<div class="content mt-3">
                <!-- Offers Item -->
                            <div class="row">
                                <div class="col-lg-1 temp_col" ></div>
                                <div class="col-lg-3 col-1680-4">
                                    <div class="offers_image_container">
                                        <!-- Image by https://unsplash.com/@kensuarez -->
                                        <div class="offers_image_background" style="background-image:url(Uploads/<?php echo $row1['h_image'];?>"></div>
                                        <div class="offer_name" style="width:225px;"><a href="resort_resort_profile_edit.php?uid=<?php echo $row1['h_id'];?>"><?php echo $row1['h_name']."  "; echo $row1['h_location']; ?></a></div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="offers_content">
                                        <p class="offers_text" style="font-size:17px;">
                                        <span class="lnr lnr-apartment">&nbsp<b>ADDRESS :</b> <?php echo $row1['h_address'];?></span><br><br>
                                        <span class="lnr lnr-location">&nbsp<b>LOCATION : </b><?php echo $row1['h_location'];?></span><br><br>
                                        <span class="lnr lnr-location">&nbsp<b>CLASSIFICATION : </b><?php echo $row1['h_star']." STAR";?></span><br><br>
                                        <span class="lnr lnr-map">&nbsp<b>DESCRIPTION :</b> <?php echo $row1['h_des'];?></span><br><br>
                                        <span class="lnr lnr-phone">&nbsp<b>PHONE : </b><?php echo $row1['h_phone'];?></span><br><br>
                                        <span class="lnr lnr-link">&nbsp<b>URL :</b> <?php echo $row1['h_url'];?></span><br><br>
                                        <span class="lnr lnr-envelope">&nbsp<b>EMAIL :</b> <?php echo $row1['h_email'];?></span><br><br>
                                        <?php
                                        if($row1['h_status']=='2')
                                        {
                                        ?>
                                        <div  class="offers_name" style="width:225px;color:red;"><b>Admin Not Approved Yet!!</b></div>
                                        <?php
                                        }
                                        ?>
                                        </p>
                                        <div class="offer_reviews">
                                            <div class="offer_reviews_content">
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
</div>
<?php
                $i++;

}
?>
</div>  </div>
 <!-- .content -->
    <!-- /#right-panel -->

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
