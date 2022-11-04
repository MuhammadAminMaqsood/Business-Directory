<?php
session_start();
require ("conn.php");
 
  if(isset($_POST["submit"]))
  { 
	 $name=$_POST["name"];
	 $email=$_POST["email"];
	 $contact=$_POST["Contact"];
	 $pass=$_POST["password"];

	 $sql ="INSERT INTO user(uname,uemail, ucontact,upassword) VALUES ('{$name}','{$email}','{$contact}','{$pass}')";
	 $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

		if ($result){
			header("Location:index.php");
		}
		else{
			echo "Failed";
		}
			
			
			mysqli_close($conn);
			
				
		}

 ?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Business Directory</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
		<!-- Header -->
		<header id="header">
				<h1>Business Directory</h1>
				<h3 class="mb-4">Sign Up</h3>
			</header>

		<!-- Signup Form -->

        <form id="signup-form" action="" method="post">
                    <div class="card-body text-center">
                        <div class="mb-4">
                            <i class="feather icon-unlock auth-icon"></i>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control"name="name" placeholder="Full Name" value="" required>
                        </div><br>
						<div class="input-group mb-3">
                            <input type="email" class="form-control"name="email" placeholder="Email" value="" required> 
                        </div><br>
                       
						<div class="input-group mb-3">
                            <input type="text" class="form-control"name="Contact" placeholder="Contact No" value="" required>
                        </div><br>
                        <div class="input-group mb-4">
                            <input type="password" class="form-control" name="password" placeholder="password" required>
                        </div><br>
            
                        <div class="form-group text-left">
                            <!-- <div class="checkbox checkbox-fill d-inline">
                                <input type="checkbox" name="checkbox-fill-1" id="checkbox-fill-a1" checked="">
                                <label for="checkbox-fill-a1" class="cr">Admin</label>
                            </div> -->
							<div class="input-group mb-4">
							<input class="submit" name="submit" type="submit" class="btn btn-primary shadow-2 mb-4" value="Save"  />
                        </div><br>
							<!-- <button class="btn btn-primary shadow-2 mb-4">Sign Up</button>                -->
                        </div>
					</div>	
                </form>

		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
					<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
				</ul>
				<ul class="copyright">
					<li>&copy; All Copyrights.</li><li>Credits: <a href="">Amin Maqsood</a></li>
				</ul>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/main.js"></script>

	</body>
</html>