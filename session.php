<?php
include('db_conn.php');

session_start();
$email=$_SESSION['email'];

$sql = mysqli_query($conn, "SELECT * FROM doctor WHERE email='$email' ");

$row = mysqli_fetch_array($sql, MYSQLI_ASSOC);

$session_fullname = $row['fullname'];
$session_email= $row['email'];
$session_phone = $row['phone'];
$session_passport = $row['passport'];
$session_location=$row['LOCATION'];



$session_passport=$row['passport'];

if (!isset($user_check)) {
    header("Location:");
}
