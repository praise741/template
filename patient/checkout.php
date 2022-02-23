<?php
include('session.php');
include('db_conn.php');
$staff_id = 1;
$sql="SELECT * FROM `patient` WHERE email ='$staff_id'";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
$rows=mysqli_fetch_array($result);
?>
<!DOCTYPE html> 
<html lang="en">
	
<!-- Mirrored from doccure-html.dreamguystech.com/template/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Apr 2021 18:52:23 GMT -->
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
	<body>

		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
			<!-- Header -->
			<?php include ('header.php');?>
			<!-- /Header -->
			
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Checkout</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Checkout</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container">

					<div class="row">
						<div class="col-md-7 col-lg-8">
							<div class="card">
								<div class="card-body">
								
									<!-- Checkout Form -->
									
									
										<!-- Personal Information -->
										<div class="info-widget">
											<h4 class="card-title">Personal Information</h4>
											<div class="row">
												<div class="col-md-6 col-sm-12">
													<div class="form-group card-label">
														<label>Full Name</label>
														<input class="form-control" readonly placeholder="<?php echo $session_fullname; ?>" name="fullname" type="text">
													</div>
													<?php 
include('db_conn.php'); 
$sql = "SELECT * FROM `amount`";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
 while($row = mysqli_fetch_array($result)) {
		
?>  
														<label>Amount to be paid</label>
														<input class="form-control" name="amount" readonly required placeholder="<?php echo $row['amount']; ?>" name="amount_paid" type="number">
														</div>
							<?php  
		}
		}
		
		mysqli_close($conn);
		?>
													</div>
												</div>
												<div class="col-md-6 col-sm-12">
													<div class="form-group card-label">
														<label>Email</label>
														<input class="form-control" readonly placeholder="<?php echo $session_email; ?>" name="email" type="email">
													</div>
												</div>
												<div class="col-md-6 col-sm-12">
													<div class="form-group card-label">
														<label>Phone</label>
														<input class="form-control" readonly placeholder="<?php echo $session_phone; ?>" name="phone" type="text">
													</div>
													<div class="form-group card-label">
														<label>appointment date</label>
														<input class="form-control" name="appointment" type="date">
													</div>
												</div>
											</div>
											
												</div>
												
												<div class="col-md-6 col-sm-12">

													<div class="form-group card-label">
													<form method="post">
													<?php
										include("db_conn.php");
										
										
										
												
											error_reporting(E_ALL);
											if(isset($_REQUEST['submit'])){
												
												$fullname=trim(addslashes($_REQUEST['fullname']));
												$email=trim(addslashes($_REQUEST['email']));
												$phone=trim(addslashes($_REQUEST['phone']));
												$amount=trim(addslashes($_REQUEST['amount']));
												$appointment=trim(addslashes($_REQUEST['appointment']));
                                                
												
											
											
										 
				                         
										$sql="INSERT INTO booking (fullname, email, phone, amount, appointment) VALUES ('$fullname','$email','$phone','$amount','$appointment')";
										
										mysqli_query($conn, $sql) or die (mysqli_error($conn));
										$num=mysqli_insert_id($conn);
										if(mysqli_affected_rows($conn)!=1){
										$message= "Error inserting the application information.";
																}
										echo "<script>alert('$fullname your doctor has recieved your request')
											location.href='login_p.php'</script>";
										}
										
									
										
											
											
										?>
													
													
										<!-- /Personal Information -->
										
										
											
											<!-- Terms Accept -->
																				<!-- /Terms Accept -->
											
											<!-- Submit Section -->
											<div class="submit-section mt-4">
												<input type="submit" name="submit" value="checkout" class="btn btn-primary submit-btn">
											</div>
											<!-- /Submit Section -->
											
										</div>
									</form>
									<!-- /Checkout Form -->
									
								</div>
							</div>
							
						</div>
						
						<div class="col-md-5 col-lg-4 theiaStickySidebar">
						
							<!-- Booking Summary -->
							<div class="card booking-card">
								<div class="card-header">
									<h4 class="card-title">Booking Summary</h4>
								</div>
								<div class="card-body">
								<?php 
include('db_conn.php'); 
$sql = "SELECT * FROM `doctor2` where fullname='$_REQUEST[fullname]'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
 while($row = mysqli_fetch_array($result)) {
		
?>  
									<!-- Booking Doctor Info -->
									<div class="booking-doc-info">
										<a href="" class="booking-doc-img">
											<img src="../passport/<?php echo $row['passport']; ?>" alt="User Image">
										</a>
										<div class="booking-info">
											<h4><a><?php echo $row['fullname']; ?></a></h4>
																						<div class="clinic-details">
								
											</div>
										</div>
									</div>
									<!-- Booking Doctor Info -->
									
									<div class="booking-summary">
										<div class="booking-item-wrap">
											<ul class="booking-date">
												<li><?php echo $row['specialization']; ?></li>
												<li></li>
											</ul>
											<ul class="booking-fee">
												<p><?php echo $row['biography']; ?></p>
											</ul>
											
										</div>
										
									</div>
								</div>
							</div>
							<?php  
		}
		}
		
		mysqli_close($conn);
		?>
							<!-- /Booking Summary -->
							
						</div>
					</div>

				</div>

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
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		
	</body>

<!-- Mirrored from doccure-html.dreamguystech.com/template/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Apr 2021 18:52:23 GMT -->
</html>