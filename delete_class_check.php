<?php
session_start();
if(!session_is_registered(id)){
header("location:index.php");
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
		<a href="classes.php" data-icon="back" id="back" class="ui-btn-left">Back</a>
		<h1>StudyMeet</h1>
		<a href="logout.php" data-icon="delete" data-iconpos="right"  id="log-out" class="ui-btn-right">Logout</a>
	</div><!-- /header -->

	<div data-role="content">	
		<?php 
		$id=$_SESSION['id'];
		$_SESSION['currclass'] = $_GET['Class'];
		$currclass = $_SESSION['currclass'];
		echo "<p>Are you sure you would like to delete " . $currclass . " ?</p>";
		$delete_class_redirect = 'delete_class.php?Class=' . $currclass;
		echo "<a href='$delete_class_redirect' data-role='button' data-theme='e'>Delete " . $currclass . "</a>";
		echo "<a href='classes.php' data-role='button' data-theme='e'>Nope. Back To My Classes</a>";
		?>
		
		
	</div><!-- /content -->
	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="b">
			<ul>
				<li><a href="classes.php" id="home" data-icon="custom" class="ui-btn-active">Classes</a></li>
				<li><a href="profile.php" id="key" data-icon="custom" >Profile</a></li>
				<li><a href="messages.php" id="email" data-icon="custom" >Messages</a></li>
			</ul>
		</div>
	</div>

</div>
</div><!-- /page one -->


</body>
</html>