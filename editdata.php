<?php
session_start();
require ("conn.php");

if(isset($_POST["btn_insert"]))
{
 $sub_id = $_SESSION["bid"];
 $b_name = $_POST['bus_name'];
 $b_adrs = $_POST['bus_adrs'];
 $b_phone = $_POST['bus_phone'];
 $b_offphone = $_POST['bus_offphone'];
 $b_fax = $_POST['bus_fax'];
 $b_email = $_POST['bus_email'];
 $b_web = $_POST['bus_web'];
 $b_status = $_POST['bus_status'];
//  $img = $_FILES['new_imaga'];

//  if(isset($_FILES['image'])){

//     $errors= array();
//     $file_name = $_FILES['image']['name'];
//     $file_tmp =$_FILES['image']['tmp_name'];
//     $file_size =$_FILES['image']['size'];
//     $file_type =$_FILES['image']['type'];

//     //use concatenate to timestamp with image

//   $print_file = "images/".$file_name;

//    if(empty($errors) == true)
//       {
//           move_uploaded_file($file_tmp,"images/".$file_name);
//       }
//       else
//       {
//           print_r($errors);
//       }
//   }

$sql = "UPDATE bdd SET b_name = '{$b_name}', b_address = '{$b_adrs}',b_phoneno = '{$b_phone}', b_officialno = '{$b_offphone}', b_faxno = '{$b_fax}', b_email = '{$b_email}', b_website = '{$b_web}', b_status = '{$b_status}' WHERE b_id = {$sub_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
header("location:userprofile.php");
}
  
?>