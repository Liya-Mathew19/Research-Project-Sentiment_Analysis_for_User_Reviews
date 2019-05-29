<?php
include 'dbconnect.php';
session_start();
$kid=$_SESSION['r_id'];
//$hid=$_SESSION['h_id'];
//echo $hid;

 $res=mysqli_query($con,"select * from `tbl_registration` where `r_id`='$kid'");
 $fetch=mysqli_fetch_array($res);
  
 $res1=mysqli_query($con,"select * from `tbl_resort` where `r_id`='$kid'");
 $fetch1=mysqli_fetch_array($res1);
  
 
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

        <div class="content mt-3">

    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- LINEARICONS -->
        <link rel="stylesheet" href="fonts/linearicons/style.css">
        <!-- STYLE CSS -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    
     <!-- Right Panel -->

    <div id="right-panel" class="right-panel" style="
    <background: #443069;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15);
    clear: both;
    display: inline-block;
    padding: 15px 20px 13px;
    width: 100%;

     ">

        <!-- Header-->
        <header id="header" class="header">
       <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left"> 
                    </div>
                </div>
                 <div class="col-sm-5" style="
                    -ms-flex: 0 0 41.666667%;
                    flex: 0 0 41.666667%;
                    max-width: 41.666667%;
                    maxlength:100px;">
                                    

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
    </div>
    </header>
     <div class="content mt-3">

            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success"><?php echo $fetch['r_name'];?>
                </span> Welcome To Travellog World.
                </div>
            </div>    

        </div>
    <div class="content mt-7">
        
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- LINEARICONS -->
        <link rel="stylesheet" href="fonts/linearicons/style.css">
        <!-- STYLE CSS -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="wrapper">
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
            <div class="inner" >
                <img src="images/image-1.png" alt="" class="image-1"></img>
                <form action="resort_user_profile_update.php?uid=<?php echo $_SESSION['r_id'];?>"  method="post" enctype="multipart/form-data" onsubmit="return Validate()" style="margin-top: 203px;">
                <h3>Update Your Profile</h3>
            <?php
            if(isset($_GET['error']))
                echo $_GET['error'];
            ?>
            
            
        
                    <div class="form-holder">
                        <span class="lnr lnr-user"></span>
                        <input type="text" name="nme" id="nme" class="form-control av-required"
                        av-message="Start with a Capital letter & Only alphabets without space are allowed!!"
                        title="First Name" placeholder="First Name" value="<?php echo $fetch['r_name'];?>"  required >
                    
                    </div>
                    
                    <script>        
                    function Validate() 
                    {
                        var val = document.getElementById('nme').value;

                        if (!val.match(/^[A-Z][A-Za-z]{2,}$/)) 
                        {
                            document.getElementById('msg1').innerHTML="";
                                        document.getElementById('nme').value = "";
                            return false;
                        }
                    document.getElementById('msg1').innerHTML=" ";
                        return true;
                    }
                    </script>
                    <div class="form-holder">
                    <span class="lnr lnr-user"></span>
                    <input type="text" name="lnme" id="lnme"  class="form-control av-required" av-message="Start with a Capital letter & Only alphabets without space are allowed" title="Last Name" placeholder="Last Name" value="<?php echo $fetch['r_lname'];?>" required onchange="Validate1();">
                    </div>
                    <span id="msg2" style="color:red;"></span>
                    <script>        
                    function Validate1() 
                    {
                        var val = document.getElementById('lnme').value;

                        if (!val.match(/^[A-Z][a-z]{0,}$/)) 
                        {
                            document.getElementById('msg2').innerHTML="";
                                        document.getElementById('lnme').value = "";
                            return false;
                        }
                    document.getElementById('msg2').innerHTML=" ";
                        return true;
                    }
                    </script>
                    <div class="form-holder">
                        <span class="lnr lnr-apartment"></span>
                        <input type="text" name="add" id="add" class="form-control av-required" av-message="Enter your Address" title="Address" placeholder="Address"  value="<?php echo $fetch['r_address'];?>" required >
                    </div>
                    <span id="msg3" style="color:red;"></span>
                    <div class="form-holder">
                    <span class="lnr lnr-calendar-full"></span>
                    <input type="date" name="dob" class="form-control"  min="1980-01-01" max="2010-12-30" title="Date of birth" placeholder="Date of Birth" max="<?php echo date("Y-m-d")?>" value="<?php echo $fetch['r_dob'];?>" selected required>
                    
                    </div>
                            
            <div class="form-holder">
            <span class="lnr lnr-user"></span>
            <input type="text" name="rname" id="rname" class="form-control" title="Resort Name" value="<?php echo $fetch1['re_name'];?>" readonly placeholder="Resort Name">
            </div>
            
            <div class="form-holder">
            <span class="lnr lnr-phone-handset"></span>
            <input type="text" name="phn"  max="10" id="phn" class="form-control av-phone" av-message="Enter your phone" title="Phone Number" onchange="Validat();" placeholder="Phone Number" value="<?php echo $fetch['r_phone'];?>" required >       
            </div>
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
                        <span class="lnr lnr-envelope"></span>
                        <input type="email" name="email" id="email" title="E-Mail" class="form-control av-email" av-message="Enter your email" placeholder="E-Mail" value="<?php echo $fetch['r_email'];?>" readonly required >
                    </div>          
            <div class="form-holder">
            <span class="lnr lnr-picture"></span>
                        <!-- upload upto 20 images!-->
            <input type="file" name="img" id="img" class="form-control" accept="image/jpg, image/JPG,image/JPEG, image/jpeg, image/png, image/PNG" onchange="return Validp();">
            <td><b><img src="Uploads/<?php echo $fetch['r_image'];?>" alt="fffgf" height="200" width="auto"/></img></td></tr>
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
                    
                    <button type="submit" name="submit" value="Update">Update
                        </button>
                        </div>
                    
                </form>
                <img src="images/image-2.png" alt="" class="image-2">
            </div>
        </div>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/main.js"></script>
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