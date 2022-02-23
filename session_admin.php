<?php
include('db_conn.php');
session_start();
$user_check = $_SESSION['email'];

$sql = mysqli_query($conn, "SELECT * FROM admin WHERE email='$user_check' ");

$row = mysqli_fetch_array($sql, MYSQLI_ASSOC);

$email = $row['email'];
$session_fullname = $row['fullname'];
$session_email = $row['email'];
$session_password = $row['password'];

if (!isset($user_check)) {
    header("Location: ../");
}
