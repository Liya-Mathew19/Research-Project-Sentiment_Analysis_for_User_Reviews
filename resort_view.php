<!DOCTYPE html>
<html lang="en">
<head>
<?php
include 'dbconnect.php';
session_start();
if(!isset($_SESSION['r_id']))
	{
		header("location:login.php");
	}
	?>
<title>Single Listing</title>
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
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<meta charset="utf-8" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>

<div class="super_container">
	
	<!-- Header -->

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
		<form action="#" method="post" enctype="multipart/form-data" onsubmit="return Validate()" style="margin-top: 20px;" name='sent_data_form'>


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
					
							</div>

							<!-- Listing Image -->

							<div class="hotel_image">
								<img src="Uploads/<?php echo $row['h_image'];?>" alt="">
								
							</div>

							<!-- Hotel Gallery -->

							<div class="hotel_gallery">
								<div class="hotel_slider_container">
									<div class="owl-carousel owl-theme hotel_slider">

										<!-- Hotel Gallery Slider Item -->
										<div class="owl-item">
											<a class="colorbox cboxElement" href="images/listing_1.jpg">
												<img src="images/listing_thumb_1.jpg" alt="https://unsplash.com/@jbriscoe">
											</a>
										</div>

										<!-- Hotel Gallery Slider Item -->
										<div class="owl-item">
											<a class="colorbox cboxElement" href="images/listing_2.jpg">
												<img src="images/listing_thumb_2.jpg" alt="https://unsplash.com/@grovemade">
											</a>
										</div>

										<!-- Hotel Gallery Slider Item -->
										<div class="owl-item">
											<a class="colorbox cboxElement" href="images/listing_3.jpg">
												<img src="images/listing_thumb_3.jpg" alt="https://unsplash.com/@fransaraco">
											</a>
										</div>

										<!-- Hotel Gallery Slider Item -->
										<div class="owl-item">
											<a class="colorbox cboxElement" href="images/listing_4.jpg">
												<img src="images/listing_thumb_4.jpg" alt="https://unsplash.com/@workweek">
											</a>
										</div>

										<!-- Hotel Gallery Slider Item -->
										<div class="owl-item">
											<a class="colorbox cboxElement" href="images/listing_5.jpg">
												<img src="images/listing_thumb_5.jpg" alt="https://unsplash.com/@workweek">
											</a>
										</div>

										<!-- Hotel Gallery Slider Item -->
										<div class="owl-item">
											<a class="colorbox cboxElement" href="images/listing_6.jpg">
												<img src="images/listing_thumb_6.jpg" alt="https://unsplash.com/@avidenov">
											</a>
										</div>

										<!-- Hotel Gallery Slider Item -->
										<div class="owl-item">
											<a class="colorbox cboxElement" href="images/listing_7.jpg">
												<img src="images/listing_thumb_7.jpg" alt="https://unsplash.com/@pietruszka">
											</a>
										</div>

										<!-- Hotel Gallery Slider Item -->
										<div class="owl-item">
											<a class="colorbox cboxElement" href="images/listing_8.jpg">
												<img src="images/listing_thumb_8.jpg" alt="https://unsplash.com/@rktkn">
											</a>
										</div>

										<!-- Hotel Gallery Slider Item -->
										<div class="owl-item">
											<a class="colorbox cboxElement" href="images/listing_9.jpg">
												<img src="images/listing_thumb_9.jpg" alt="https://unsplash.com/@mindaugas">
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
											<div class="button book_button trans_200"><a href="cust_booking.php?uid=<?php echo $row['rm_id'];?>">book<span></span><span></span><span></span></a></div>
										</div>
									</div>
								</div>	
							</div>

							

						</div>
						<?php
}
?>
<style>
    .pb-cmnt-container {
        font-family: Lato;
        margin-top: 100px;
    }

    .pb-cmnt-textarea {
        resize: none;
        padding: 20px;
        height: 130px;
        width: 100%;
        border: 7px solid #9E9E9E;;
    }
</style>
						<div class="container">
						<div class="container pb-cmnt-container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-info">
                <div class="panel-body">
           

                    <textarea class="pb-cmnt-textarea" required placeholder="Write your comment here.." name='sent_data' id='sent_data'></textarea>
                        <button class="btn btn-primary pull-right" type="submit" name="submit_data" onclick="loadDoc()">Submit</button>

                        <?php
include ('Research/lib/sentiment_analyser.class.php');//including the class file
$sa = new SentimentAnalysis();//creating an object of the class
$sa->initialize();//call to fn.initialize where all the data files are being initialized

/*if (isset($_POST['save_dats'])) {
	$rating = $_POST['rating'];
	$text = $_POST['text'];
	$sa->import_sentiment_custom($text,$rating);
	die();

} else {*/ ?><!doctype html>

  <!--<link rel="stylesheet" href="Research/css/style.css?v=1.0">-->

