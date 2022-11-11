<?php 
session_start();
require("conn.php");
      if(isset($_POST["btn_insert"]))
      {      
        $b_name = $_POST['bus_name'];
        $b_adrs = $_POST['bus_adrs'];
        $b_phone = $_POST['bus_phone'];
        $b_offphone = $_POST['bus_offphone'];
        $b_fax = $_POST['bus_fax'];
        $b_email = $_POST['bus_email'];
        $b_web = $_POST['bus_web'];
        $b_status = $_POST['bus_status'];
        $img = $_FILES['image'];
        $id = $_SESSION["id"];

      
      $sql ="INSERT INTO bdd(b_name,b_address,b_phoneno,b_officialno,b_faxno,b_email,b_website,b_status,b_logo,users_id)
                  VALUES('$b_name','$b_email','$b_phone','$b_offphone','$b_fax','$b_email','$b_web','$b_status','$img','$id')";
      $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
        
      header("location: userprofile.php");

      }
       ?> 