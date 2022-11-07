<?php
    include 'conn.php';

    $sub_id = $_GET['b_id'];

    $sql = "SELECT * FROM bdd WHERE b_id = {$sub_id}";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    if(mysqli_num_rows($result) > 0)  {
      while($row = mysqli_fetch_assoc($result)){
    ?>

<section id="portfolio" class="portfolio section-bg">
      <div class="container">
        <div class="section-title">
          <h2>Portal</h2>
            <form action="portalform.php" method="post">
            <div class="row">
            <div class="col-xl-6">
                <div class="form-group">
                  <input type="text" class="form-control" name="bus_name"  placeholder=" Business Name" required>  
                </div><br>
                <div class="form-group">
                  <input type="text" class="form-control" name="bus_adrs"  placeholder="Address" required>   
                </div><br>
                <div class="form-group">
                  <input type="text" class="form-control" name="bus_phone"  placeholder="Phone Number" required>   
                </div><br>
                <div class="form-group">
                  <input type="text" class="form-control" name="bus_offphone"  placeholder="Official Number" required>   
                </div><br>
                <div class="form-group">
                  <input type="text" class="form-control" name="bus_fax"  placeholder="fax Number" required>   
                </div><br>
                <div class="form-group">
                  <input type="email" class="form-control" name="bus_email"  placeholder="Email" required>   
                </div><br> 
                <div class="form-group">
                  <input type="text" class="form-control" name="bus_web"  placeholder="Website" required>   
                </div><br>
                <div class="form-group">
                  <input type="text" class="form-control" name="bus_status"  placeholder="Status" required>   
                </div>
                <div class="form-group">                          
                  <div style="margin: 10px;"><label>Upload logo</label></div>
                  <input type="file"  class="form-control" name="image">             
                </div> 
                  <!-- <div class="form-group">
                    <label for=""></label>
                    <textarea class="form-control" name="cat_desc" rows="5" style="resize:none;" placeholder="Description"></textarea>
                  </div>    -->
                  <button style="margin-top: 10px;" type="submit" class="btn btn-primary shadow-2 mb-4" name="btn_insert">Submit</button>
            </div>
            </div>
            </form>                 
         </div>
        </div>

      </div>
    </section>

    <?php
          }}
     ?>