   
<?php
include 'dbconnect.php';
$text  = "resort is nice. rooms are a bit old. earlier i thought it had independent cottages. but it was like rooms best thing of this resort. a better was courteous nature is excellent. of employees everyone was so polite and helped us in every little way ";
$token = strtok($text, " ");
 
while ($token !== false)
   {
   echo "$token<br>";
   $token = strtok(".");
   }
function convertAll2($str)
{
	$words = array('rooms','location', 'staff', 'climate');
	
echo preg_replace_callback('/\b('.implode('|', $words).')\b/', function($m) {


global $con;
global $token;

    mysqli_query($con,"INSERT INTO `tbl_rate`(`rate_msg`, `rate_status`) 
        VALUES ('$m[0]','1')") or die(mysqli_error($con));


    return '<b>'.strtoupper($m[0]).'</b>';
    
}, $str);
}
echo convertAll2($text);
echo '<br><br><br>';


// $get = mysqli_query($con,"select * from tbl_rate group by rate_msg");
// if(mysqli_num_rows($get))
// {

// while($row=mysqli_fetch_array($get))
// {
//     echo strtoupper($row['rate_msg']).'<br>';
// }

// }




?>
