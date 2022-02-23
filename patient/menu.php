<?php 
$date=date('Y');

?>
<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
							<div class="profile-sidebar">
								<div class="widget-profile pro-widget-content">
									<div class="profile-info-widget">
										<a href="#" class="booking-doc-img">
											<img src="passport_p/<?php echo $session_passport ?>" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3><?php echo $session_fullname; ?></h3>
											<div class="patient-details">
												<h5><i class="fas fa-birthday-cake"></i><?php echo $date - $session_dob."years old"; ?></h5>
												
											</div>
										</div>
									</div>
								</div>
								<div class="dashboard-widget">
									<nav class="dashboard-menu">
										<ul>
											<li class="active">
												<a href="patient-dashboard.php">
													<i class="fas fa-columns"></i>
													<span>Dashboard</span>
												</a>
											</li>
											<li>
												<a href="favourites.php">
													<i class="fas fa-bookmark"></i>
													<span>appointments</span>
												</a>
											</li> 
											 
																	
											<li>
												<a href="logout.php">
													<i class="fas fa-sign-out-alt"></i>
													<span>Logout</span>
												</a>
											</li>
										</ul>
									</nav>
								</div>

							</div>
						</div>