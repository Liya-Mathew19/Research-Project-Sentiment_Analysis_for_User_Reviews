<?php
include 'admin_header.php';?>
 <div class="content mt-3">
		<div class="col-sm-12">
                 <div class="card-body">
                                    <div class="alert alert-success" role="alert">
                                        <h4 class="alert-heading" >General Information</h4>
                                        <p>Show potential guests you have the perfect room for them. Create a room type with sample images for each unique category of room, suite and/or unit in your property. 
										You may have 10 standard rooms—but are they all exactly alike and the same size, with the same features and view? 
										You can have as many room types as necessary to cover them all.</p>
                                        <hr>
                                       
                                    </div>
									
                        <div class="card">
                            <div class="card-header">
                                <h4>Your Room Types</h4>
                            </div>
                            <div class="card-body">
                           <div style="color:red;">  <?php              
            if(isset($_GET['error']))
            echo $_GET['error'];
            ?></div>
                                    <button class="btn btn-success" style="background-color:#0277BD;border-color:#0277BD;" onclick="loadDoc()" type="submit"><b><font color="white">+ Create New Room Type</b></button>
<button class="btn btn-danger" onclick="load()" type="submit"><b><font color="white">View Room Details</b></button>
								
                            </div>
							
							<script>
function loadDoc() {
  var xhttp;
  if (window.XMLHttpRequest) {
    // code for modern browsers
    xhttp = new XMLHttpRequest();
    } else {
    // code for IE6, IE5
    xhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "admin_room_add.php", true);
  xhttp.send();
}

</script>
<script>
function load() {
  var xhttp;
  if (window.XMLHttpRequest) {
    // code for modern browsers
    xhttp = new XMLHttpRequest();
    } else {
    // code for IE6, IE5
    xhttp = new ActiveXObject("Microsoft.XMLHTTP");
  }
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "admin_room_view.php", true);
  xhttp.send();
}
</script>
                        </div>
                    </div>
                    <!-- /# column -->
					
                
<div id="demo"></div>
                   
                </div>
            </div>
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