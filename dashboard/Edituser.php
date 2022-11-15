<?php 
include_once ("../conn.php");
include("Edituserphp.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Panel | Business Directory</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Free Datta Able Admin Template come up with latest Bootstrap 4 framework with basic components, form elements and lots of pre-made layout options" />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"/>
    <meta name="author" content="CodedThemes"/>

    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

<?php
include("Adminheader.php");
?>

<section class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->
                    <div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <div class="page-header-title">
                                        <h3 style="font-weight:bold;" class="m-b-10">Edit User</h3>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="welcome.php"><i class="feather icon-home"></i></a></li>
                                        <li class="breadcrumb-item"><a href="#!">Tables</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [ breadcrumb ] end -->
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                         
                                    <form action="" method="post">
                                    <div class="row">
                                    <div class="col-xl-7">
                                        <?php
                                        if(mysqli_num_rows($result) > 0)  {
                                            while($row = mysqli_fetch_assoc($result)){
                                        ?>
                                        <div class="form-group">                             
                                          <input type="text" class="form-control" name="uname" aria-describedby="helpId" 
                                          placeholder="Enter Name" value="<?php echo $row["uname"];?>">   
                                        </div>
                                        <div class="form-group">
                                          <input type="text" class="form-control" name="uemail" aria-describedby="helpId" 
                                          placeholder="Enter Email" value="<?php echo $row["uemail"];?>">   
                                        </div>
                                        <div class="form-group">
                                          <input type="text" class="form-control" name="ucontact" aria-describedby="helpId" 
                                          placeholder="Enter Contact" value="<?php echo $row["ucontact"];?>">   
                                        </div>
                                        <div class="form-group">
                                          <input type="text" class="form-control" name="upassword" aria-describedby="helpId" 
                                          placeholder="Enter Password" value="<?php echo $row["upassword"];?>">   
                                        </div>
                                        <div class="form-group">
                                          <input type="text" class="form-control" name="uimage" aria-describedby="helpId" 
                                          placeholder="Enter Image" value="<?php echo $row["uimage"];?>">   
                                        </div>
                                        <div class="form-group">
                                          <input type="text" class="form-control" name="access_level" aria-describedby="helpId" 
                                          placeholder="Enter access level" value="<?php echo $row["access_level"];?>">   
                                        </div>
                
                                            <a class="btn btn-primary shadow-2 mb-4" href="user.php">Back</a>
                                          <button type="submit" class="btn btn-primary shadow-2 mb-4" name="btn_update">Updata</button>
                                    </div>
                                    <?php
                                }
                            }
                            ?>  
                                    </div>
                                    
                                    </form>
                                                    
                            </div>
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
</body>
</html>