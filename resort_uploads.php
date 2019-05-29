<?php
/*-------------------------------------------------------+
| File Upload In PHP With Database
| http://www.kvcodes.com/
+--------------------------------------------------------+
| Author: Varadha  
| Email: admin@kvcodes.com
+--------------------------------------------------------+*/
$kv = new mysqli('localhost', 'root', '', 'travalog_db1');
//$rid=$_GET['uid'];
/*$hid=$_POST['id'];
echo $hid;*/
$hid=$_POST['resortnme'];
echo $hid;
 $res1=mysqli_query($kv,"select * from `tbl_addresort` where `h_id`='$hid' ");
 $fetch1=mysqli_fetch_array($res1);
 //$hid=$fetch1['h_id'];
//echo $hid;




if ($kv->connect_error) { // Check connection
 die("Connection failed: " . $kv->connect_error);
} 

if(count($_FILES['attachment']['name']) > 0){
    		
		// File Error Checking 
		foreach($_FILES['attachment']['error'] as $error)
		{
			if($error)
			{
			 header("Location: resort_photos.php?error1=Insert images!!");
			

			}		
				 		
		}
		
		// File size Resctrictions
		$maxsize = 2 * 1024 * 1024; //2MB maximum allowed.
		foreach($_FILES['attachment']['size'] as $size) {
			if($size > $maxsize)
				
			 header("Location: resort_photos.php?error2=File size is larger than the allowed limit.!!");
			
				
		}
		
		// File Type Restrictions
		$allowed = array( 'jpg', 'jpeg', 'gif', 'png', 'bmp');
		foreach($_FILES['attachment']['name'] as $name) {
			$type = pathinfo($name, PATHINFO_EXTENSION); 
			if(!in_array($type, $allowed)) 
				 header("Location: resort_photos.php?error3=Please select a valid file format.!!");
			
				
			
		}
		$Kv_items =  array();	
		$Kv = 0;
		$uploads_dir = "Uploads/";
		foreach($_FILES['attachment']['name'] as $filename) {
			move_uploaded_file($_FILES["attachment"]["tmp_name"][$Kv], $uploads_dir. basename($filename)); 
			mysqli_query($kv, "INSERT INTO `tbl_images` (`h_id`,`i_filename`, `i_type`, `i_size`, `i_date`,`i_status`) values ('$hid','".$_FILES["attachment"]["name"][$Kv]."', '".$_FILES["attachment"]["type"][$Kv]."', '".$_FILES["attachment"]["size"][$Kv]."', '".date('Y-m-d')."','2')");
			if(mysqli_insert_id($kv)){
				$Kv++;
				$Kv_items[] = mysqli_insert_id($kv);  
			}
				//header("Location: resort_add_photos.php?success='TRUE'");
				header("Location: resort_view_photos.php?uid=$hid");
		} 
		
		?>
		
		<?php

		
} 

$kv->close();

?>