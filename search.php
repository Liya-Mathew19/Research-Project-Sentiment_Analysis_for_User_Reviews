<?php 
$pat=$_GET['name'];

/*if(isset($_POST['submit']))
{*/
// PHP program for Naive Pattern 
// Searching algorithm 
	include 'dbconnect.php';
	$sql=mysqli_query($con,"Select * from tbl_userfeedback");
	while($row=mysqli_fetch_array($sql))
	{
/*function search($pat, $txt) 
{ 
    $M = strlen($pat); 
    $N = strlen($txt); 
  
    // A loop to slide pat[]  
    // one by one  
    for ($i = 0; $i <= $N - $M; $i++) 
    { 
  
        // For current index i,  
        // check for pattern match  
        for ($j = 0; $j < $M; $j++) 
            if ($txt[$i + $j] != $pat[$j]) 
                break; 
  
        // if pat[0...M-1] =  
        // txt[i, i+1, ...i+M-1] 
        if ($j == $M)  
            echo "Pattern found at index ", $i."\n"; 
    } 
} 
search($pat, $txt); */
$txt=$row['uf_msg'];
  if (strpos($txt, $pat) !== false) {
    echo $row['uf_msg'];
    ?>
    <?php 
}
    
    } 
// This code is contributed by Sam007 
?> 
