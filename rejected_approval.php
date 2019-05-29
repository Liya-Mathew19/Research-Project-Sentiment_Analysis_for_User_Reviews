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
                        <a href="admin_home.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Functionalities</h3><!-- /.menu-title -->
                    <li >
                        <a href="admin_add_resort.php" ><i class="menu-icon fa fa-building-o"></i>Add Resorts</a>
                        
                    </li>
                    <li >
                        <a href="admin_approve_request.php" > <i class="menu-icon fa fa-check"></i>Approve Requests</a>
                       
                    </li>
                    <!--<li>
                        <a href="admin_view_rating.php" ><i class="menu-icon fa fa-star"></i>View Rating</a>
                        
                    </li>-->

                    

                    <li>
                        <a href="view_feedback.php" > <i class="menu-icon fa fa-tasks"></i>View Feedback</a>
                        
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
                            <img class="user-avatar rounded-circle" src="images/admin.png" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="admin_profile.php"><i class="fa fa-user"></i> My Profile</a>

                            <a class="nav-link" href="admin_change_password.php"><i class="fa fa-user"></i> Change Password</a>

                            <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                    

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


        <div class="content mt-3"><h1><font color="Green"><center>REJECTED REQUESTS</h1></font><br>
				<?php
$res1=mysqli_query($con,"SELECT * FROM `tbl_addresort` where `h_status`='3'");
$row1=mysqli_fetch_array($res1);
if(empty($row1))
{
	echo "<br><br><center><font color=red size=3>No Rejected Requests Yet!!!</font></center>";
}
else
{
?>

<table>
<table border=3 width=70%>
<tr>
<th>SL.NO</th>
<th>NAME</th>
<th>ADDRESS</th>
<th>LOCATION</th>
<th>PHONE</th>
<th>URL</th>
<th>EMAIL</th>

</tr>
<?php
include 'dbconnect.php';

$res=mysqli_query($con,"SELECT * FROM `tbl_addresort` where `h_status`='3'");
	$i=1;
		
	while($row=mysqli_fetch_array($res))
	{
	?>
	<tr><td><center><?php echo $i?></td>
	<td><center><?php echo $row['h_name'];?></td>
<td><center><?php echo $row['h_address'];?></td>
<td><center><?php echo $row['h_location'];?></td>
<td><center><?php echo $row['h_phone'];?></td>
<td><center><?php echo $row['h_url'];?></td>
<td><center><?php echo $row['h_email'];?></td>
<?php
/*$s=$row['Status'];
if($s==1)
{
?>
<td><center><font color="green"><b><?php echo "Requested";?></b></td>
<?php
}
else if($s==0)
{
?><td><center><font color="green"><b><?php echo "Approved";?></b></td><?php }
else if($s==2)
{
?><td><center><font color="green"><b><?php echo "Serviced";?></b></td><?php }
else if($s==3)
{
?><td><center><font color="green"><b><?php echo "Rejected";?></b></td><?php }*/?>


<?php
$i++;
}}
?></table>
<br><br><a href="admin_approve_request.php" style="color:red">Back to previous page</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp


<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #867198;
    color: white;
}
</style>
	
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