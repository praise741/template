<?php
include("db_conn.php");
	
		$verify="verify";
//update table data
$sql1 = "UPDATE doctor SET verification='$verify' WHERE email='$_REQUEST[email]'";

mysqli_query($conn,$sql1) or die (mysqli_error($conn));
$num=mysqli_insert_id($conn);
					if(mysqli_affected_rows($conn)!=1){
						$message= "Error inserting the application information.";
						}
						
$result1 = mysqli_query($conn, $sql1);

// if successfully update
if($result1) {
	echo "<script>alert('$_REQUEST[email] verified Successfully')
	location.href='doctor_list.php'</script>";
	}
	else{
		echo "<script>alert('Sorry! Update Not Successful!')
	location.href='index.php'</script>";
	}

mysqli_close($conn);


?>