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
		<a href="index.php" data-icon="back" data-icon="left" id="back" class="ui-btn-left">Back</a>
		<h1>StudyMeet</h1>
	</div><!-- /header -->
	
	<div data-role="content">	
    	<form action="check_new_user.php" method="post">
    			<label for="foo">First Name:</label>
				<input type="text" name="first_name" id="foo" />
				<label for="foo">Last Name:</label>
				<input type="text" name="last_name" id="foo" />
				<label for="foo">Username:</label>
				<input type="text" name="username" id="foo" />
				<label for="bar">Password:</label>
				<input type="password" name="password" id="bar" />
				<label for="bar">Email:</label>
				<input type="text" name="email" id="bar" />
				<label for="bar">Gender:</label>
				<input type="text" name="gender" id="bar" />
				<label for="bar">Year:</label>
				<input type="text" name="year" id="bar" />
				<label for="bar">Major:</label>
				<input type="text" name="major" id="bar" />
				<label for="bar">Residence:</label>
				<input type="text" name="residence" id="bar" />
			    <input type="submit" value="Submit!" />
		</form>	
	</div><!-- /content -->


</div><!-- /page -->

</body>
</html>