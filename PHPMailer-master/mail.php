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
  $mail->Password = "mybrother";
  //If SMTP requires TLS encryption then set it
  $mail->SMTPSecure = "tls";
  $mail->Port = 587;
  //Set TCP port to connect to
  
  //$mail->to = "jomiyajohn@mca.ajce.in";
  //$mail->From = "nooranoushad@mca.ajce.in";
  //$mail->FromName = "noora";
  
  $mail->addAddress($_POST['email']);
  
  $mail->isHTML(true);
 
  $mail->Subject = "TRAVELLOG";
  $mail->Body = "<i>Anjima Its me:</i>";
  $mail->AltBody = "This is the plain text version of the email content";
  if(!$mail->send())
   {
   echo "Mailer Error: " . $mail->ErrorInfo;
  }
  else
  {
   echo "Message has been sent successfully";
  }
}?>
<?php
/*include 'dbconnect.php';
?>

<?php
session_start();
if(isset($_POST['submit']))
{

$email=$_REQUEST["email"];
$query=mysqli_query($con,"select * from tbl_registration where r_email='$email'");
$row=mysqli_fetch_array($query);
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
  $mail->Username = "nooranoushad4@gmail.com";
  $mail->Password = "noora9947066889";
  //If SMTP requires TLS encryption then set it
  $mail->SMTPSecure = "tls";
  $mail->Port = 587;
  //Set TCP port to connect to
  
  //$mail->to = "jomiyajohn@mca.ajce.in";
  $mail->From = "anndonajames@mca.ajce.in";
  $mail->FromName = "noora";
  
  $mail->addAddress($_POST['email']);
  
  $mail->isHTML(true);
 
  $mail->Subject = "test mail";
  $mail->Body = "<i>this is your password:</i>";
  $mail->AltBody = "This is the plain text version of the email content";
  if(!$mail->send())
   {
   echo "Mailer Error: " . $mail->ErrorInfo;
  }
  else
  {
   echo "Message has been sent successfully";
  }
}?>*/