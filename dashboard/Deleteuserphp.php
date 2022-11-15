<?php
// Initialize the session
session_start();
include_once ("../conn.php");
if( $_SESSION["email"] !="")
{
    if(isset($_GET["id"]))
   {
     $id = $_GET["id"];
     $sql_query_1 = "SELECT * FROM user where u_id = $id";
     $result=$conn->query($sql_query_1);
    }

   if(isset($_POST["btn_Delete"]))
   { 
      
      $sql_query ="Delete from user where u_id = $id;";
      if($conn->query($sql_query))
      {
          echo '<script> alert("Record Delete")</script>';
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