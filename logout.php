<?php
session_start();
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 600)) {
// last request was more than 10 minutes ago
session_unset();     // unset $_SESSION variable for the run-time 
session_destroy();   // destroy session data in storage
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp

if(session_destroy()) //Destroying all sessions
{
  echo "<script>alert('You have successfully logout from Fastdoctor portal')
location.href='index.php'</script>";
   //Redirecting to home page
}
?>
