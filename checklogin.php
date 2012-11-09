<?php
session_start();
if(session_is_registered(username)){
header('Location:classes.php');
} else {
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
	$_SESSION['name']="name";
	header('Location:classes.php');
}
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
	</div><!-- /header -->

	<div data-role="content">
		<?php
		echo "<p>You have entered an incorrect username and/or password. Please try again.</p>";	
		?>
		<form action="checklogin.php" method="post">
			<label for="foo">Username:</label>
			<input type="text" name="username" id="foo" />
			<label for="bar">Password:</label>
			<input type="password" name="password" id="bar" />
		    <input type="submit" value="Login" />
		</form>	
		
		<div data-role="fieldcontain">
			To log in, enter your username and password.
		</div>	
		<div id="info">
			<a href='adduser.php' data-role='button'>Don't have a username?</a>
		</div>	
	</div><!-- /content -->


</div><!-- /page -->

</body>
</html>