<?php
session_start();
require ("conn.php");

$sub_id = $_GET['id'];
 $b_name = $_POST['bus_name'];
 $b_adrs = $_POST['bus_adrs'];
 $b_phone = $_POST['bus_phone'];
 $b_offphone = $_POST['bus_offphone'];
 $b_fax = $_POST['bus_fax'];
 $b_email = $_POST['bus_email'];
 $b_web = $_POST['bus_web'];
 $b_status = $_POST['bus_status'];
 $img = $_FILES['image'];



$sql = "UPDATE bdd SET b_name = '{$b_name}', b_address = '{$b_adrs}',b_phoneno = '{$b_phone}', b_officialno = '{$b_offphone}', b_faxno = '{$b_fax}', b_email = '{$b_email}', bus_web = '{$b_web}', b_status = '{$b_status}, b_logo = '{$img}' WHERE id = {$sub_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("location:userprofile.php");

mysqli_close($conn);
  
?>