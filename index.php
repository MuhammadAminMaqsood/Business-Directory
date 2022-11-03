<?php


// if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
//     header("location: welcome.php");
//     exit;
// }

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
				<h3 class="mb-4">Sign In</h3>
			</header>

		<!-- Signup Form -->
        <form id="signup-form" action="" method="post">
                    <div class="card-body text-center">
                        <div class="mb-4">
                            <i class="feather icon-unlock auth-icon"></i>
                        </div>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control"name="email" placeholder="Email" value="" required>
                        </div><br>         
                        <div class="input-group mb-4">
                            <input type="password" class="form-control" name="password" placeholder="password" required>
                        </div><br>    
						<button class="btn btn-primary shadow-2 mb-4">Login</button><br>       
                        <br><div class="form-group text-left">					        
                        <p class="mb-0 text-muted">Don’t have an account? <a href="registration.php">Signup</a></p>
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