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
												$dob=trim(addslashes($_REQUEST['dob']));
												$fullname=trim(addslashes($_REQUEST['fullname']));
												$email=trim(addslashes($_REQUEST['email']));
												$phone=trim(addslashes($_REQUEST['phone']));
												$password=trim(addslashes($_REQUEST['password']));
                                                
												
												$passport = $_FILES["passports"]['name'];
												$target="passport_p/";
												$target=$target.$_FILES["passports"]['name'];
												
										
												
											
													  
												/*	  $yyy = $_FILES['data']['name'];
													  $_SESSION['pic']=$yyy;*/
												
										if(move_uploaded_file($_FILES["passports"]['tmp_name'], $target)>0){
											
										 	//check for duplicate records
				                         $check = mysqli_query($conn, "SELECT * FROM `patient` WHERE  phone='$phone' OR email='$email'");
					
				                         $checkrows = mysqli_num_rows($check);
			                            if($checkrows>0){
				                        echo "<script>alert('Patient already exists in database')
				                        location.href='register_patient.php'</script>";
			                            }
			                            else{ 

										$sql="INSERT INTO patient ( dob, fullname, email, phone, password, passport) VALUES ('$dob','$fullname','$email','$phone',PASSWORD('$password'),'$passport')";
										
										mysqli_query($conn, $sql) or die (mysqli_error($conn));
										$num=mysqli_insert_id($conn);
										if(mysqli_affected_rows($conn)!=1){
										$message= "Error inserting the application information.";
																}
										echo "<script>alert('$fullname your registration was sucessful after logging in you can check our list of professional doctors we assure you each and every doctor you see on our site have been screened by our team')
											location.href='login_p.php'</script>";
										}
										}
									}
										
											
											
										?>
										
											
											
											
										
									<div class="form-group form-focus" id="result">

										</div>
                                       
                                            <div class="form-group form-focus">
												<input type="text" name="fullname" required class="form-control floating">
												<label class="focus-label">username</label>
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
												<label style="color:grey; margin-left:30px">Upload your passport here ensure it is crisp and professional</label>
												<input type="file" name="passports" required accept=".gif,.jpg,.JPG,.jpeg,.JPEG,.png" class="form-control floating">												
											</div><br>

											
											<div class="form-group form-focus"><br><br>
											<label style="color:grey; margin-left:30px">date of birth</label>
											<input type="date" name="dob" class="form-control floating">
										</div>
												<br>
												<div class="text-right">
												<a class="forgot-link" href="login.php">Already have an account?</a>
											</div>
											<br><br>
											<button class="btn btn-primary btn-block btn-lg login-btn" name="submit" type="submit">Signup</button>
											
											
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