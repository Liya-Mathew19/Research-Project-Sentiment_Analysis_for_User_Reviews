<?php
include 'admin_header.php';?>

        <div class="content mt-3"><h1><font color="Green"><center>APPROVED REQUESTS</h1></font><br>
				<?php
$res1=mysqli_query($con,"SELECT * FROM `tbl_addresort` where `h_status`='1'");
$row1=mysqli_fetch_array($res1);
if(empty($row1))
{
	echo "<br><br><center><font color=red size=3>No Approved Requests Yet!!!</font></center>";
}
else
{
?>

<table>
<table border=3 width=70%>
<tr>
<th>SL.NO</th>
<th>NAME</th>
<th>ADDRESS</th>
<th>LOCATION</th>
<th>PHONE</th>
<th>URL</th>
<th>EMAIL</th>

</tr>
<?php
include 'dbconnect.php';

$res=mysqli_query($con,"SELECT * FROM `tbl_addresort` where `h_status`='1'");
	$i=1;
		
	while($row=mysqli_fetch_array($res))
	{
	?>
	<tr><td><center><?php echo $i?></td>
	<td><center><?php echo $row['h_name'];?></td>
<td><center><?php echo $row['h_address'];?></td>
<td><center><?php echo $row['h_location'];?></td>
<td><center><?php echo $row['h_phone'];?></td>
<td><center><?php echo $row['h_url'];?></td>
<td><center><?php echo $row['h_email'];?></td>
<?php
/*$s=$row['Status'];
if($s==1)
{
?>
<td><center><font color="green"><b><?php echo "Requested";?></b></td>
<?php
}
else if($s==0)
{
?><td><center><font color="green"><b><?php echo "Approved";?></b></td><?php }
else if($s==2)
{
?><td><center><font color="green"><b><?php echo "Serviced";?></b></td><?php }
else if($s==3)
{
?><td><center><font color="green"><b><?php echo "Rejected";?></b></td><?php }*/?>


<?php
$i++;
}}
?></table>
<br><br><a href="admin_approve_request.php" style="color:red">Back to previous page</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp


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