<?php
  require ("conn.php");
  if(isset($_POST["submit"]))
	{      
	  $name = $_POST['name'];
	  $email = $_POST['email'];
	  $contact = $_POST['Contact'];
	  $pass = $_POST['password'];
      $img =  $_FILES['image'];

      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_tmp =$_FILES['image']['tmp_name'];
      
      //use concatenate to timestamp with image
      $t=time();
      $print_file_name = "images/".$t.$file_name;
      
      if(empty($errors) == true)
      {
           move_uploaded_file($file_tmp,"images/".$t.$file_name);
       }
       else
       {
          print_r($errors);
       }
      
  
  $sql ="INSERT INTO user(uname,uemail,ucontact,upassword,uimage) VALUES('$name','$email','$contact','$pass',' $img')";
  $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
  
 if ($result){
  
  header("Location:index.php");
 }
 else{
	  echo "Failed";
  }
  }    
   mysqli_close($conn);		
?>
 
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Business Directory</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Datta Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"/>
    <meta name="author" content="CodedThemes"/>

    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style (2).css">

</head>

<body>
    <style>
        .help-block{
            color:red;
        }
    </style>
    <div class="auth-wrapper">
        <div class="auth-content">
            <div class="auth-bg">
                <span class="r"></span>
                <span class="r s"></span>
                <span class="r s"></span>
                <span class="r"></span>
            </div>
            <div class="card">
                <div class="card-body text-center">
                <h3 class="mb-4"><b>Business Directory</b></h3>
                    <div class="mb-4">
                        <i class="feather icon-user-plus auth-icon"></i>
                    </div>
                    <!-- <h3 class="mb-4">Sign up</h3> -->
                    <form action="" method="post">
                       
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="name" value="" placeholder="Full Name" required>
                        </div>
                        <span class="help-block"></span>
						<div class="input-group mb-3">
                            <input type="email" class="form-control" name="email" value="" placeholder="Email" required>
                        </div>
                        <span class="help-block"></span>
						<div class="input-group mb-3">
                            <input type="text" class="form-control" name="Contact" value="" placeholder="Contact No" required>
                        </div>
                        <span class="help-block"></span>
                        <div class="input-group mb-4" >
                            <input type="password" class="form-control" placeholder="password" name="password" placeholder="Password" value="" required>
                        </div>
                        <span class="help-block"></span>
                     
                         <div class="form-group text-left">                        
                            <div class="mb-3">
		                        <label class="form-label">Upload Image</label> <input type="file"  class="form-control" name="image" required>
                            </div>
                        </div> 
                        <!-- <div class="form-group text-left">
                            <div class="checkbox checkbox-fill d-inline">
                                <input type="checkbox" name="checkbox-fill-2" id="checkbox-fill-2">
                                <label for="checkbox-fill-2" class="cr">Send me the <a href="#!"> Newsletter</a> weekly.</label>
                            </div>
                        </div> -->
                        <button name="submit" class="btn btn-primary shadow-2 mb-4">Signup</button>
                        <p class="mb-0 text-muted">Already have an account? <a href="index.php">Login</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
