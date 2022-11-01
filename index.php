<?php


if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}

?>


<!DOCTYPE HTML>
<!--
	Eventually by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Eventually by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
		<!-- Header -->
			<header id="header">
				<h1>Business Directory</h1>
				<p></a>.</p>
			</header>

		<!-- Signup Form -->
        <form id="signup-form" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="card-body text-center">
                        <div class="mb-4">
                            <i class="feather icon-unlock auth-icon"></i>
                        </div>
                        <h3 class="mb-4">Login</h3>
                        <div class="input-group mb-3<?= (!empty($email_err)) ? 'has-error' : ''; ?>">
                            <input type="email" class="form-control"name="email" placeholder="Email" value="<?= $email; ?>">
                        </div>
                        <span class="help-block"><?= $email_err; ?></span>
                        <div class="input-group mb-4"<?= (!empty($password_err)) ? 'has-error' : ''; ?>>
                            <input type="password" class="form-control" name="password" placeholder="password">
                        </div>
                        <span class="help-block"><?= $password_err; ?></span>
                        <div class="form-group text-left">
                            <div class="checkbox checkbox-fill d-inline">
                                <input type="checkbox" name="checkbox-fill-1" id="checkbox-fill-a1" checked="">
                                <label for="checkbox-fill-a1" class="cr"> Save Details</label>
                            </div>
                        </div>
                        <button class="btn btn-primary shadow-2 mb-4">Login</button>
                        <p class="mb-2 text-muted">Forgot password? <a href="auth-reset-password.html">Reset</a></p>
                        <p class="mb-0 text-muted">Don’t have an account? <a href="register.php">Signup</a></p>
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
					<li>&copy; Untitled.</li><li>Credits: <a href="http://html5up.net">HTML5 UP</a></li>
				</ul>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/main.js"></script>

	</body>
</html>