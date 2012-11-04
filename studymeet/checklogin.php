<?php
session_start();
if(session_is_registered(username)){
header('Location:classes.php');
}
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
<div data-role="page">
	<div data-role="header">
		<h1>StudyMeet</h1>
		<a href="logout.php" data-icon="back" id="back-to-login" class="ui-btn-left">logout</a>
	</div><!-- /header -->
	<div data-role="content">	
<?php
include('config.php');
$username=$_POST['username'];
$password=$_POST['password'];
$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysql_query($query);
	//the following code is grabbing the "id" value that corresponds username and password
	$row = mysql_fetch_array($result);
	$id = $row['Id'];
//this tells you how many rows were returned
$num_rows = mysql_num_rows($result);
//echo $num_rows;
if ($num_rows == 1) {
	$_SESSION['username']=$username;
	$_SESSION['password']=$password;
	$_SESSION['id']=$id;
	echo '<p>Congratulations! You are logged in.<p><a href="classes.php" data-role="button">Continue to Classes</a>';
} else {
	echo "<p>Wrong Username or Password</p>";
}	
?>
	</div><!-- /content -->


</div><!-- /page -->

</body>
</html>