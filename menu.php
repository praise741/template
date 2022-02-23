<body>
    

<div class="profile-sidebar">
                                <div class="widget-profile pro-widget-content">
                                    <div class="profile-info-widget">
                                        <a href="#" class="booking-doc-img">
                                            <img src="passport/<?php echo $session_passport ?>" alt="User Image">
                                        </a>
                                        <div class="profile-det-info">
                                            <h3><?php echo $session_fullname ?></h3>

                                            <div class="patient-details">
                                            <?php 
include('db_conn.php'); 
$sql1 = "SELECT * FROM `doctor2` where fullname='$session_fullname'";
$result1 = mysqli_query($conn, $sql1);
if (mysqli_num_rows($result1) > 0) {
 while($row = mysqli_fetch_array($result)) {
		
?>  
                                                <h5 class="mb-0"><?php echo $row["specialization"] ?></h5>
                                                <?php  
		}
		}
		
		mysqli_close($conn);
		?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dashboard-widget">
                                    <nav class="dashboard-menu">
                                        <ul>
                                            <li class="active">
                                                <a href="doctor-dashboard.php">
                                                    <i class="fas fa-columns"></i>
                                                    <span>Dashboard</span>
                                                </a>
                                            </li>
                                            
                                            
                                            
                                            
                                               <li>                                                                                   <li>
                                                <a href="doctor-profile-settings.php">
                                                    <i class="fas fa-user-cog"></i>
                                                    <span>Profile Settings</span>
                                                </a>
                                            </li>
                                            
                                            <li>
                                                <a href="logout.php">
                                                    <i class="fas fa-sign-out-alt"></i>
                                                    <span>view appointments</span>
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
                            </body>