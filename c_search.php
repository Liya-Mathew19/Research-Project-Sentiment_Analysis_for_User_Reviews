<!DOCTYPE html>
<html lang="en">
<head>
<?php
include 'dbconnect.php';
session_start();
$kid=$_SESSION['r_id'];

if(!isset($_SESSION['r_id']))
	{
		header("location:login.php");
	}
	?>
<title>Offers</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/offers_styles.css">
<link rel="stylesheet" type="text/css" href="styles/offers_responsive.css">
</head>

<body>

<div class="super_container">
	
	<!-- Header -->
	<header class="header">
		<!-- Main Navigation -->
<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start" style="    margin-top: -32px;">
						<div class="logo_container">
							<div class="logo"><a href="#"><img src="images/logo.png" alt="">travelog</a></div>
						</div>
						<div class="main_nav_container ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="customer_home.php?uid=<?php echo $_SESSION['r_id'];?>">HOME</a></li>
								<li class="main_nav_item"><a href="customer_profile.php?uid=<?php echo $_SESSION['r_id'];?>">PROFILE</a></li>
								<li class="main_nav_item"><a href="cust_search.php?uid=<?php echo $_SESSION['r_id'];?>">RESORT</a></li>
								
								<li class="main_nav_item"><a href="feedback.php?uid=<?php echo $_SESSION['r_id'];?>">FEEDBACK</a></li>
								
								<li class="main_nav_item"><a href="logout.php">Logout</a></li>
  </li>
								
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

	

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/about_background.jpg"></div>
		<div class="home_content">
			<div class="home_title">RESORT DETAILS</div>
		</div>
	</div>

	<!-- Offers -->

	<div class="offers">
	<div class="container">
			<div class="row">
				<div class="col-lg-1 temp_col"></div>
				<div class="col-lg-11">
				
				</div>
				</div>
				</div>
				<body>
<form action="#" method="post" enctype="multipart/form-data">
<?php
include 'Rating.php';
$rating = new Rating();
if(isset($_POST['submit']))
{
	$a=$_POST['a'];
$result=mysqli_query($con,"select * from tbl_addresort a1 LEFT JOIN tbl_rooms r1 on a1.h_id=r1.h_id  where a1.h_location like '$a%' and r1.rm_status='1'");
//$i=1;

while($row=mysqli_fetch_array($result))
{
?>
				<div class="col-lg-12">
					<!-- Offers Grid -->
					

					<div class="offers_grid">

						<!-- Offers Item -->

						<div class="offers_item rating_4">
							<div class="row">
								<div class="col-lg-1 temp_col"></div>
								<div class="col-lg-3 col-1680-4">
									<div class="offers_image_container">
										<!-- Image by https://unsplash.com/@kensuarez -->
										<div class="offers_image_background" style="background-image:url(Uploads/<?php echo $row['h_image'];?>"></div>
										<div class="offer_name" name="submit" value="submit"><a href="resort_view.php?uid=<?php echo $row['h_id'];?>"><?php echo $row['h_name'];?></a></div>
							
									</div>
								</div>
								<div class="col-lg-8">
									<div class="offers_content">
										
										
									<p class="offers_text" style="font-size:14px;">
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
										<div class="button book_button"><a href="resort_view.php?uid=<?php echo $row['h_id'];?>">View More<span></span><span></span><span></span></a></div>
										
										<div class="offer_reviews">
											<div class="offer_reviews_content">
												
												<div class="offer_reviews_subtitle"><?php echo $data['total'];?> Reviews</div>
											</div>
											<?php

											
											$itemList = $rating->getItemList();
											
											$average = $rating->getRatingAverage($row["h_id"]);
											?>
										

											<div class="offer_reviews_rating text-center"><?php printf('%.1f', $average); ?></div>
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
			
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>		
	</div>

	</div>
	

</form>


<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/offers_custom.js"></script>
		<?php				
}//$i++;
}
?>	
</body>

</html>

	