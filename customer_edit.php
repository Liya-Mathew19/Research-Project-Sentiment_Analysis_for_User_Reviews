<?php
include 'dbconnect.php';
session_start();
$kid=$_SESSION['r_id'];
$res=mysqli_query($con,"SELECT * FROM tbl_registration where r_id='$kid'");
$fetch=mysqli_fetch_array($res);
if(!isset($_SESSION['r_id'])){
	header("Location:login.php");
}
include 'customer_header.php'
?>
		
	<!--</head>
	<body>
		<div class="wrapper">
			<div class="inner" >
				<img src="images/image-1.png" alt="" class="image-1">
				<form action="customer_edit_action.php" method="post" enctype="multipart/form-data" onsubmit="return Validate()" style="margin-top: 203px;">
					<h3>EDIT USER DETAILS</h3>
			
						
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" name="nme" id="nme" value ="<?php echo $row['r_name'];?>" class="form-control" placeholder="First Name" required onchange="Validate();">
					</div>
<script>		
function Validate() 
{
    var val = document.getElementById('nme').value;

    if (!val.match(/^[A-Za-z]{3,}$/)) 
    {
        alert('Only alphabets are allowed');
		            document.getElementById('nme').value = "";
        return false;
    }

    return true;
}
</script>
	
		<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" name="lnme" id="lnme" value ="<?php echo$row['r_lname'];?>" class="form-control" placeholder="Last Name" required onchange="Validate();">
					</div>
<script>		
function Validate() 
{
    var val = document.getElementById('lnme').value;

    if (!val.match(/^[A-Za-z]{3,}$/)) 
    {
        alert('Only alphabets are allowed');
		            document.getElementById('lnme').value = "";
        return false;
    }

    return true;
}
</script>
					<div class="form-holder">
						<span class="lnr lnr-apartment"></span>
						<input type="text" name="add" id="add" value ="<?php echo $row['r_address'];?>" class="form-control" placeholder="Address" required onchange="Validname();">
					</div>
<script>		
function Validname() 
{
    var val = document.getElementById('add').value;

    if (!val.match(/^[A-Za-z]{3,}$/)) 
    {
        alert('Only alphabets are allowed');
		            document.getElementById('add').value = "";
        return false;
    }

    return true;
}
</script>
					<div class="form-holder">
						<span class="lnr lnr-calendar-full"></span>
						<input type="date" name="dob" value ="<?php echo $row['r_dob'];?>" class="form-control" placeholder="Date of Birth">
					</div>
					<div>
					
					
					<div style="padding-top: 7px;padding-bottom: 23px;">
					<?php
					if($row['r_gender']=="male"){?>
						<span class="lnr lnr-users"></span>
						  &nbsp&nbsp&nbsp <input type="radio"  name="gender" value="male" checked="checked"> Male<input type="radio" name="gender" value="female"> Female
						<?php 
					}
						else { ?> <input type="radio"  name="gender" value="male"> Male<input type="radio" name="gender" value="female" checked="checked"> Female
						<?php
						}?>	
					</div>
				</div>
					
					<div class="form-holder">
						<span class="lnr lnr-phone-handset"></span>
						<input type="text" name="phn" maxlength="10" id="phn" value ="<?php echo $row['r_phone'];?>" class="form-control" placeholder="Phone Number" required onchange="Validat();">
					</div>
<script>
function Validat() 
{
    var val = document.getElementById('phn').value;

    if (!val.match(/^[7-9][0-9]{1,9}$/)) 
    {
        alert('Only Numbers are allowed and must contain 10 number');
	
		
		            document.getElementById('phn').value = "";
        return false;
    }

    return true;
}

</script>
					<div class="form-holder">
						<span class="lnr lnr-envelope"></span>
						<input type="email" name="email" value ="<?php echo $row['r_email'];?>" id="email" class="form-control" placeholder="E-Mail" required onchange="return Validata();">
					</div>
<script>		
function Validata() 
{
    var val = document.getElementById('email').value;

    if (!val.match(/([A-z0-9_\-\.]){1,}\@([A-z0-9_\-\.]){1,}\.([A-Za-z]){2,4}$/)) 
    {
        alert('Enter a Valid Email');
		
		     document.getElementById('email').value = "";
        return false;
    }

    return true;
}

</script>
		
					
					<div>
					
					<button type="submit" name="submit" value="Update">UPDATE
						</button></div>
						
			
						
		
				</form>
				<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<br><br><br><br><br><br><br><br>
<?php
$b=$_SESSION['r_id'];
$result=mysqli_query($con,"SELECT * FROM `tbl_registration` where `r_id`='$b'");
	while($row=mysqli_fetch_array($result))
	{
		?> 
<hr>
<form class="form" action="customer_edit_action.php" enctype="multipart/form-data" method="post" id="registrationForm">
<div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-10"><h1><?php echo$row['r_name'];?><?php echo$row['r_lname'];?></h1></div>
    	<div class="col-sm-2"></div>
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

      <div class="text-center">
        <img src="Uploads/<?php echo $row['r_image'];?>" class="avatar img-circle img-thumbnail" alt="avatar">
        <h6>Upload a photo...</h6>
        <input type="file" name="img" class="text-center center-block file-upload">
      </div></hr><br>

     
          
       
               
          
          
        </div><!--/col-3-->
    	<div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
               
              </ul>

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>First name</h4></label>
                              <input type="text" class="form-control" name="nme" value ="<?php echo $row['r_name'];?>" id="first_name" placeholder="first name" title="enter your first name if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Last name</h4></label>
                              <input type="text" class="form-control" name="lnme" value ="<?php echo $row['r_lname'];?>" id="last_name" placeholder="last name" title="enter your last name if any.">
                          </div>
                      </div>
          
                   
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Mobile</h4></label>
                              <input type="text" class="form-control" name="phn" value ="<?php echo $row['r_phone'];?>" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Date of Birth</h4></label>
                              <input type="date" class="form-control" name="dob" value ="<?php echo $row['r_dob'];?>"id="email" placeholder="you@email.com" title="enter your email.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Address</h4></label>
                              <input type="text" class="form-control" name="add" id="location" value ="<?php echo $row['r_address'];?>"placeholder="somewhere" title="enter a location">
                          </div>
                      </div>
                     
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit" name="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
								<a class="btn btn-lg btn-danger" href="customer_profile.php"><i class="glyphicon glyphicon-remove"></i> Cancel</a>
                            </div>
                      </div>
              	</form>
              
              <hr>
              
             </div>

        </div><!--/col-9-->
    </div><!--/row-->
                                                      
				<img src="images/image-2.png" alt="" class="image-2">
			</div>
		</div>
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
		

	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<?php
	}

?>	
<?php
include 'customer_footer.php';
?>