<?php
session_start();
include "connection.php";
date_default_timezone_set("Asia/kolkata");
extract($_POST);

if (isset($_POST['submit'])){
$first_name = mysqli_real_escape_string($con, $_POST['first_name']);
$last_name = mysqli_real_escape_string($con, $_POST['last_name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$phone = mysqli_real_escape_string($con, $_POST['phone']);
$country = mysqli_real_escape_string($con, $_POST['country']);
$company = mysqli_real_escape_string($con, $_POST['company']);
$job_title = mysqli_real_escape_string($con,$_POST['job_title']);
$open_for_aqua = mysqli_real_escape_string($con,$_POST['using_aqua']);
$filename =mysqli_real_escape_string($con,$_POST['filename']);

$query = "INSERT INTO aqua_cloud_native_attack(first_name, last_name   , email, phone, country,company, job_title, open_for_aqua, filename) VALUES ('$first_name', '$last_name', '$email','$phone','$country','$company', '$job_title','$open_for_aqua', '$filename' )";
}
if (mysqli_query($con, $query)) {
  $file =  $filename;
  $_SESSION['filename'] = $file;
  include("download.php");   


}

else{
  echo("<script>alert('Something went wrong!');window.location.href='index.php';</script>");
  echo "Error: " . $query . "<br>" . mysqli_error($con);
}


?>