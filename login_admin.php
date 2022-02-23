<?php
	require('db_conn.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['email'])){

		$email = stripslashes($_REQUEST['email']); // removes backslashes
		$email = mysqli_real_escape_string($conn,$email); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($conn,$password);



	//Checking is user existing in the database or not
        $query = "SELECT * FROM `admin` WHERE email='$email' AND password=PASSWORD('$password') ";
		$result = mysqli_query($conn,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['email'] = $email;
			echo '<script type="text/javascript"> window.open("index_admin.php","_self");</script>'; // Redirect user to index.php
            }{
    echo "<script>alert('Invalid email or Password ')
	location.href='login_admin.php'</script>";
   }
    }
?>
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from doccure-html.dreamguystech.com/template/admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Apr 2021 19:05:37 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Doccure - Login</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets(2)/img/favicon.png">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets(2)/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets(2)/css/font-awesome.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets(2)/css/style.css">
		
		<!--[if lt IE 9]>
			<script src="assets(2)/js/html5shiv.min.js"></script>
			<script src="assets(2)/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper login-body">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                    	<div class="login-left">
							<img class="img-fluid" src="assets(2)/img/logo-white.png" alt="Logo">
                        </div>
                        <div class="login-right">
							<div class="login-right-wrap">
								<h1>Login</h1>
								<p class="account-subtitle">Access to our dashboard</p>
								
								<!-- Form -->
								<form method="post">
									<div class="form-group">
										<input class="form-control" name="email" type="email" placeholder="Email" required>
									</div>
									<div class="form-group">
										<input class="form-control" type="password" name="password" placeholder="Password" required>
									</div>
									<div class="form-group">
										<button class="btn btn-primary btn-block" type="submit">Login</button>
									</div>
								</form>
								<!-- /Form -->
								
								
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets(2)/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets(2)/js/popper.min.js"></script>
        <script src="assets(2)/js/bootstrap.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets(2)/js/script.js"></script>
		
    </body>

<!-- Mirrored from doccure-html.dreamguystech.com/template/admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Apr 2021 19:05:37 GMT -->
</html>