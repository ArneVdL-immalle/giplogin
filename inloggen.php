<?php
include "db_cred.php";

$con = mysqli_connect($hostname, $user, $pass, $db);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$username = $_POST["username"];
$password = md5($_POST["password"]);
$user_sql = "SELECT id,username, password FROM users WHERE username='$username' AND password='$password'";
$user_check = mysqli_query($con, $user_sql);
if ($user_check){
    echo "u bent ingelogd.";
} else {
  echo "u bent niet ingelogd.";
}