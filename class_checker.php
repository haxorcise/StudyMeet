<?php
session_start();
if(!session_is_registered(id)){
header('Location:index.php');
} else {
include('config.php');
$search=$_POST['search'];
$id=$_SESSION['id'];
$query = "SELECT * FROM Main_Classes WHERE Class='$search'";
$result = mysql_query($query);
$num_rows = mysql_num_rows($result);
if ($num_rows > 0) {
	$checkQuery = "SELECT * FROM Classes WHERE User_ID='$id' AND Class='$search'";
	$checkResult = mysql_query($checkQuery);
	$num_rows2 = mysql_num_rows($checkResult);
	if ($num_rows2 == 0) {
		mysql_query("INSERT INTO Classes VALUES (NULL,'$id', '$search')");
		header('Location:classes.php');
	} else {
		header('Location:classes.php');
	}
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
		<a href="classes.php" data-icon="back" data-icon="left" id="back" class="ui-btn-left">Back</a>
		<h1>StudyMeet</h1>
		<a href="logout.php" data-icon="delete" data-iconpos="right"  id="log-out" class="ui-btn-right">Logout</a>
	</div><!-- /header -->
	
	<div data-role="content">	

		<form action="class_checker.php" method="post">
			    <label for="search-basic">Try Searching for a Class Again (Perhaps CS106A, CS106B, CS147?):</label>
			    <input type="search" name="search" id="search" value="" />
    	</form>
	</div><!-- /content -->


</div><!-- /page -->

</body>
</html>