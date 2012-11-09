<?php
include('config.php');
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$year=$_POST['year'];
$gender=$_POST['gender'];
$major=$_POST['major'];
$residence=$_POST['residence'];

mysql_query("INSERT INTO users VALUES (NULL, '$username', '$password', '$email', '$first_name', '$last_name', '$gender', '$year', '$major', '$residence')");

header("location:index.php");
?>
<!DOCTYPE html> 
<html>
<head>
	<title>StudyMeet</title> 
	<meta charset="utf-8">
	<meta name="apple-mobile-web-app-capable" content="yes">
 	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link rel="stylesheet" href="jquery.mobile-1.2.0.css" />
	<link rel="stylesheet" href="style.css" />
	<link rel="apple-touch-icon" href="appicon.png" />
	<link rel="apple-touch-startup-image" href="startup.png">
	
	<script src="jquery-1.8.2.min.js"></script>
	<script src="jquery.mobile-1.2.0.js"></script>

</head>  
<body>
</body>
</html>