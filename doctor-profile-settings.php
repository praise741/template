<?php
include('session.php');
include('db_conn.php');
$staff_id = 1;
$sql="SELECT * FROM doctor WHERE email ='$staff_id'";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
$rows=mysqli_fetch_array($result);
?>
<!DOCTYPE html> 
<html lang="en">
	
<!-- Mirrored from doccure-html.dreamguystech.com/template/doctor-profile-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Apr 2021 18:52:18 GMT -->
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
		
		<!-- Select2 CSS -->
		<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css">
		
		<link rel="stylesheet" href="assets/plugins/dropzone/dropzone.min.css">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="assets/css/style.css">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	
	</head>
	<body>

		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
			<!-- Header -->
			<?php include('header.php'); ?>
			<!-- /Header -->
			
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Profile Settings</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Profile Settings</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
						
							<!-- Profile Sidebar -->
							<?php include('menu.php'); ?>
							<!-- /Profile Sidebar -->
							
						</div>
						<div class="col-md-7 col-lg-8 col-xl-9">
							<form enctype="multipart/form-data"" method="post">
							<?php
include("db_conn.php");
error_reporting(E_ALL);
	if(isset($_REQUEST['submit'])){
		$fullname=$session_fullname;
		$firstname=trim(addslashes($_REQUEST['firstname']));
		$lastname=trim(addslashes($_REQUEST['lastname']));
		$location=$session_location;
		$passport=$session_passport;
		$gender=trim(addslashes($_REQUEST['gender']));
		$dob= ($_REQUEST['dob']);
		$phone=trim(addslashes($_REQUEST['phone']));
		
		$biography=trim(addslashes($_REQUEST['biography']));
		$address_line1=trim(addslashes($_REQUEST['address_line1']));
		$address_line2=trim(addslashes($_REQUEST['address_line2']));
		$city=trim(addslashes($_REQUEST['city']));
		$country=trim(addslashes($_REQUEST['country']));
		$specialization =implode(', ', $_REQUEST["specialization"]);

		$services =implode(', ', $_REQUEST["services"]);
		
		
		

		
	
			  
		/*	  $yyy = $_FILES['data']['name'];
			  $_SESSION['pic']=$yyy;*/
		
	
$sql="INSERT INTO doctor2 (fullname, firstname, lastname, dob, phone, gender, biography, address_line1, address_line2, city, country, specialization, passport, LOCATION) VALUES ('$fullname','$firstname','$lastname','$phone ','$dob','$gender','$biography','$address_line1','$address_line2','$city','$country','$specialization','$passport','$location')";

mysqli_query($conn,$sql) or die (mysqli_error($conn));
$num=mysqli_insert_id($conn);
					if(mysqli_affected_rows($conn)!=1){
						$message= "Error inserting the application information.";
						}
echo "<script>alert(' $firstname your profile has been added to fast doctor')
	location.href='doctor-dashboard.php'</script>";
}
	mysqli_close($conn);
	
	
	
?>
							<!-- Basic Information -->
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">Basic Information</h4>
									<div class="row form-row">
										<div class="col-md-12">
											<div class="form-group">
												<div class="change-avatar">
													<div class="profile-img">
														<img src="passport/<?php echo $session_passport; ?>" alt="User Image">
													</div>
													<div class="upload-img">
														<div class="change-photo-btn">
															<span><i class="fa fa-upload"></i> Upload Photo</span>
															<input type="file" class="upload">
														</div>
														<small class="form-text text-muted">Allowed JPG, GIF or PNG. Max size of 2MB</small>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Username <span class="text-danger">*</span></label>
												<input value="<?php echo $session_fullname ;?>" type="text" class="form-control" readonly>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Email <span class="text-danger">*</span></label>
												<input value="<?php echo $session_email;?>" type="email" class="form-control" readonly>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>First Name <span class="text-danger">*</span></label>
												<input type="text" name="firstname" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Last Name <span class="text-danger">*</span></label>
												<input type="text" name="lastname" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Phone Number</label>
												<input type="text" name="phone" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Gender</label>
												<select name="gender" class="form-control select">
													<option>Select</option>
													<option value="Male">Male</option>
													<option value="Female">Female</option>
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group mb-0">
												<label>Date of Birth</label>
												<input type="date" name="dob" class="form-control">
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- /Basic Information -->
							
							<!-- About Me -->
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">About Me</h4>
									<div class="form-group mb-0">
										<label>Biography</label>
										<textarea class="form-control" name="biography" rows="5"></textarea>
									</div>
								</div>
							</div>
							<!-- /About Me -->
							
							

							<!-- Contact Details -->
							<div class="card contact-card">
								<div class="card-body">
									<h4 class="card-title">Contact Details</h4>
									<div class="row form-row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Address Line 1</label>
												<input type="text" name="address_line1" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">Address Line 2</label>
												<input type="text" name="address_line2" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">City</label>
												<input name="city" type="text" class="form-control">
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">State / Province</label>
												<input name="state" type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="control-label">Country</label>
												<input type="text" name="country" class="form-control">
											</div>
										</div>
										
									</div>
								</div>
								
							</div>
							<!-- /Contact Details -->
							
							
							<!-- Services and Specialization -->
							<div class="card services-card">
								<div class="card-body">
									<h4 class="card-title">Services and Specialization</h4>
									<div class="form-group">
										<label>Services</label>
										<input type="text" name="services[]" data-role="tagsinput" class="input-tags form-control" placeholder="Enter Services" name="services" value="Tooth cleaning " id="services">
										<small class="form-text text-muted">Note : Type & Press enter to add new services</small>
									</div> 
									<div class="form-group mb-0">
										<label>Specialization </label>
										<input name="specialization[]" class="input-tags form-control" type="text" data-role="tagsinput" placeholder="Enter Specialization" name="specialist" value="Children Care,Dental Care" id="specialist">
										<small class="form-text text-muted">Note : Type & Press  enter to add new specialization</small>
									</div> 
								</div>              
							</div>
							<!-- /Services and Specialization -->
						 
							
						
							
							
							
							
							
							
							
							<div class="submit-section submit-btn-bottom">
								<input class="btn btn-primary submit-btn" type="submit" value="update profile" name="submit">
							</div>
							
						</div>
					</div>

				</div>
				</form>
			</div>		
			<!-- /Page Content -->
   
			<!-- Footer -->
			<?php include('footer.php'); ?>
			<!-- /Footer -->
		   
		</div>
		<!-- /Main Wrapper -->
	  
		<!-- jQuery -->
		<script src="assets/js/jquery.min.js"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Sticky Sidebar JS -->
        <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
        <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
		
		<!-- Select2 JS -->
		<script src="assets/plugins/select2/js/select2.min.js"></script>
		
		<!-- Dropzone JS -->
		<script src="assets/plugins/dropzone/dropzone.min.js"></script>
		
		<!-- Bootstrap Tagsinput JS -->
		<script src="assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js"></script>
		
		<!-- Profile Settings JS -->
		<script src="assets/js/profile-settings.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		
	</body>

<!-- Mirrored from doccure-html.dreamguystech.com/template/doctor-profile-settings.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Apr 2021 18:52:20 GMT -->
</html>