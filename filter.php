<!DOCTYPE html> 
<html>

<head>
	<title>VoteCaster | Filter</title> 
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

<div data-role="page" id="filter">

	<div data-role="header">
		<a href="classes.html" data-iconpos="left" data-icon="delete">Cancel</a>
		<h1>Forms</h1>
		
	</div><!-- /header -->

	<div data-role="content">	
		<p></p>
		<ul data-role="listview" data-inset="true" data-filter-placeholder="Choose a class..." data-filter="true">			
			<?php
			include("config.php");
			$id = $_SESSION['id'];
			$query = "SELECT * FROM Main_Classes";
			$result = mysql_query($query);
			while ($row = mysql_fetch_assoc($result)) {
				$class=$row["Class"];
				echo "<li><a href='classes.php'>$class</a></li>";
			}
			?>
		</ul>
	</div><!-- /content -->

	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="a">
			<ul>
				<li><a href="classes.php" id="home" data-icon="custom" class="ui-btn-active">Classes</a></li>
				<li><a href="profile.php" id="key" data-icon="custom">Profile</a></li>
			</ul>
		</div>
	</div>

</div><!-- /page -->


</body>
</html>