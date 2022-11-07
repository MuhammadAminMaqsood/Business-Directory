<?php
// Initialize the session
session_start();
include_once ("../conn.php");
if( $_SESSION["email"] !="")
{
    $sql_query1 ="SELECT * FROM category ";
    $results=$conn->query($sql_query1);

   if(isset($_POST["btn_insert"]))
   { 
      $name=$_POST["prdct_name"];
      $qty=$_POST["prdct_qty"];
      $price=$_POST["prdct_price"];
      //$img=$_POST["prdct_img"];
      $cat=$_POST["prdct_cat"];
      $desc=$_POST["prdct_desc"];

      $sql_query2="SELECT * FROM category where cat_id='$cat';";
      $result2=$conn->query($sql_query2);
      if ($result2->num_rows > 0)
      {
          while($row = $result2 ->fetch_assoc())
          {
              $cat_name=$row["cat_name"];

          }
      }
       $target_dir="images/".$cat_name."/";
       $target_file=$target_dir.basename($_FILES["pdct_img"]["name"]);

      $uploadok=1;
      $imgfiletype=strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

      $check=getimagesize($_FILES["pdct_img"]["tmp_name"]);
      if ($check !== false)
      {
          echo "file is an image";
          $uploadok=1;

      }
      else
       {
        echo "file is not an iimage";
        $uploadok=0;

      }

      if(file_exists($target_file))
      {
          echo "File already exists";
          $uploadok=0;

      }

      if($_FILES["pdct_name"]["size"] > 500000)
      {
          echo 'sorry image size is too large';
          $uploadok=0;
      }

      if($imgfiletype !='jpg' && $imgfiletype != 'png'&& $imgfiletype !='jpg')
      {
        echo 'sorry image size is not a jpg or png ';
        $uploadok=0;
        }
    
     if( $uploadok==0)
     {
        echo 'sorry your file will not be upload ';
     }
     else
     {
       if(move_uploaded_file($_FILES["pdct_name"]["name"].$target_file))
       {
       
        $target_d="images/".$cat_name."/";
        $target_f=$target_d.basename($_FILES["pdct_img"]["name"]);

        $sql_query ="insert into product values(0,'$name','$qty','$price','$target_f','$cat','$desc');";
        if($conn->query($sql_query))
        {
          echo '<script> alert("Record Added");</script>';
          header("location:product.php");
        }
        else 
        {
          echo $conn->error;
        }
     }
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
                                        <h3 class="m-b-10">Add Product</h3>
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
                                <div class="form-group">
                                  <input type="text" class="form-control" name="prdct_name" aria-describedby="helpId" 
                                  placeholder="Enter Product Name" required>   
                                </div>

                                <div class="form-group">
                                  <input type="number" class="form-control" name="prdct_qty" aria-describedby="helpId"
                                  placeholder="Enter Product Quantity" min="0" required >   
                                </div>

                                <div class="form-group">
                                  <input type="number" class="form-control" name="prdct_price" aria-describedby="helpId"
                                   placeholder="Enter Product Price" required min="1">   
                                </div>

                                <div class="form-group">
                                  <input type="file"  name="prdct_img" aria-describedby="helpId" required>   
                                </div>

                                <div class="form-group">
                                  <Select class="form-control" name="prdct_cat" aria-describedby="helpId"  required>
                                      <option>Select Product Category</option>
                                      <?php
                                        if($results->num_rows > 0)
                                        {
                                            while($row = $results->fetch_assoc())
                                            {
                                                echo '<option value="'.$row["cat_id"].'">'.$row["cat_name"].'</option>';

                                            }
                                        }
                                      ?>
                                  </Select >
                                </div>

                                  <div class="form-group">
                                    <label for=""></label>
                                    <textarea class="form-control" name="prdct_desc" rows="5" style="resize:none;" placeholder="Description"></textarea>
                                  </div>   
                                    <a class="btn btn-primary shadow-2 mb-4" href="product.php">Back</a>
                                  <button type="submit" class="btn btn-primary shadow-2 mb-4" name="btn_insert">Insert</button>
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

<?php

}

else
{
    header("location:login.php");
}

?>
</body>
</html>