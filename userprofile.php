<?php
session_start();
require("conn.php");

$user = $_SESSION["email"];
if($user == true)
{

}else{
  header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <?php include 'header.php'; ?>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div  style="margin-bottom: 80px; margin-right:110px;" class="hero-container" data-aos="fade-in">
      <?php
    $sql = "SELECT * FROM user";
$result =$conn->query($sql) or die("Query Unsuccessful.");

if(mysqli_num_rows($result) > 0)  {
    $row = mysqli_fetch_assoc($result)
      ?>
      <h1 style="font-size:40px;"><?=$_SESSION['name']?></h1>
      <p>You're <span class="typed" data-typed-items="Business Men, Designer, Developer, Freelancer,Photographer"></span></p>
      <?php }?>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">

   <!-- ======= Resume Section ======= -->
  
   <!-- <section id="about" class="resume">
      <div class="container">
        <div class="section-title">
          <h2>Protal</h2>       
         
        </div>
      </div>
    </section> -->
    <!-- End Resume Section -->


    <!-- ======= Portfolio Section ======= -->
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
    </section><!-- End Portfolio Section -->


    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <div class="section-title">
          <h2>Portfolio</h2>
          <p></p>
        </div>
        
        <div class="row">
          
        <?php
          $u_id = $_SESSION["id"];
          $sql = "SELECT * FROM bdd WHERE users_id = '$u_id'";
          $result =$conn->query($sql) or die("Query Unsuccessful.");
          if(mysqli_num_rows($result) > 0)  {
            $row = mysqli_fetch_assoc($result)
            
        ?>
          <div class="col-lg-4" data-aos="fade-right">
            <img src="<?php echo $row['b_logo']; ?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3><?php echo $row['b_name']; ?></h3>
          
            <div class="row">
           
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span></span><?php echo $row['b_website']; ?></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Address:</strong> <span><?php echo $row['b_address']; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><?php echo $row['b_phoneno']; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>offical No:</strong> <span><?php echo $row['b_officialno']; ?></span></li>
                </ul>             
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span></span><?php echo $row['b_email']; ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Fax No:</strong> <span></span><?php echo $row['b_faxno']; ?></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Status:</strong> <span></span><?php echo $row['b_status']; ?></li>
                  <!-- <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span></span></li> -->
                </ul>     
              </div>          
            </div>
            <a class="btn btn-primary shadow-2 mb-4" href='edit.php?id=<?php echo $row['id'];?>'>Edit</a>        
          </div>
        </div>
        <?php }
        
        ?>
      </div>
    </section><!-- End About Section -->
  
   

   

    <!-- ======= Services Section ======= -->
    <!-- <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
           <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="bi bi-briefcase"></i></div>
            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bi bi-card-checklist"></i></div>
            <h4 class="title"><a href="">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bi bi-bar-chart"></i></div>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bi bi-binoculars"></i></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="bi bi-brightness-high"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class="bi bi-calendar4-week"></i></div>
            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div>
        </div> 

      </div>
    </section> -->
    <!-- End Services Section -->



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="section-title">
          <!-- <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div> -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
      <strong><span></span></strong> &copy; Copyright
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
        Designed by <a href="">Amin Maqsood</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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
  <script src="assets/js/main (2).js"></script>

</body>

</html>