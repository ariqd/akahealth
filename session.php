<?php
session_start();
include ("config.php");

$user_check = $_SESSION['login_user']['email'];

$ses_sql = mysqli_query($db, "SELECT email FROM user WHERE email = '$user_check'");

$row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);

//$login_session = $row['nama'];

if (!isset($_SESSION['login_user'])) {
    $_SESSION['declined'] = "Please login first!";
    header("location:http://localhost/akahealth/login.php");
}
