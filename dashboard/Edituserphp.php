<?php
// Initialize the session
session_start();
include_once ("../conn.php");
if( $_SESSION["email"] !="")
{
  
     $sub_id = $_GET["id"];
     $sql_query_1 = "SELECT * FROM user where u_id = {$sub_id}";
     $result = mysqli_query($conn, $sql_query_1) or die("Query Unsuccessful.");

   if(isset($_POST["btn_update"]))
   { 
      $uname=$_POST["uname"];
      $uemail=$_POST["uemail"];
      $ucontact=$_POST["ucontact"];
      $upassword=$_POST["upassword"];
      $uimage=$_POST["uimage"];
      $access_level=$_POST["access_level"];

      
      $sql_query ="UPDATE user SET `uname`='$uname',`uemail`='$uemail',`ucontact`='$ucontact',`upassword`='$upassword',`uimage`='$uimage',`access_level`='$access_level' WHERE u_id = {$sub_id}";
      if($conn->query($sql_query))
      {
          echo '<script> alert("Record Added")</script>';
          header("location:user.php");
      }
      else 
      {
          echo $conn->error;
      }    

   }

}
else
{
    header("location:index.php");
}

  ?>