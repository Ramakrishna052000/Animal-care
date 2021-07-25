<?php
$host = "localhost";
$user = "root";
$pwd = "";
$db ="animaladoption2";
$con = mysqli_connect($host,$user,$pwd);
mysqli_select_db($con,$db);
$mysqli = new mysqli("$host","$user","$pwd","$db");
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
session_start();