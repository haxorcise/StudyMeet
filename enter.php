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
		<a href="index.php" data-icon="check" id="logout" class="ui-btn-right">Logout</a>

	</div><!-- /header -->

	<div data-role="content">	
		<?php
		include ('config.php');
		
		
		
		$query = "SELECT * FROM users WHERE username = '" . $_POST["username"] . "' AND password = '" . $_POST["password"] . "'";
		$result = mysql_query($query);
		//this tells you how many rows were returned
		$num_rows = mysql_num_rows($result);
		//echo $num_rows;
		if ($num_rows > 0) {
			echo "<p>You are now logged in!</p>";
			echo '<a href="http://www.stanford.edu/~gnaifeh/cgi-bin/week5test/classes.php" data-role="button">Continue to Classes</a>';
		} else {
			echo "<p>Login Failed</p>";
		}	
		?>

	</div><!-- /content -->

	
	<script type="text/javascript">
		$("#logout").click(function() {
			localStorage.removeItem('username');
			$("#form").show();
			$("#logout").hide();
		});
	</script>
</div><!-- /page -->

</body>
</html>