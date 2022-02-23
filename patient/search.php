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
	
<!-- Mirrored from doccure-html.dreamguystech.com/template/patient-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Apr 2021 18:52:21 GMT -->
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
		<?php include ('header.php'); ?>
			<!-- /Header -->
			
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Dashboard</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						
						<!-- Profile Sidebar -->
						<?php include ('menu.php'); ?>
						<!-- / Profile Sidebar -->
						
						<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="card">
								
								
							<div class="appointment-list">
                            <?php 
include('db_conn.php'); 
if($_POST){
$search = $_REQUEST ["search"];
$error = "Record not found"; 
$sql = "SELECT * FROM `doctor` WHERE fullname LIKE '%" . $search . "%' OR specialty= '$search'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
 while($row = mysqli_fetch_array($result)) {
		
?> 
    <div class="profile-info-widget">
        <a href="#" class="booking-doc-img">
            <img src="../passport/<?php echo $row['passport']; ?>" >
        </a>
        <div class="profile-det-info">
            <h3><a href="patient-profile.html"><?php echo $row['fullname']; ?></a></h3>
            <div class="patient-details">
                <h5><i class="fas fa-chalkboard"></i><?php echo $row['specialty']; ?> </h5>
                <h5><i class="fas fa-map-marker-alt"></i> California, United States</h5>
                <h5><i class="fas fa-envelope"></i><?php echo $row['email']; ?> </h5>
                <h5 class="mb-0"><i class="fas fa-phone"></i> <?php echo $row['phone']; ?></h5>
            </div>
        </div>
    </div>
    <br><br>
    <div class="appointment-action">
        <a <?php echo "href='doctor-profile.php?fullname=".$row['fullname']."' title='Doctor Profile'"; ?> class="btn btn-sm bg-info-light" >
            <i class="far fa-eye"></i> View
        </a>
        
        <br><br>
        <?php  
									 }
}else
 {
    echo "<script>alert('Opps! Record not found')
	location.href='patient-dashboard.php'</script>";
   }
}

 										mysqli_close($conn);
									 ?>
    </div>
</div>																
														
										
									
										  
									
									<!-- Tab Content -->
									
								</div>
							</div>
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

<!-- Mirrored from doccure-html.dreamguystech.com/template/patient-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Apr 2021 18:52:23 GMT -->
</html>