<?php
include 'admin_header.php';?>


        <div class="content mt-3">
<center><h1><font color="green" >Resorts</h1> </font>
<?php
$res1=mysqli_query($con,"SELECT * FROM `tbl_addresort`");
$row1=mysqli_fetch_array($res1);
if(empty($row1))
{
	echo "<br><br><center><font color=red size=3>No Resorts were Registered Yet!!!</font></center>";
}
else
{
?>
<table>
          <td><font size=5 > 
		  <?php
		  $res=mysqli_query($con,"SELECT * FROM `tbl_addresort` where `h_status`='1'");
		  $r=mysqli_num_rows($res);
		  $i=1;
		  while($row=mysqli_fetch_array($res))
		  { 
echo "<br>".$i. ".";	  
		  ?>
		 
		 <a href= "a_resort_view.php?uid=<?php echo $row['h_id'];?>"<?php echo $row['h_id'];?>>	  <?php echo $row['h_name']; ?></a><br>
		  <?php
		  $i++;
}}
		  ?></a>
		  </td>
          </tr></table>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align:CENTER;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>

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
