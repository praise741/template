<?php
/*kanyinsayopraise represent username 08035758481 is the password praise_db is the name of the database*/
$conn = new mysqli("localhost", "root", "", "blessin2_fastdoctor");
	 if(mysqli_connect_errno()){
		printf("connect failed: %s\n", mysqli_connect_error());
		 exit();
	}
?>