<form action="admin_room_action.php" method="post" style="    padding: 16px;" enctype="multipart/form-data">
                        <div class="card">
                            <div class="card-header" style="background-color:grey;"><strong>New Room Information</strong></div>
                            <div class="card-body card-block">
                    
                          <div class="form-group"><label for="company" class=" form-control-label" style="color:black;">Name</label>
                                                                        <select name="rname" id="rname" class="form-control" required>
                                                                            <option>--Select Resort--</option>
          
          <?php
          include 'dbconnect.php';
          $res=mysqli_query($con,"SELECT * FROM `tbl_addresort` where h_status='1'");
          $r=mysqli_num_rows($res);
          while($row=mysqli_fetch_array($res))
          {  
          ?>
          <option value = <?php echo $row['h_id'];
          
          
          ?>><?php echo $row['h_name']; ?></option>
          <?php
          }
          ?>
          </select>
        
                                  <div class="form-group"><label for="company" class=" form-control-label" style="color:black;">Category</label>
                                                                        <select name="category" id="category" class="form-control" required>
                                                                            <option value="0">--Select Category--</option>
                                                                            <option value="Family Rooms">Family Rooms</option>
                                                                            <option value="Deluxe Rooms">Deluxe Rooms</option>
                                                                            <option value="Standard Rooms">Standard Rooms</option>
                                                                        </select>
                                                                   </div>
                                                                
                                       <div class="form-group"><label for="company" class=" form-control-label" style="color:black;">Bed Type</label>
                                                                        <select name="bedtype" id="bedtype" class="form-control" required>
                                                                            <option value="0">--Select Bed Type--</option>
                                                                            <option value="Single Bed">Single Bed</option>
                                                                            <option value="Double Bed">Double Bed</option>
                                                                            
                                                                        </select>
                                                                   </div>
                                            <div class="row form-group">
                                                <div class="col-8">
                                                    <div class="form-group"><label for="city" class=" form-control-label" style="color:black;">Number of rooms</label><input type="number" name="number" id="number"  min="1" max="100" placeholder="Enter the number of rooms" required class="form-control"></div>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="form-group"><label for="postal-code" class=" form-control-label"style="color:black;">Package</label><input type="text" id="package" name="package"  placeholder="Enter the package details" required class="form-control"></div>
                                                        </div>
                                                         <div class="col-8">
                                                        <div class="form-group"><label for="postal-code" class=" form-control-label"style="color:black;">Room Image</label><input type="file" id="img" name="img"  required class="form-control"></div>
                                                        </div>
                                                   
                                                   
                                                </div>
                        <input class="btn btn-success" type="submit" value="Save"  onclick="loadDoc()">
                                        
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
  xhttp.open("GET", "admin_add_rooms.php", true);
  xhttp.send();
}
</script>