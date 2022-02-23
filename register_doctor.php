<!DOCTYPE html> 
<html lang="en">
	
<!-- Mirrored from doccure-html.dreamguystech.com/template/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Apr 2021 18:53:06 GMT -->
<head>
		<meta charset="utf-8">
		<title>Doccure</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		
		<!-- Favicons -->
		<link href="assets/img/favicon.png" rel="icon">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="assets/css/style.css">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	
	</head>
	<body class="account-page">

		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
			<!-- Header -->
			<?php include("header.php"); ?>
			<!-- /Header -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					
					<div class="row">
						<div class="col-md-8 offset-md-2">
								
							<!-- Register Content -->
							<div class="account-content">
								<div class="row align-items-center justify-content-center">
									
									<div class="col-md-12 col-lg-6 login-right">
										
										
										<!-- Register Form -->
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
												$phone=trim(addslashes($_REQUEST['phone']));
												$password=trim(addslashes($_REQUEST['password']));
                                                $specialty=trim(addslashes($_REQUEST['specialty']));
												
												$passport = $_FILES["passports"]['name'];
												$target="passport/";
												$target=$target.$_FILES["passports"]['name'];
												$cv = $_FILES["cv"]['name'];
												$target1="cv/";
												$target1=$target1.$_FILES["cv"]['name'];
										
												
											
													  
												/*	  $yyy = $_FILES['data']['name'];
													  $_SESSION['pic']=$yyy;*/
												
										if(move_uploaded_file($_FILES["passports"]['tmp_name'], $target)>0){
										if(move_uploaded_file($_FILES["cv"]['tmp_name'], $target1)>0){
												
										 	//check for duplicate records
											 $check = mysqli_query($conn, "SELECT * FROM `doctor` WHERE  phone ='$phone' OR email='$email'");
					
											 $checkrows = mysqli_num_rows($check);
											if($checkrows>0){
											echo "<script>alert('Doctor already exists in database')
											location.href='register_patient.php'</script>";
											}
											else{ 
			
										$sql="INSERT INTO doctor ( fullname, email, phone, password, passport, cv, specialty) VALUES ('$fullname','$email','$phone',PASSWORD('$password'),'$passport','$cv','$specialty')";
										
										mysqli_query($conn,$sql) or die (mysqli_error($conn));
										$num=mysqli_insert_id($conn);
										if(mysqli_affected_rows($conn)!=1){
											$message= "Error inserting the application information.";
													}
										echo "<script>alert('$fullname your registration was sucessful check your email in 24 hours to know if your application has been approved')
											location.href='index.php'</script>";
										}
									}
										else{
											echo "<script>alert('Error in Uploading Passport')</script>";	
										}
											mysqli_close($conn);
											}
										}
										
										?>
										
											
											
											
										
									<div class="form-group form-focus" id="result">

										</div>
                                       
                                            <div class="form-group form-focus">
												<input type="text" name="fullname" required class="form-control floating">
												<label class="focus-label">Full Name</label>
											</div>
											<div class="form-group form-focus">
												<input type="text" name="specialty" required class="form-control floating">
												<label class="focus-label">SPECIALTY</label>
											</div>
                                            <div class="form-group form-focus">
												<input type="text" name="phone" required class="form-control floating">
												<label class="focus-label">Phone Number</label>
											</div>
											<div class="form-group form-focus">
												<input type="email" name="email" required class="form-control floating">
												<label class="focus-label">Email Address</label>
											</div><br>
                                       
                                            
                                                                                        <div class="form-group form-focus">
												<input name="password" type="password" required class="form-control floating">
												<label class="focus-label">Create Password</label>
											</div>
											<div class="form-group form-focus">
												<label style="color:grey; margin-left:30px">Upload your passport here ensure it is crisp and professional</label><br>
												<input type="file" name="passports" required accept=".gif,.jpg,.JPG,.jpeg,.JPEG,.png" class="form-control floating">												
											</div><br>
											<div class="form-group form-focus"><br>
											<label style="color:grey; margin-left:30px">Upload your quallififcations here</label>
												<input type="file" name="cv" required accept=".gif,.jpg,.JPG,.jpeg,.JPEG,.png,.pdf,.PDF,.Docx,.DOCX,.Doc,.doc," class="form-control floating">												
											</div><br>
											<div class="text-right">
												<br>
												<a class="forgot-link" href="login.php">Already have an account?</a>
											</div>
											<button class="btn btn-primary btn-block btn-lg login-btn" name="submit" type="submit">Signup</button>
											<div class="login-or">
												<span class="or-line"></span>
												<span class="span-or">or</span>
											</div>
											<div class="row form-row social-login">
												<div class="col-6">
													<a href="#" class="btn btn-facebook btn-block"><i class="fab fa-facebook-f mr-1"></i> Login</a>
												</div>
												<div class="col-6">
													<a href="#" class="btn btn-google btn-block"><i class="fab fa-google mr-1"></i> Login</a>
												</div>
											</div>
										</form>
										<!-- /Register Form -->
										
									</div>
								</div>
							</div>
							<!-- /Register Content -->
								
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
   
			<!-- Footer -->
			<?php include("footer.php")?>
			<!-- /Footer -->
		   
		</div>
		<!-- /Main Wrapper -->
	  
		<!-- jQuery -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		<script>
$(document).ready(function(){
    if(navigator.geolocation){
        navigator.geolocation.getCurrentPosition(showLocation);
    }else{ 
        $('#location').html('Geolocation is not supported by this browser.');
    }
});

function showLocation(position){
    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;
    $.ajax({
        type:'POST',
        url:'getLocation.php',
        data:'latitude='+latitude+'&longitude='+longitude,
        success:function(msg){
            if(msg){
               $("#location").html(msg);
            }else{
                $("#location").html('Not Available');
            }
        }
    });
}
</script>
	</body>

<!-- Mirrored from doccure-html.dreamguystech.com/template/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Apr 2021 18:53:06 GMT -->
</html>