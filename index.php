<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from doccure-html.dreamguystech.com/template/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Apr 2021 18:53:26 GMT -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Doccure</title>
	<!-- Favicons -->
	<link type="image/x-icon" href="assets/img/favicon.png" rel="icon">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css"> 
	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
	<!-- Main Wrapper -->
	<div class="main-wrapper">
        <!--Top Header -->
        <?php include("header.php"); ?>
		<div class="header-top">
			<div class="left-top ">
				<ul>
					<li><i class="fas fa-map-marker-alt top-icon"></i>123, washington street, uk</li>
					<li><i class="fas fa-phone-volume top-icon"></i>+19 123-456-7890</li>
					<li><i class="fas fa-envelope top-icon"></i>mail@yourdomain.com</li>
				</ul>
			</div>
			<div class="right-top ">
				<ul>
					<li><i class="fab fa-facebook-f top-icons"></i>
					</li>
					<li><i class="fab fa-instagram top-icons"></i>
					</li>
					<li><i class="fab fa-linkedin-in top-icons"></i>
					</li>
					<li><i class="fab fa-twitter top-icons"></i>
					</li>
				</ul>
			</div>
		</div>
		<!--/Top Header -->
		<!-- Header -->
		<header class="header">

		</header>
		<!-- /Header -->
		<!-- Home Banner -->
		<section id="home" class="divider">
			<div class="container-fluid p-0">
			<!--- slider ---->
				<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" data-interval="2500"> 
				  <div class="carousel-inner">
					<div class="carousel-item active">
					  <img class="d-block w-100" src="assets/img/slider/slider-1.jpg" alt="First slide">
					  <div class="carousel-caption d-none d-md-block">
						  <span>We Provide Solution</span>
						  <h2>To stressless Life</h2>
						  <p>People who are more perfectionist are most likely to be depressed,<br>Because they stress themselves out so much.</p>
						</div>
					</div>
					<div class="carousel-item">
					  <img class="d-block w-100" src="assets/img/slider/slider-2.jpg" alt="Second slide">
					  <div class="carousel-caption d-none d-md-block">
						  <span>We Provide Solution</span>
						  <h2>Health Care Solution</h2>
						  <p>Every day we bring hope to millions of children in the world's<br>  hardest places as a sign of God's unconditional love.</p>
						</div>
					</div>
					<div class="carousel-item">
					  <img class="d-block w-100" src="assets/img/slider/slider-3.jpg" alt="Third slide">
					  <div class="carousel-caption d-none d-md-block">
						  <span>We Provide total</span>
						  <h2>Personalised care</h2>
						  <p>People who are more perfectionist are most likely to be depressed,<br>Because they stress themselves out so much.</p>
						</div>
					</div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				  </a>
				</div>
			<!--- /slider ---->
				
			</div>
		</section>
		<!-- /Home Banner -->
		<section class="section section-search">
				<div class="container-fluid">
					<div class="banner-wrapper">
						<div class="banner-header text-center">
							<h1 style="font-size:30px;color:grey;">Search Doctor, Make an Appointment</h1>
							<p>Discover the best doctors, clinic & hospital the city nearest to you.</p>
						</div>
                         
						<!-- Search -->
						<div class="search-box">
							<form method="post" action="search.php">
								
								<div class="form-group search-info">
									<input type="text" class="form-control" name="search" placeholder="Search Doctors based on the problems you are having">
									<span class="form-text">Ex : Dental problems etc.</span>
								</div>
								<button type="submit" class="btn btn-primary search-btn mt-0"><i class="fas fa-search"></i> <span>Search</span></button>
							</form>
						</div>
						<!-- /Search -->
						
					</div>
				</div>
			</section>
		<!-- Clinic and Specialities -->
		<section class="section section-specialities">
			<div class="container-fluid">
				<div class="section-header text-center">
					<h2>Clinic and Specialities</h2>
					<p class="sub-title"></p>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-9">
						<!-- Slider -->
						<div class="specialities-slider slider">
							<!-- Slider Item -->
							<div class="speicality-item text-center">
								<div class="speicality-img">
									<img src="assets/img/specialities/specialities-01.png" class="img-fluid" alt="Speciality">	<span><i class="fa fa-circle" aria-hidden="true"></i></span>
								</div>
								<p>Urology</p>
							</div>
							<!-- /Slider Item -->
							<!-- Slider Item -->
							<div class="speicality-item text-center">
								<div class="speicality-img">
									<img src="assets/img/specialities/specialities-02.png" class="img-fluid" alt="Speciality">	<span><i class="fa fa-circle" aria-hidden="true"></i></span>
								</div>
								<p>Neurology</p>
							</div>
							<!-- /Slider Item -->
							<!-- Slider Item -->
							<div class="speicality-item text-center">
								<div class="speicality-img">
									<img src="assets/img/specialities/specialities-03.png" class="img-fluid" alt="Speciality">	<span><i class="fa fa-circle" aria-hidden="true"></i></span>
								</div>
								<p>Orthopedic</p>
							</div>
							<!-- /Slider Item -->
							<!-- Slider Item -->
							<div class="speicality-item text-center">
								<div class="speicality-img">
									<img src="assets/img/specialities/specialities-04.png" class="img-fluid" alt="Speciality">	<span><i class="fa fa-circle" aria-hidden="true"></i></span>
								</div>
								<p>Cardiologist</p>
							</div>
							<!-- /Slider Item -->
							<!-- Slider Item -->
							<div class="speicality-item text-center">
								<div class="speicality-img">
									<img src="assets/img/specialities/specialities-05.png" class="img-fluid" alt="Speciality">	<span><i class="fa fa-circle" aria-hidden="true"></i></span>
								</div>
								<p>Dentist</p>
							</div>
							<!-- /Slider Item -->
						</div>
						<!-- /Slider -->
					</div>
				</div>
			</div>
		</section>
		<!-- Clinic and Specialities -->
		<!-- Category Section -->
		<section class="section section-category">
			<div class="container">
				<div class="section-header text-center">
					<h2>Browse by Specialities</h2>
					<p class="sub-title">We have doctors across all fields</p>
				</div>
				<div class="row">
					<div class="col-lg-3">
						<div class="category-box">
							<div class="category-image">
								<img src="assets/img/category/1.png" alt="">
							</div>
							<div class="category-content">
								<h4>Urology</h4>
								<span>21 Doctors</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="category-box">
							<div class="category-image">
								<img src="assets/img/category/2.png" alt="">
							</div>
							<div class="category-content">
								<h4>Neurology</h4>
								<span>18 Doctors</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="category-box">
							<div class="category-image">
								<img src="assets/img/category/3.png" alt="">
							</div>
							<div class="category-content">
								<h4>Orthopedic</h4>
								<span>17 Doctors</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="category-box">
							<div class="category-image">
								<img src="assets/img/category/4.png" alt="">
							</div>
							<div class="category-content">
								<h4>Cardiologist</h4>
								<span>12 Doctors</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="category-box">
							<div class="category-image">
								<img src="assets/img/category/5.png" alt="">
							</div>
							<div class="category-content">
								<h4>Dentist</h4>
								<span>07 Doctors</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="category-box">
							<div class="category-image">
								<img src="assets/img/category/1.png" alt="">
							</div>
							<div class="category-content">
								<h4>Urology</h4>
								<span>16 Doctors</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="category-box">
							<div class="category-image">
								<img src="assets/img/category/4.png" alt="">
							</div>
							<div class="category-content">
								<h4>Cardiologist</h4>
								<span>18 Doctors</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="category-box">
							<div class="category-image">
								<img src="assets/img/category/3.png" alt="">
							</div>
							<div class="category-content">
								<h4>Neurology</h4>
								<span>22 Doctors</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Category Section -->
		<!-- Popular Section -->
	
		<!-- Availabe Features -->
		
		<!-- Footer -->
		<?php include("footer.php")?>
		<!-- /Footer -->
		</div>
		<!-- /Main Wrapper -->
		<!-- jQuery -->
		<script src="assets/js/jquery.min.js"></script>
		<!-- Bootstrap Core JS -->
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<!-- Slick JS -->
		<script src="assets/js/slick.js"></script> 
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
</body>


<!-- Mirrored from doccure-html.dreamguystech.com/template/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Apr 2021 18:53:30 GMT -->
</html>