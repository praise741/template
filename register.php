<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from doccure-html.dreamguystech.com/template/admin/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Apr 2021 19:05:55 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Doccure - Register</title>
		
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
								<h1>Register</h1>
								<p class="account-subtitle">Access to our dashboard</p>
								
								<!-- Form -->
                                <form enctype="multipart/form-data" method="post">
										
										<?php
										include("db_conn.php");
										
										
										$rand = rand(00000,99999);
												$today = date("dmy");
												$time = date("His");
												$ID = "HGL/".$today."/".$rand;
												
											error_reporting(E_ALL);
											if(isset($_REQUEST['submit'])){
												
												$fullname=trim(addslashes($_REQUEST['fullname']));
												$email=trim(addslashes($_REQUEST['email']));
												
												$password=trim(addslashes($_REQUEST['password']));
                                                
												
												
										
												
											
													  
												/*	  $yyy = $_FILES['data']['name'];
													  $_SESSION['pic']=$yyy;*/
												
										
										 	//check for duplicate records
											 $check = mysqli_query($conn, "SELECT * FROM `admin` WHERE  fullname ='$fullname' OR email='$email'");
					
											 $checkrows = mysqli_num_rows($check);
											if($checkrows>0){
											echo "<script>alert('Admin already exists in database')
											location.href='login.php'</script>";
											}
											else{ 
			
										$sql="INSERT INTO admin (fullname, email, password) VALUES ('$fullname','$email',PASSWORD('$password'))";
										
										mysqli_query($conn,$sql) or die (mysqli_error($conn));
										$num=mysqli_insert_id($conn);
										if(mysqli_affected_rows($conn)!=1){
											$message= "Error inserting the application information.";
													}
										echo "<script>alert('$fullname your registration as an admin was sucessful')
											location.href='index.php'</script>";
										}
									}
										
											mysqli_close($conn);
										
										
										?>

									<div class="form-group">
										<input class="form-control" name="fullname" type="text" required placeholder="Fullname">
									</div>
									<div class="form-group">
										<input class="form-control" name="email" required type="email" placeholder="Email">
									</div>
									<div class="form-group">
										<input class="form-control" name="password" required type="password" placeholder="Password">
									</div>
									<div class="form-group mb-0">
										<button class="btn btn-primary btn-block" name="submit" type="submit">Register</button>
									</div>
								</form>
								<!-- /Form -->
								
								<div class="login-or">
									<span class="or-line"></span>
									<span class="span-or">or</span>
								</div>
								
								<!-- Social Login -->
								<div class="social-login">
									<span>Register with</span>
									<a href="#" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" class="google"><i class="fa fa-google"></i></a>
								</div>
								<!-- /Social Login -->
								
								<div class="text-center dont-have">Already have an account? <a href="login.php">Login</a></div>
							</div>
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

<!-- Mirrored from doccure-html.dreamguystech.com/template/admin/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Apr 2021 19:05:55 GMT -->
</html>