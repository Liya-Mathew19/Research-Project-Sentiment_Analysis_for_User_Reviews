<?php
$kv = new mysqli('localhost', 'root', '', 'travalog_db1');

if ($kv->connect_error) { // Check connection
 die("Connection failed: " . $kv->connect_error);
}


if(count($_FILES['attachment']['name']) > 0)
{
    		
		// File Error Checking 
		/*foreach($_FILES['attachment']['error'] as $error)
		{
			if($error)
			{
			 header("Location: admin_add_images.php?error1=Insert images!!");
			//die( "Error: ".$error);

			}		
				 		
		}
		
		/* File size Resctrictions
		$maxsize = 2 * 1024 * 1024; //2MB maximum allowed.
		foreach($_FILES['attachment']['size'] as $size) {
			if($size > $maxsize)
				
			 header("Location: admin_add_images.php?error2=File size is larger than the allowed limit.!!");
			
				//die("Error: File size is larger than the allowed limit.");	
		}
		
		/* File Type Restrictions
		$allowed = array( 'jpg', 'jpeg', 'gif', 'png', 'bmp');
		foreach($_FILES['attachment']['name'] as $name) 
		{
			$type = pathinfo($name, PATHINFO_EXTENSION); 
			if(!in_array($type, $allowed)) 
				 header("Location: admin_add_images.php?error3=Please select a valid file format.!!");
			
				//die("Error: Please select a valid file format.-".$type);	
			
		}*/
		$Kv_items =  array();	
		$Kv = 0;
		$u=$_POST['resortnme'];
		$uploads_dir = "Uploads/";
		foreach($_FILES['attachment']['name'] as $filename) {
			move_uploaded_file($_FILES["attachment"]["tmp_name"][$Kv], $uploads_dir. basename($filename)); 
			mysqli_query($kv, "INSERT INTO tbl_images (h_id,i_filename, i_type, i_size, i_date,i_status) values ('$u','".$_FILES["attachment"]["name"][$Kv]."', '".$_FILES["attachment"]["type"][$Kv]."', '".$_FILES["attachment"]["size"][$Kv]."', '".date('Y-m-d')."','1')");
			if(mysqli_insert_id($kv)){
				$Kv++;
				$Kv_items[] = mysqli_insert_id($kv);  
			}
				 header("Location: admin_add_images.php?success=true");
				 exit;
		} 
		/*if(count($Kv_items))
		{
			
			header("Location: resort_photos.php?success='TRUE'");
			//echo count($Kv_items).' Files Inserted Successfully!' ; 
		}*/
		?>
		
		<?php
		//header("Location:resort_photos.php");
		

}
$kv->close();

?>