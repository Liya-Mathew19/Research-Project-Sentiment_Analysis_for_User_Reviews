<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
	<?php
include 'dbconnect.php';
    include 'admin_header.php';
    ?>


        <div class="content mt-3"><h1><font color="green"><center>FEEDBACKS</h1><br></font>
<?php
include 'dbconnect.php';
$res1=mysqli_query($con,"SELECT * FROM `tbl_feedback` where f_status=1 or f_status=2");
$row1=mysqli_fetch_array($res1);
if(empty($row1))
{
	echo "<br><br><center><font color=red size=3>No Feedbacks Yet !!!</font></center>";
}
else
{
?>
<table>
<table border=3 width=70%>
<tr>
<th>SL.NO</th>
<th>NAME</th>
<th>DATE</th>
<th>FEEDBACK</th>
<th>STATUS</th></tr>
<?php

	$a=$_SESSION['r_id'];
	$res=mysqli_query($con,"SELECT * FROM `tbl_feedback` where f_status=1 or f_status=2");
	$i=1;
	while($row=mysqli_fetch_array($res))
	{$kid=$row['r_id'];
		$res1=mysqli_query($con,"SELECT r_name FROM `tbl_registration` where r_id='$kid'");
	$row1=mysqli_fetch_array($res1);
	
	?>
	
	<tr><td><center><?php echo $i?></td>
<td><center><?php echo $row1['r_name'];?></td>
<td><center><?php echo $row['f_date'];?></td>
<td><center><?php echo $row['f_msg'];?></td>
<td><center><a href="mark_read.php?uid=<?php echo $row['f_id'];?>" onclick="return confirm('Mark as read??')"><img src="images/600px-Approve_icon.svg.png" width="30px"></a></td></tr>
<?php
$i++;
	}
}
?>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #867198;
    color: white;
}
</style>
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