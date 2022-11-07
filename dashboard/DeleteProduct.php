<?php
// Initialize the session
session_start();
include_once ("../conn.php");
if( $_SESSION["email"] !="")
{
    if(isset($_GET["id"]))
   {
     $id = $_GET["id"];
     $sql_query_1 = "SELECT * FROM product where prdct_id = $id";
     $result=$conn->query($sql_query_1);
    }

   if(isset($_POST["btn_Delete"]))
   { 
      
      $sql_query ="Delete from product where prdct_id = $id;";
      if($conn->query($sql_query))
      {
          echo '<script> alert("Record Delete")</script>';
          header("location:product.php");
      }
      else 
      {
          echo $conn->error;
      }    

   }


  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Arts Admin Panel</title>

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
                                        <h3 class="m-b-10">Delete Product</h3>
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
                                          <input type="text" class="form-control" name="prdct_name" aria-describedby="helpId" 
                                          value="<?php echo $row["prdct_name"];?>">   
                                        </div>

                                        <div class="form-group">
                                          <input type="text" class="form-control" name="prdct_qty" aria-describedby="helpId" 
                                          value="<?php echo $row["prdct_qty"];?>">   
                                        </div>

                                        <div class="form-group">
                                          <input type="text" class="form-control" name="prdct_price" aria-describedby="helpId" 
                                          value="<?php echo $row["prdct_price"];?>">   
                                        </div>

                                        <div class="form-group">
                                          <input type="text" class="form-control" name="prdct_img" aria-describedby="helpId" 
                                          value="<?php echo $row["prdct_img"];?>">   
                                        </div>

                                        <div class="form-group">
                                          <input type="text" class="form-control" name="prdct_cat" aria-describedby="helpId" 
                                          value="<?php echo $row["prdct_cat"];?>">   
                                        </div>
        
                                          <div class="form-group">
                                            <label for="">Category Description</label>
                                            <textarea class="form-control" name="prdct_desc" rows="5" style="resize:none;" placeholder="">
                                            <?php echo $row["prdct_desc"];?>
                                            </textarea>
                                          </div>   
                                            <a class="btn btn-primary shadow-2 mb-4" href="product.php">No</a>
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

<?php

}
else
{
    header("location:login.php");
}

?>
</body>
</html>