<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/single_listing_styles.css">
<link rel="stylesheet" type="text/css" href="styles/single_listing_responsive.css">

<meta charset="utf-8" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="plugins/font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>

<?php 
include 'admin_header.php';?>




	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/single_background.jpg"></div>
		<div class="home_content">
			<div class="home_title">RESORT DETAILS</div>
		</div>
	</div>

	<!-- Offers -->

	<div class="listing">

		<!-- Search -->

		<div class="search">
			<div class="search_inner">

				<!-- Search Contents -->
				
				<div class="container fill_height no-padding">
					<div class="row fill_height no-margin">
						<div class="col fill_height no-padding">


							</div>
						</div>
					</div>
				</div>	
			</div>	
		</div>
<?php

$kid =$_GET['uid'];

$result=mysqli_query($con,"select * from tbl_addresort where h_id ='$kid'");
while($row=mysqli_fetch_array($result))
{
	?>
		<!-- Single Listing -->
		<form action="userfeedback_action.php?uid1=<?php echo $kid;?>" method="post" enctype="multipart/form-data" onsubmit="return Validate()" style="margin-top: 20px;">


		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="single_listing">
						
						<!-- Hotel Info -->

						<div class="hotel_info">

							<!-- Title -->
							<div class="hotel_title_container d-flex flex-lg-row flex-column">
								<div class="hotel_title_content">
									<h1 class="hotel_title"><?php echo $row['h_name'];?></h1>
									
									
								</div>
								<div class="hotel_title_button ml-lg-auto text-lg-right">
									<!--<div class="button book_button trans_200"><a href="login.php">book<span></span><span></span><span></span></a></div>-->
									
								</div>
							</div>

							<!-- Listing Image -->

							<div class="hotel_image">
								<img src="Uploads/<?php echo $row['h_image'];?>" alt="">
								
							</div>

							<!-- Hotel Gallery -->
							<?php

$kid =$_GET['uid'];
$results=mysqli_query($con,"select * from tbl_images where h_id ='$kid'");
while($rows=mysqli_fetch_array($results))
{
//echo "<script>console.log( '".$rows['h_id']." ' );</script>";
	?>

							<div class="hotel_gallery">
								<div class="hotel_slider_container">
									<div class="owl-carousel owl-theme hotel_slider">

										<!-- Hotel Gallery Slider Item -->
										<div class="owl-item">
											<a class="colorbox cboxElement" href="Uploads/<?php echo $rows['i_filename'];?>">
												<img src="Uploads/<?php echo $rows['i_filename'];?>" alt="">
											</a>
										</div>
									</div>

									<!-- Hotel Slider Nav - Prev -->
									<div class="hotel_slider_nav hotel_slider_prev">
										<svg version="1.1" id="Layer_6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
											<defs>
												<linearGradient id='hotel_grad_prev'>
													<stop offset='0%' stop-color='#fa9e1b'/>
													<stop offset='100%' stop-color='#8d4fff'/>
												</linearGradient>
											</defs>
											<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
											M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
											C22.545,2,26,5.541,26,9.909V23.091z"/>
											<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
											11.042,18.219 "/>
										</svg>
									</div>
									
									<!-- Hotel Slider Nav - Next -->
									<div class="hotel_slider_nav hotel_slider_next">
										<svg version="1.1" id="Layer_7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
											<defs>
												<linearGradient id='hotel_grad_next'>
													<stop offset='0%' stop-color='#fa9e1b'/>
													<stop offset='100%' stop-color='#8d4fff'/>
												</linearGradient>
											</defs>
										<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
										M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
										C22.545,2,26,5.541,26,9.909V23.091z"/>
										<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
										17.046,15.554 "/>
										</svg>
									</div>

								</div>
							</div>
<?php
}?>
							<!-- Hotel Info Text -->

							<div class="hotel_info_text">
								<p><?php echo $row['h_des'];?></p>
							</div>

							<!-- Hotel Info Tags -->

							<div class="hotel_info_tags">
								<ul class="hotel_icons_list">
									<li class="hotel_icons_item"><img src="images/post.png" alt=""></li>
									<li class="hotel_icons_item"><img src="images/compass.png" alt=""></li>
									<li class="hotel_icons_item"><img src="images/bicycle.png" alt=""></li>
									<li class="hotel_icons_item"><img src="images/sailboat.png" alt=""></li>
								</ul>
							</div>

						</div>
						
						<!-- Rooms -->
						<?php

$kid =$_GET['uid'];

$result=mysqli_query($con,"select * from tbl_rooms where h_id ='$kid'");
while($row=mysqli_fetch_array($result))
{
	?>

						<div class="rooms">

							<!-- Room -->
							<div class="room">

								<!-- Room -->
								<div class="row">
									<div class="col-lg-2">
										<div class="room_image"><img src="Uploads/<?php echo $row['rm_image'];?>" alt="https://unsplash.com/@saaout"></div>
									</div>
									<div class="col-lg-7">
										<div class="room_content">
											<div class="room_title"><?php echo $row['rm_cat'];?></div>
											<div class="room_price">Package:<?php echo $row['rm_package'];?></div>
											<div class="room_text">Bed:<?php echo $row['rm_bed'];?></div>
											<div class="room_extra">Number of Rooms:<?php echo $row['rm_number'];?></div>
										</div>
									</div>
									<div class="col-lg-3 text-lg-right">
										<div class="room_button">
											<!--<div class="button book_button trans_200"><a href="login.php">book<span></span><span></span><span></span></a></div>-->
										</div>
									</div>
								</div>	
							</div>

							

						</div>
						<?php
}
?>

							<div class="reviews">
							<div class="reviews_title">reviews</div>
							<div class="reviews_container">

<?php
include 'Rating.php';
	$rating = new Rating();
	$itemList = $rating->getItemList();
	foreach($itemList as $item){
		$average = $rating->getRatingAverage($item["h_id"]);
		$itemDetails = $rating->getItem($_GET['uid']);
	?>
	<?php } ?>	
		
	<?php	
	$itemRating = $rating->getItemRating($_GET['uid']);	
	$ratingNumber = 0;
	$count = 0;
	$fiveStarRating = 0;
	$fourStarRating = 0;
	$threeStarRating = 0;
	$twoStarRating = 0;
	$oneStarRating = 0;	
	foreach($itemRating as $rate){
		$ratingNumber+= $rate['uf_rate'];
		$count += 1;
		if($rate['uf_rate'] >4.5 and  $rate['uf_rate'] <=5) {
			$fiveStarRating +=1;
		} else if($rate['uf_rate'] >3.5 and  $rate['uf_rate'] <=4.5) {
			$fourStarRating +=1;
		} else if($rate['uf_rate']> 2.5 and  $rate['uf_rate'] <=3.5) {
			$threeStarRating +=1;
		} else if($rate['uf_rate'] >1.5 and  $rate['uf_rate'] <=2.5) {
			$twoStarRating +=1;
		} else if($rate['uf_rate'] >0 and  $rate['uf_rate'] <=1) {
			$oneStarRating +=1;
		}
	}
	$average = 0;
	if($ratingNumber && $count) {
		$average = $ratingNumber/$count;
	}	
	?>		
	<br>		
	<div id="ratingDetails"> 		
		<div class="row">			
			<div class="col-sm-3">				
				
				<h2 class="bold padding-bottom-7"><?php printf('%.1f', $average); ?> <small>/ 5</small></h2>				
				<?php
				$averageRating = round($average, 0);
				for ($i = 1; $i <= 5; $i++) {
					$ratingClass = "btn-default btn-grey";
					if($i <= $averageRating) {
						$ratingClass = "btn-warning";
					}
				?>
				<button type="button" class="btn btn-sm <?php echo $ratingClass; ?>" aria-label="Left Align">
				  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
				</button>	
				<?php } ?>				
			</div>
			<div class="col-sm-3">
				<?php
				$fiveStarRatingPercent = round(($fiveStarRating/5)*100);
				$fiveStarRatingPercent = !empty($fiveStarRatingPercent)?$fiveStarRatingPercent.'%':'0%';	
				
				$fourStarRatingPercent = round(($fourStarRating/5)*100);
				$fourStarRatingPercent = !empty($fourStarRatingPercent)?$fourStarRatingPercent.'%':'0%';
				
				$threeStarRatingPercent = round(($threeStarRating/5)*100);
				$threeStarRatingPercent = !empty($threeStarRatingPercent)?$threeStarRatingPercent.'%':'0%';
				
				$twoStarRatingPercent = round(($twoStarRating/5)*100);
				$twoStarRatingPercent = !empty($twoStarRatingPercent)?$twoStarRatingPercent.'%':'0%';
				
				$oneStarRatingPercent = round(($oneStarRating/5)*100);
				$oneStarRatingPercent = !empty($oneStarRatingPercent)?$oneStarRatingPercent.'%':'0%';
				
				?>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">5 <span class="fa fa-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $fiveStarRatingPercent; ?>">
							<span class="sr-only"><?php echo $fiveStarRatingPercent; ?></span>
						  </div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;"><?php echo $fiveStarRating; ?></div>
				</div>
				
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">4 <span class="fa fa-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $fourStarRatingPercent; ?>">
							<span class="sr-only"><?php echo $fourStarRatingPercent; ?></span>
						  </div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;"><?php echo $fourStarRating; ?></div>
				</div>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">3 <span class="fa fa-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $threeStarRatingPercent; ?>">
							<span class="sr-only"><?php echo $threeStarRatingPercent; ?></span>
						  </div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;"><?php echo $threeStarRating; ?></div>
				</div>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">2 <span class="fa fa-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $twoStarRatingPercent; ?>">
							<span class="sr-only"><?php echo $twoStarRatingPercent; ?></span>
						  </div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;"><?php echo $twoStarRating; ?></div>
				</div>
				<div class="pull-left">
					<div class="pull-left" style="width:35px; line-height:1;">
						<div style="height:9px; margin:5px 0;">1 <span class="fa fa-star"></span></div>
					</div>
					<div class="pull-left" style="width:180px;">
						<div class="progress" style="height:9px; margin:8px 0;">
						  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $oneStarRatingPercent; ?>">
							<span class="sr-only"><?php echo $oneStarRatingPercent; ?></span>
						  </div>
						</div>
					</div>
					<div class="pull-right" style="margin-left:10px;"><?php echo $oneStarRating; ?></div>
				</div>
			</div>		
		</div>
	</div>
</div>
<!-- Comment Box - START 
<form action="userfeedback_action.php" method="post" enctype="multipart/form-data" onsubmit="return Validate()" style="margin-top: 20px;">-->
<?php
include 'dbconnect.php';
$kid1=$_SESSION['r_id'];
$res1=mysqli_query($con,"SELECT * FROM `tbl_userfeedback` f1 LEFT JOIN `tbl_registration` r1 on f1.r_id=r1.r_id where f1.h_id='$kid'");
$i=1;
while($row1=mysqli_fetch_array($res1))
{
	
?>


							<script>
function loadDoc() {
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
  xhttp.open("GET", "resort_view.php", true);
  xhttp.send();
}

</script>



<!-- Comment Box - END -->




						<!-- Reviews -->

						

								<!-- Review -->
								
								<div class="review">
									<div class="row">
										<div class="col-lg-1">
											<div class="review_image">
												<img src="Uploads/<?php echo $row1['r_image'];?>" alt="https://unsplash.com/@saaout">
											</div>
										</div>
										<div class="col-lg-11">
											<div class="review_content">
												<div class="review_title_container">
													<div class="review_title"><?php echo $row1['r_name'];?>&nbsp<?php echo $row1['r_lname'];?></div>
													<div class="review_rating"><?php echo $row1['uf_rate'];?></div>
													<span id="stars<?php echo $row1['uf_id'];?>"></span>

<script type="text/javascript">
	//alert('<?php echo $row1['uf_rate'];?>');
document.getElementById("stars<?php echo $row1['uf_id'];?>").innerHTML = getStars(<?php echo $row1['uf_rate'];?>);
function getStars(rating) {

  // Round to nearest half
  rating = Math.round(rating * 2) / 2;
  let output = [];

  // Append all the filled whole stars
  for (var i = rating; i >= 1; i--)
    output.push('<i class="fa fa-star" aria-hidden="true" style="color: gold;"></i>&nbsp;');

  // If there is a half a star, append it
  if (i == .5) output.push('<i class="fa fa-star-half-o" aria-hidden="true" style="color: gold;"></i>&nbsp;');

  // Fill the empty stars
  for (let i = (5 - rating); i >= 1; i--)
    output.push('<i class="fa fa-star-o" aria-hidden="true" style="color: gold;"></i>&nbsp;');

  return output.join('');

}
</script>
												</div>
												<div class="review_text">
													<p><?php echo $row1['uf_msg'];?></p>
												</div>
												
												<div class="review_date"><?php echo $row1['uf_date'];?></div>
											</div>
										</div>
									</div>
									<!--<img src="images/unlike.png">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="images/unlike.png">-->
								</div>
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

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<!--<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
--><script src="js/single_listing_custom.js"></script>
<?php
}
?>
</body>


</html>