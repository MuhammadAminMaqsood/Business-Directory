<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$user_name = "root";
$host_name = "localhost";
$password = "";
$db_name = "directory";

/* Attempt to connect to MySQL database */
$conn = new mysqli($host_name,$user_name,$password,$db_name);
 
// Check connection
if($conn){
    echo "Connection ok";
}
else{
    echo "Connection failde";
}
?>