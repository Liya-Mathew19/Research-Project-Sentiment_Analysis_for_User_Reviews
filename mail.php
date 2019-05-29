<?php
include 'dbconnect.php';
?>

<?php
session_start();
if(isset($_POST['submit']))
{
$email=$_REQUEST["email"];
$query=mysqli_query($con,"select * from tbl_registration where r_email='$email'");
$row=mysqli_fetch_array($query);
/*$query1=mysqli_query($con,"select pwd from tbl_login where r_email='$email'");
$row=mysqli_fetch_array($query1);*/
//echo $row['email'];die();
//print_r($row);die;
require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer();
  
  //Enable SMTP debugging.
  $mail->SMTPDebug = 1;
  //Set PHPMailer to use SMTP.
  $mail->isSMTP();
  //Set SMTP host name
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
  //Set this to true if SMTP host requires authentication to send email
  $mail->SMTPAuth = TRUE;
  //Provide username and password
  $mail->Username = "anndonajames1996@gmail.com";
  $mail->Password = "myfamily@2001";
  //If SMTP requires TLS encryption then set it
  $mail->SMTPSecure = "tls";
  $mail->Port = 587;
 
  $mail->FromName = "Travelog.com";
  
  $mail->addAddress($_POST['email']);
  
  $mail->isHTML(true);
 
  $mail->Subject = "TRAVELOG";
  $mail->Body = "<i>Forgot your password???Here is a link to reset your password..<a href=localhost/travelog-new/forgot_password.php>Click Here...</a></i>";
  $mail->AltBody = "This is the plain text version of the email content";
  if(!$mail->send())
   {
   echo "Mailer Error: " . $mail->ErrorInfo;
   echo header("Location:in.php?error=Please check you internet connection..</center>");
  }
  else
  {
   echo "Message has been sent successfully";
   echo header("Location:in.php?error=Please check your mail to reset your password..</center>");
  }
}?>
