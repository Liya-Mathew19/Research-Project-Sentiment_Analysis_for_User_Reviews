<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<?php
include 'admin_header.php';?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Travelog</title>
	<link rel="icon" type="image/ico" href="images/logo.png" />
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">



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


<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">
		<!-- STYLE CSS -->
		

        <div class="content mt-3">
	
				
				<!--<html>
				<style>
div.gallery {
  margin: 5px;
  border: 2px solid #ccc;
  float: center;
  width: 380px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: left;
}
</style>
</head>-->
<body>
<center><h1><font color="purple">RESORT DETAILS</h1></font><br><br>
<form action="#" method="post" enctype="multipart/form-data">
<?php
include 'dbconnect.php';
 include 'Rating.php';
$rating = new Rating();
$kid=$_GET['uid'];
$result=mysqli_query($con,"select * from tbl_addresort where h_id='$kid'");
$i=1;
while($row=mysqli_fetch_array($result))
{
	?>
<!--<div class="gallery">
  <a target="_blank" href="img_5terre.jpg">
    <img src="Uploads/<?php echo $row['h_image'];?>" alt="" height="281" width="246"/>
  </a>
  <div class="desc">Name&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<?php echo $row['h_name'];?><br>
Address&nbsp&nbsp:&nbsp<?php echo $row['h_address'];?><br>
Location&nbsp:&nbsp<?php echo $row['h_location'];?><br>
Phone&nbsp&nbsp&nbsp&nbsp:&nbsp<?php echo $row['h_phone'];?><br>
Url&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<?php echo $row['h_url'];?><br>
Email&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<?php echo $row['h_email'];?><br>
<center><br><a href="delete_resort.php?uid=<?php echo $row['h_id'];?>" onclick="return confirm('Are you sure??')"><img src="images/DeleteRed.png" style="width:54px"></td></tr>
<br><a href="admin_resort_view.php?>"><img src="images/fleche.png" width="35px" style=" padding-left: 370px;">Back To Previous Page</td></tr></a>-->
<div class="col-lg-12" style="border-style: groove;    padding: 32px;">
					<!-- Offers Grid -->

					<div class="offers_grid">

						<!-- Offers Item -->

						<div class="offers_item rating_4">
							<div class="row">
								<div class="col-lg-1 temp_col" ></div>
								<div class="col-lg-3 col-1680-4">
									<div class="offers_image_container">
										<!-- Image by https://unsplash.com/@kensuarez -->
										<div class="offers_image_background" style="background-image:url(Uploads/<?php echo $row['h_image'];?>"></div>
										<div class="offer_name"><a href="view_details.php?uid=<?php echo $row['h_id'];?>"><?php echo $row['h_name'];?></a></div>
									</div>
								</div>
								<div class="col-lg-8">
									<div class="offers_content">
										<!--<div class="offers_price">₹25,000<span>per night</span></div>
										<div class="rating_r rating_r_4 offers_rating" data-rating="0">
											<i></i>
											<i></i>
											<i></i>
											<i></i>
											<i></i>
										</div>-->
										<p class="offers_text" style="font-size:17px;">
										<span class="lnr lnr-apartment">&nbsp<b>ADDRESS :</b> <?php echo $row['h_address'];?></span><br><br>
										<span class="lnr lnr-location">&nbsp<b>LOCATION : </b><?php echo $row['h_location'];?></span><br><br>
										<span class="lnr lnr-map">&nbsp<b>DESCRIPTION :</b> <?php echo $row['h_des'];?></span><br><br>
										<span class="lnr lnr-phone">&nbsp<b>PHONE : </b><?php echo $row['h_phone'];?></span><br><br>
										<span class="lnr lnr-link">&nbsp<b>URL :</b> <?php echo $row['h_url'];?></span><br><br>
										<span class="lnr lnr-envelope">&nbsp<b>EMAIL :</b> <?php echo $row['h_email'];?></span><br><br>
										</p>
                                        <?php
                                       
                                        $result1=mysqli_query($con,"SELECT count(uf_rate) as total from tbl_userfeedback where h_id='$row[h_id]'");
                                        $data=mysqli_fetch_array($result1);
                                     
                                        ?>
                                        
        
										<?php
                                       // $sql=mysqli_query($con,"SELECT COUNT(uf_rate) FROM tbl_userfeedback where h_id='$kid'");
                                        $result=mysqli_query($con,"SELECT count(uf_rate) as total from tbl_userfeedback where h_id='$kid'");
                                        $data=mysqli_fetch_assoc($result);
                                       $result1=mysqli_query($con,"SELECT `uf_msg`,COUNT(`uf_msg`) AS `value_occurrence` FROM  `tbl_userfeedback` GROUP BY `uf_msg` ORDER BY `value_occurrence` DESC LIMIT    1;");
                                        $data1=mysqli_fetch_assoc($result1);
                                        //echo $data['total'];
                                        ?>

										<div class="offer_reviews">
                                            <div class="offer_reviews_content">
                                                
                                                <div class="offer_reviews_subtitle"><?php echo $data['total'];?> Reviews</div>
                                            </div>
                                            <?php

                                           
                                            $itemList = $rating->getItemList();
                                            
                                            $average = $rating->getRatingAverage($row["h_id"]);
                                            ?>
                                            <div class="offer_reviews_rating text-center"><?php printf('%.1f', $average); ?>
                                                
                                            </div>
                                            <?php
                                            if($average>=4)
                                            {
                                            ?>
                                            <div class="offer_reviews_title">very good</div>
                                            <?php
                                            }
                                            else if($average>=3 and $average<4)
                                            {
                                            ?>
                                            <div class="offer_reviews_title">Average</div>
                                            <?php
                                            }
                                            else 
                                            {
                                            ?>
                                            <div class="offer_reviews_title">Very Poor</div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                        
                                                
										 <!--<button type="button" class="btn btn-success">
										 <a href="admin_edit_resort.php"style="color:white;">Edit</a></button>-->
									</div>
								</div>

							</div>
						</div>
                    </div>
			  </div>  
            <!--<div ><a href="admin_resort_edit.php" style="color:red;">Edit</a></div><br><br>-->

			<center><a href="admin_resort_view.php"style="color:red;">Back to previous page</a></center>
<?php
				$i++;
}
?>
<!--</div>
</div>



<style>
table {
    border-collapse: collapse;
    width: 50%;
}

th, td {
    text-align: left;
    padding: 5px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>-->
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
