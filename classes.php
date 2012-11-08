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
<div data-role="page">

	<div data-role="header">
		<h1>StudyMeet</h1>
		<a href="logout.php" data-icon="delete" data-iconpos="right"  id="log-out" class="ui-btn-right">Logout</a>
	</div><!-- /header -->

	<div data-role="content">
	<?php
		include("config.php");
		$id = $_SESSION['id'];
		$query = "SELECT * FROM Classes WHERE User_ID = '$id'";
		$result = mysql_query($query);
		$num_rows = mysql_num_rows($result);
		
		echo '<h2>Find a Study Group!</h2>';

		if ($num_rows > 0) {
			echo '<p>Here are your available classes:</p>';
			while ($row = mysql_fetch_assoc($result)) {
			$redirect = 'assignments.php?Class='.$row["Class"];
			echo "<a href='$redirect' data-role='button' data-theme='b'>".$row["Class"]."</a></p>";
		}
			echo "Want to add a class?<a href='addclass.php' data-role='button' data-theme='b'>Add A Class</a>";
		} else {
			echo '<p>You have not added any classes :(</p>';
			echo "Want to add a class?<a href='addclass.php' data-role='button' data-theme='b'>Add A Class</a>";
		}
		?>
	</div><!-- /content -->
	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="b">
			<ul>
				<li><a href="classes.php" id="home" data-icon="custom" class="ui-btn-active">Classes</a></li>
				<li><a href="my_profile.php" id="key" data-icon="custom" >Profile</a></li>
				<li><a href="classes.php" id="email" data-icon="custom" >Messages</a></li>
			</ul>
		</div>
	</div>

</div>
</div><!-- /page one -->


</body>
</html>