	<script>
function showU(str) {
  if (str=="") {
    document.getElementById("txtHint1").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint1").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","admin_resort_rate_view.php?q="+str,true);
  xmlhttp.send();
}
</script>
			<center><div class="form-holder">
			<span class="lnr lnr-briefcase"></span>			
			<br><center>
			 <?php
			 include 'dbconnect.php';
			 $q = $_GET['q'];
		  $res=mysqli_query($con,"SELECT * FROM `tbl_addresort` where `h_id`= $q" );
		  //$r1=mysqli_num_rows($res);
		  ?>
		  <select name="dtype" style="border-style: initial;padding-top: 18px; padding-bottom: 10px; 
			margin-bottom: 4px;width: 50%; border-bottom: 1px solid #e6e6e6;" onchange="showU(this.value);">
			<option>&nbsp &nbsp &nbsp &nbsp --Select Resort--</option>
			<?php
		  while($row=mysqli_fetch_array($res))
		  {  
		echo "<option>" . $row['h_name'] . "</option>";
		  
		  }
		  ?>
			</select>
			</div>
			<div id="txtHint1">
				
			</div>
