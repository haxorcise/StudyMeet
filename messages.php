<?php
session_start();
if(!session_is_registered(id)){
header("location:index.php");
}
?>
// This is a test edit 
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
<body> <!-- /contentstart -->
<div data-role="page" id="one" data-add-back-btn="true">

	<div data-role="header">
		<h1>StudyMeet</h1>
		<a href="logout.php" data-icon="delete" data-iconpos="right"  id="log-out" class="ui-btn-right">Logout</a>
	</div><!-- /header -->

	<div data-role="content">	
		<h2>Find a Study Group!</h2>
		<p>These are your messages!:</p>	
		
		<?php 
		include("config.php");
		$id = $_SESSION['id'];
		
		$query="SELECT * FROM messages WHERE to_id = '$id'";
		$result=mysql_query($query);
		
		while ($row = mysql_fetch_assoc($result)) {
			$from_id = $row['from_id'];
			
			$query2 = "SELECT * FROM users WHERE Id = '$from_id'";
			$result2 = mysql_query($query2);
			echo mysql_result($result2 , 0,"first_name").":";
			
			echo "<br />";
			
			echo $row['message'];
			$redirect = 'profile.php?id='.$row['from_id'];
			echo "<a href='$redirect' data-role='button' data-theme='b'>Reply</a></p>";
			echo "<br />";
		}

		
		//mysql_close();
		
		?>


</div><!-- /content -->
	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="b">
			<ul>
				<li><a href="classes.php" id="home" data-icon="custom" >Classes</a></li>
				<li><a href="my_profile.php" id="key" data-icon="custom" >Profile</a></li>
				<li><a href="classes.php" id="email" data-icon="custom" class="ui-btn-active">Messages</a></li>
			</ul>
		</div>
	</div>

</div>
</div><!-- /page one -->


</body>
</html>