<?php
    include 'conn.php';

    $sub_id = $_GET['id'];
    $sql = "SELECT * FROM bdd WHERE id = {$sub_id}";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    if(mysqli_num_rows($result) > 0)  {
      while($row = mysqli_fetch_assoc($result)){

        
    ?>
  <head>
        <!-- Favicon icon -->
        <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="dashboard/assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="dashboard/assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="dashboard/assets/css/style.css">
  </head>

<section style="margin-top:50px;" class="portfolio section-bg">
      <div class="container">
        <div  class="section-title">
          <h2 style="margin-bottom:20px;">Edit-Portal</h2>
            <form action="editdata.php" method="post">
            <div class="row">
            <div class="col-xl-6">
                <div class="form-group">
                  <input type="text" class="form-control" name="bus_name"  placeholder=" Business Name" value="<?php echo $row['b_name']; ?>" required>  
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="bus_adrs"  placeholder="Address" value="<?php echo $row['b_address']; ?>" required>   
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="bus_phone"  placeholder="Phone Number" value="<?php echo $row['b_phoneno']; ?>" required>   
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="bus_offphone"  placeholder="Official Number" value="<?php echo $row['b_officialno']; ?>" required>   
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="bus_fax"  placeholder="fax Number" value="<?php echo $row['b_faxno']; ?>" required>   
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="bus_email"  placeholder="Email" value="<?php echo $row['b_email']; ?>" required>   
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="bus_web"  placeholder="Website" value="<?php echo $row['b_website']; ?>" required>   
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="bus_status"  placeholder="Status" value="<?php echo $row['b_status']; ?>" required>   
                </div>
                <div class="form-group">                          
                  <div style="margin:5px;"><label>Upload logo</label></div>
                  <input type="file"  class="form-control" name="image" value="<?php echo $row['b_logo']; ?>">             
                </div> 
                  <!-- <div class="form-group">
                    <label for=""></label>
                    <textarea class="form-control" name="cat_desc" rows="5" style="resize:none;" placeholder="Description"></textarea>
                  </div>    -->
                  <button style="margin-top: 5px;" type="submit" class="btn btn-primary shadow-2 mb-4" value="Update" name="btn_insert">Edit</button>
            </div>
            </div>
            </form>                 
         </div>
        </div>

      </div>
    </section>

 <!-- Vendor JS Files -->
 <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
    <?php
          }}
     ?>