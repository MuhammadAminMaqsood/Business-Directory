<?php
include 'conn.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $user_email = $_POST['email'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM user WHERE uemail = '$user_email' AND upassword = '$pass' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);

    if($row == 0 )
    {
        echo '<center><div class="alert alert-danger alert-dismissible fade show" role="alert">
        Please Insert Correct <strong>email</strong> and <strong>Password</strong> !
        </div></center>';
    }
    else
    {
        if($row['access_level'] == 1)
        {
            $_SESSION["email"] = $row['uemail'];
            $_SESSION["name"] = $row['uname'];
            $_SESSION["id"] = $row['u_id'];
            $_SESSION["image"] = $row['uimage'];
            $_SESSION["role"] = $row['access_level'];
            header('location:dashboard/welcome.php');
        }
        else
        {
            $_SESSION["email"] = $row['uemail'];
            $_SESSION["name"] = $row['uname'];
            $_SESSION["id"] = $row['u_id'];
            $_SESSION["image"] = $row['uimage'];
            $_SESSION["local_role"] = $row['access_level'];
            header('location:userprofile.php');
        }
    }
}
?>