<body>

	<div class='wrapper'>

			<?php
			if (isset($_POST['sent_data'])){ ?>
				<div class='returned_data'>
					
					<?php

						//$sent_data = explode("\n",$_POST['sent_data']);

function explodeX( $delimiters, $string )
{
    return explode( chr( 1 ), str_replace( $delimiters, chr( 1 ), $string ) );
}
//$list = 'Thing 1&Thing 2,Thing 3|Thing 4';

$t1 = explodeX( array('.', ',', '|' ), $_POST['sent_data'] );


function convertOne($str) {
$words = array('good', 'nice', 'excellent', 'clean','XXXXXXXXXXXXXXXX','very good','eco friendly','super','marvellous','extravagent'); 
 //Add more words here
if(preg_match('/\b('.implode('|', $words).')\b/', $str)) {return true;}
}

        $t2 = '';

foreach($t1 as $t)
{
        if(convertOne($t))
                        $t2 .= $t.'.';

}                                               
        
        $sent_data = explode("\n",$t2);       
        $sent_data = explode("\n",$_POST['sent_data']);

                        echo '<br>';

                        $check = $sa->analyse($_POST['sent_data']);//analyse the given text data

                //var_dump($check);
                $scores = $sa->return_sentiment_rating();
                //var_dump($scores);

                $ratings = $sa->return_sentiment_calculations();

               // echo $ratings;
						$min_submit_lev_score = $sa->return_levenshtein_min_submit_distance();
						$analysed_array = array();
						$i = 0;
						foreach ($sent_data as $dataset) {
							$original_data = $dataset;
							
							$check = $sa->analyse($dataset);
							$rating = $sa->return_sentiment_rating();
							$ratings_data = $sa->return_sentiment_calculations();
							//echo $ratings_data;
							$analysed_array[$i]['dataset'] = implode(' ',$sa->return_tokenized_mention());
							$analysed_array[$i]['original_dataset'] = $original_data;
							$analysed_array[$i]['rating'] = $rating;
							$analysed_array[$i]['preferred_match_type'] = $sa->return_preferred_match_type();
							$analysed_array[$i]['sentiment_analysis'] = $sa->return_sentiment_analysis();
							$analysed_array[$i]['proximity_analysis'] = $sa->return_phrase_proximity();
							$i++;
							
						}
					

						foreach($analysed_array as $key => $output) {
							$allow_submission = false;
							//var_dump($output);
							if ($output['preferred_match_type'] == 'sentiment_analysis' || $output['proximity_analysis'][1]['levenshtein'] > $min_submit_lev_score) { 
								if (count(explode(" ",$output['dataset'])) < 4) {
									$allow_submission = false;
								} else {
									$allow_submission = true;
								}
							} else {
								$allow_submission = false;
							}
							
							echo "<tr id='tr_".$key."'>";
							if ($allow_submission) {  
								//echo "<td><button class='sentiment_confirm' sid='".$key."'>Add to phrase dataset</button></td>"; 
							} 
							else 
								{ 
									echo "<td>&nbsp;</td>";
								}
							/*echo "<td>".$output['preferred_match_type']."</td>";
							echo "<td><input type='text' id='sentiment_rating_".$key."' class='sentiment_rating' value='".$output['rating']."' /></td>";
							echo "<td><input type='text' id='sentiment_text_".$key."' value='".$output['dataset']."' /></td>";
							echo "</tr>";*/
							//echo $output['rating'];
						}
						include 'dbconnect.php';
						$data=$output['dataset'];
/* $token = strtok($data, " ");
 
while ($token !== false)
   {
   echo "$token<br>";
   $token = strtok(" ");
   }*/

			//$data=$output['dataset'];
			$o=$output['rating'];
			$d=date("Y-m-d");
			$a=$_SESSION['r_id'];
			$sql=mysqli_query($con,"SELECT * FROM `tbl_addresort` WHERE `h_id`='$kid'");
			$sql=mysqli_query($con,"SELECT * FROM `tbl_registration` WHERE `r_id`='$a'");
		$sql=mysqli_query($con,"INSERT INTO `tbl_userfeedback`(`r_id`, `h_id`, `uf_msg`, `uf_date`, `uf_rate`, `uf_status`) VALUES ('$a','$kid','$data','$d','$o','1')");
						echo "</div>";
					?>
				</div>
			</pre>
<?php
				}
			?>


	<?php
	/*
		$check = $sa->analyse("The customer service from bestbuy was incredible and their delivery window was amazing!");
		var_dump($check);
		$scores = $sa->return_sentiment_rating();
		var_dump($scores);

		$ratings = $sa->return_sentiment_calculations();
		echo $ratings;
	*/
	?>

		
	</div>

  	<script src="Research/js/jquery.min.js"></script>
  	<script src="Research/js/scripts.js"></script>
</body>
</html>

<?php } ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

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
				<h4>Rating and Reviews</h4>
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



