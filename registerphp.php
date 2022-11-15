<?php
  require ("conn.php");
  if(isset($_POST["submit"]))
	{      
       $name = $_POST['name'];
	   $email = $_POST['email'];
	   $contact = $_POST['Contact'];
       $pass = $_POST['password'];
       $image = $_FILES['image'];

       if(isset($_FILES['image'])){

        $errors= array();
        $file_name = $_FILES['image']['name'];
        $file_tmp =$_FILES['image']['tmp_name'];
        $file_size =$_FILES['image']['size'];
        $file_type =$_FILES['image']['type'];
  
        //use concatenate to timestamp with image
  
      $print_file = "images/".$file_name;

       if(empty($errors) == true)
          {
              move_uploaded_file($file_tmp,"images/".$file_name);
          }
          else
          {
              print_r($errors);
          }
      }
  
  $sql ="INSERT INTO user(uname,uemail,ucontact,upassword,uimage) VALUES('$name','$email','$contact','$pass','$print_file')";
  $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
  
 if ($result){
  header("Location:index.php");
 }
 else{
	  echo "Failed";
  }
  }  
  
   mysqli_close($conn);		
?>