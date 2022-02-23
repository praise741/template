<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "duber_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE  FROM doctor WHERE email='$_REQUEST[email]'";

if (mysqli_query($conn, $sql)) {
  echo "<script>alert('Record deleted successfully')
 location.href='doctor_list.php' 
  </script>";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>