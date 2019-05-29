

<?php
include 'admin_header.php';?>
<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
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
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","get_resort.php?q="+str,true);
  xmlhttp.send();
}
</script>

        <div class="content mt-3">
<center><h1>VIEW RESORT RATING</h1><br><br>
<form method="GET" action="" name="form1">
<div class="form-holder">
			<span class="lnr lnr-users">
			</span>			
			<select name="type" style="border-style: initial;padding-top: 18px; padding-bottom: 10px;
    margin-bottom: 4px;width: 50%;border-bottom: 1px solid #e6e6e6;" onchange="showUser(this.value);"  required>
			<option>&nbsp &nbsp &nbsp &nbsp --Select Location--</option>
			 <?php
		  $res=mysqli_query($con,"SELECT DISTINCT `loc_nme` FROM `tbl_location` where loc_status='1'");
		  $r=mysqli_num_rows($res);
		  while($row=mysqli_fetch_array($res))
		  {  
        $x=$row['loc_nme'];
         $res1=mysqli_query($con,"SELECT * FROM `tbl_location` where loc_nme='$x'");
       $r1=mysqli_num_rows($res1);
       $row1=mysqli_fetch_array($res1);
       $id=$row1['h_id'];
       echo "<option value='$id'>" . $row['loc_nme'] . "</option>";
      }
		  
		  ?>
			</select>
			</div>
			<div id="txtHint">
			</div>
		
</form>

			</body>
</html>
</div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>