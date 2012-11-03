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
		<a href="logout.php" data-icon="back" id="log_out" class="ui-btn-left">logout</a>
		<h1>StudyMeet</h1>
	</div><!-- /header -->

	<div data-role="content">	
		<h2>Find a Study Group!</h2>
		<p>Here are your available assignments:</p>	
		
		<?php 
		include("config.php");
		$id = $_SESSION['id'];
		echo $id;
		echo $_SESSION['id'];
		
		//$query = "SELECT * FROM users WHERE Id = '$id'";
		//$result = mysql_query($query);
		
		while ($row = mysql_fetch_assoc($result)) {
			//echo $row["email"];
			//$redirect = 'assignments.php?Class='.$row["Class"];
			//echo "<a href='$redirect' data-role='button' data-theme='b'>".$row["Class"]."</a></p>";
		}

		?>
		
	</div><!-- /content -->
	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="a">
			<ul>
				<li><a href="classes.php" id="home" data-icon="custom" class="ui-btn-active">Classes</a></li>
				<li><a href="profile.php" id="key" data-icon="custom">Profile</a></li>
			</ul>
		</div>
	</div>

</div>
</div><!-- /page one -->


</body>
</html>