<?php
session_start();
if(!session_is_registered(id)){
header("location:index.php");
} else {
	include("config.php");
		
	$from_id = $_SESSION['id'];
	$to_id = $_SESSION['curr_to_id'];
	$message = $_POST["message"];

	$query2 = "INSERT INTO messages values ('$from_id', '$to_id', '$message')";
	$result2 = mysql_query($query2);
	header("location:classes.php");
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

<!-- Start of first page: #one -->
<div data-role="page" id="one" data-add-back-btn="true">

	<div data-role="header">
		<a href="classes.php" data-icon="back" id="back" class="ui-btn-left">Classes</a>
		<h1>StudyMeet</h1>
		<a href="logout.php" data-icon="delete" id="log_out" class="ui-btn-right">Logout</a>
	</div><!-- /header -->

	<div data-role="content">	
		<h2>Find a Study Group!</h2>
		
		<?php 

		?>
		
	</div><!-- /content -->
		
	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="b">
			<ul>
				<li><a href="classes.php" id="home" data-icon="custom">Classes</a></li>
				<li><a href="my_profile.php" id="key" data-icon="custom" >Profile</a></li>
				<li><a href="messages.php" id="email" data-icon="custom" >Messages</a></li>
			</ul>
		</div>
	</div>

</div>
</div><!-- /page one -->


</body>
</html>