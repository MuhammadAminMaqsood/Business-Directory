<?php
// Initialize the session
session_start();
$_SESSION["email"] = "";

// Include config file
include_once ("../conn.php");
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
// Include config file
if(isset($_POST["btn_login"]))
{
  $email = $_POST["user_email"];
  $paswrd = $_POST["user_paswrd"];

  $sql_query ="SELECT * FROM admin_login WHERE email= '$email' ";
  $result=$conn->query($sql_query);
  if($result->num_rows > 0)
  {
    while($row = $result->fetch_assoc())
    {
      if($email == $row["email"] && $paswrd == $row["password"])
      {
          $_SESSION["email"] = "$email" ;
          header("location: welcome.php");
      }
      else
        {
          echo '<script> alert("Invalid Password");</script>';
        }
    }   
  }
  else
   {
      echo '<script> alert("Invalid Email");</script>';
   }

}

?>
<!DOCTYPE php>
<php lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Arts | Admin Login</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction php5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Constra php Template v1.0">
  
  <!-- Favicon -->
  <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
  
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="../plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="../plugins/bootstrap/css/bootstrap.min.css">
  
  <!-- Animate css -->
  <link rel="stylesheet" href="../plugins/animate/animate.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="../plugins/slick/slick.css">
  <link rel="stylesheet" href="../plugins/slick/slick-theme.css">
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="../css/style.css">

</head>

<body id="body">

<section class="signin-page account">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="block text-center">
        <a class="logo" href="../index.php">
        <h2 class="text-center" >Arts</h2>
          </a>
          <h2 class="text-center">Welcome Back</h2>
          <form class="text-left clearfix" action="login.php"  method="post">
            <div class="form-group">
              <input type="email" name="user_email" class="form-control"  placeholder="Email">
            </div>
            <div class="form-group">
              <input type="password" name="user_paswrd" class="form-control" placeholder="Password">
            </div>
            <div class="text-center">
              <button type="submit" name="btn_login" class="btn btn-main text-center" >Login</button>
            </div>
          </form>
          <p class="mt-20">New in this site ?<a href="signin.php"> Create New Account</a></p>
        </div>
      </div>
    </div>
  </div>
</section>

    <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- Main jQuery -->
    <script src="../plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="../plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap Touchpin -->
    <script src="../plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
    <!-- Instagram Feed Js -->
    <script src="../plugins/instafeed/instafeed.min.js"></script>
    <!-- Video Lightbox Plugin -->
    <script src="../plugins/ekko-lightbox/dist/ekko-lightbox.min.js"></script>
    <!-- Count Down Js -->
    <script src="../plugins/syo-timer/build/jquery.syotimer.min.js"></script>

    <!-- slick Carousel -->
    <script src="../plugins/slick/slick.min.js"></script>
    <script src="../plugins/slick/slick-animation.min.js"></script>

    <!-- Google Mapl -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script type="text/javascript" src="../plugins/google-map/gmap.js"></script>

    <!-- Main Js File -->
    <script src="../js/script.js"></script>
    


  </body>
</php>
