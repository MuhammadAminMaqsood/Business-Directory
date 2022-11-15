<?php
include_once ("../conn.php");
include("Deleteuserphp.php");
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Panel</title>

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
                                        <h3 class="m-b-10">Delete User Account</h3>
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
                          <?php
                            if($result-> num_rows > 0)
                            {
                                while($row = $result->fetch_assoc())
                                {
                                    ?>
                                    <form action="" method="post">
                                    <div class="row">
                                    <div class="col-xl-7">
                                        <div class="form-group">
                                            <label style="font-size:20px; color:black;"><?php echo $row["uname"];?></label>
                                        </div>
                                        <div class="form-group">
                                            <label style="font-size:20px; color:black; "><?php echo $row["uemail"];?></label>
                                        </div>
                                        <div class="form-group">
                                            <label style="font-size:20px; color:black;"><?php echo $row["ucontact"];?></label>
                                        </div>
                                        <div class="form-group">
                                            <label style="font-size:20px; color:black;"><?php echo $row["upassword"];?></label>
                                        </div>
                                        <div class="form-group">
                                            <label style="font-size:20px; color:black;"><?php echo $row["uimage"];?></label>
                                        </div>
                                        <div class="form-group">
                                            <label style="font-size:20px; color:black;"><?php echo $row["access_level"];?></label>
                                        </div>                                                   
                                            <a class="btn btn-primary shadow-2 mb-4" href="user.php">No</a>
                                          <button type="submit" class="btn btn-primary shadow-2 mb-4" name="btn_Delete">Yes</button>
                                    </div>
                                    </form>
                                    <?php
                                }
                            }
                            ?>                        
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