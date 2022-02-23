<?php
session_start();//starting session

$error=''; //variable to store error message
 if (isset($_POST['submit'])) {

                            if (empty($_POST['email']) || empty($_POST['password'])) {
								$error = "Invalid Staff ID & Password"; 
                            } 
							else 
							{   
                                                     
// Define $username and $password 
$email=$_POST['email']; 
$password=$_POST['password']; 

// To protect MySQL injection for Security purpose 
//$username = stripslashes($username);
//$password = stripslashes($password);
                                
                                
                                //Establishing Connection with Server by passing server_name, user_id and password as a parameter 
                                $connection = mysql_connect("localhost","kanyinsayopraise","password1234@gmail.com","duber");
								
								//Selecting Database
								$db = mysql_select_db("duber", $connection);
								
								//SQL query to fetch information of registerd users and finds user match.
                                $query = mysql_query("select * from duber where email='$email' AND password=PASSWORD('$password')", $connection);
                                $rows = mysql_num_rows ($query);

                                if ($rows == 1) {
                                    $_SESSION['login_user']=$email;//Initializing Session
                                    header("location: admin.php");//Redirecting to other page
                                    
                                } else {
                                    $error = "Invalid Staff ID & Password"; 
                                }
								
								//Closing Connection
								mysql_close($connection);                           
                            }
                        }
?>