<br><br><br>
 <a href="?uid=<?php echo $kid;?>&name=rooms#gr" name="room" >Rooms</a>&nbsp&nbsp&nbsp&nbsp&nbsp
 <a href="?uid=<?php echo $kid;?>&name=food#gr" name="food" >Food</a>&nbsp&nbsp&nbsp&nbsp&nbsp
 <a href="?uid=<?php echo $kid;?>&name=resort#gr" name="resort" >Resort</a>&nbsp&nbsp&nbsp&nbsp&nbsp
  <a href="?uid=<?php echo $kid;?>&name=excellent#gr" name="excellent" >Excellent</a>&nbsp&nbsp&nbsp&nbsp&nbsp
 <a href="?uid=<?php echo $kid;?>&name=amazing#gr" name="amazing" >Amazing</a>&nbsp&nbsp&nbsp&nbsp&nbsp
 <a href="?uid=<?php echo $kid;?>&name=very good#gr" name="very good" >Very good</a>&nbsp&nbsp&nbsp&nbsp&nbsp
 <a href="?uid=<?php echo $kid;?>" name="clear" >Clear all filters</a>
<br><br><br>


<a name="gr"></a>

<?php
include 'dbconnect.php';
$kid1=$_SESSION['r_id'];
//Naive pattern matching algorithm
if(isset($_GET['name']))
{
	function search($pat, $txt) 
{ 
    $M = strlen($pat); 
    $N = strlen($txt); 

    for ($i = 0; $i <= $N - $M; $i++) 
    { 
 
        for ($j = 0; $j < $M; $j++) 
            if ($txt[$i + $j] != $pat[$j]) 
                break; 
    } 
} 
    $pat=$_GET['name']; 

    $res1=mysqli_query($con,"SELECT * FROM `tbl_userfeedback` f1 LEFT JOIN `tbl_registration` r1 on f1.r_id=r1.r_id ");
	while($row1=mysqli_fetch_array($res1))
	{

	$txt=$row1['uf_msg'];
    search($pat, $txt); 
	if(strpos($txt, $pat) !== false)
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
								<div>

								<div class="review" id="reviewid">
									<div class="row">
										<div class="col-lg-1">
											<div class="review_image">
												<img src="Uploads/<?php echo $row1['r_image'];?>" alt="IMAGE">
											</div>
										</div>
										<div class="col-lg-11">
											<div class="review_content">
												<div class="review_title_container">
													<div class="review_title"><?php echo $row1['r_name'];?>	
													</div>
													<div class="review_rating"><?php echo $row1['uf_rate'];?>

													</div>
													<div>
													<?php 
													if ($row1['uf_rate']>2.5)
													
														echo "<span class='badge badge-pill badge-success'>POSITIVE</span>";
														else if($row1['uf_rate']<2.5)
															echo "<span class='badge badge-danger'>NEGATIVE</span>";
														else if($row1['uf_rate']=2.5)
															echo "<span class='badge badge-warning'>NEUTRAL</span>";
														else
															echo "Invalid";
														//me  echo $ratings;
													?>
													</div>
													<div>
													

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
												</div>
												<div class="review_text">
													
													<p><?php 
													$str = preg_replace("/($pat)/i","<mark><b>$1</b></mark>",$txt);
													echo $str;?></p>
												</div>
											
												<div class="review_date"><?php echo $row1['uf_date'];?></div>
											</div>
										</div>
									</div>
								</div>
	
	
	
	
	<?php
	}
    
    } 
	

}
else{
	$res1=mysqli_query($con,"SELECT * FROM `tbl_userfeedback` f1 LEFT JOIN `tbl_registration` r1 on f1.r_id=r1.r_id where f1.h_id='$kid'");












//$i=1;
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

<script>
function load1() {
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
  xhttp.open("GET", "search.php", true);
  xhttp.send();
}

</script>


<!-- Comment Box - END -->




						<!-- Reviews -->

						

								<!-- Review -->
								<div>

								<div class="review" id="reviewid">
									<div class="row">
										<div class="col-lg-1">
											<div class="review_image">
												<img src="Uploads/<?php echo $row1['r_image'];?>" alt="IMAGE">
											</div>
										</div>
										<div class="col-lg-11">
											<div class="review_content">
												<div class="review_title_container">
													<div class="review_title"><?php echo $row1['r_name'];?>	
													</div>
													<div class="review_rating"><?php echo $row1['uf_rate'];?>

													</div>
													<div>
													<?php 
													if ($row1['uf_rate']>2.5)
													
														echo "<span class='badge badge-pill badge-success'>POSITIVE</span>";
														else if($row1['uf_rate']<2.5)
															echo "<span class='badge badge-danger'>NEGATIVE</span>";
														else if($row1['uf_rate']=2.5)
															echo "<span class='badge badge-warning'>NEUTRAL</span>";
														else
															echo "Invalid";
														//me  echo $ratings;
													?>
													</div>
													<div>
													

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
												</div>
												<div class="review_text">
													<p><?php echo $row1['uf_msg'];?></p>
												</div>
											
												<div class="review_date"><?php echo $row1['uf_date'];?></div>
											</div>
										</div>
									</div>
								</div>
								<?php
}
}
?>

								</div>

							</div>
						</div></div>
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
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/single_listing_custom.js"></script>

</body>


</html>