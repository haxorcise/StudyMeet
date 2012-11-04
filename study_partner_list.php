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
		<a href="logout.php" data-icon="back" id="log_out" class="ui-btn-left">logout</a>
		<h1>StudyMeet</h1>
	</div><!-- /header -->

	<div data-role="content">	
		<h2>Find a Study Group!</h2>
		<p>These are your peers also working on this assignment!:</p>	
		
		<?php 
		include("config.php");
		$id = $_SESSION['id'];
		
		$query="SELECT * FROM users";
			$result=mysql_query($query);
			$num=mysql_numrows($result);
		
		//mysql_close();

		echo "<b><center>Available Study Partners</center></b><br><br>";
		
		$i=0;
		while ($i < $num) {
		
		$first_name=mysql_result($result,$i,"first_name");
		$last_name=mysql_result($result,$i,"last_name");
		$res=mysql_result($result,$i,"res");
		$id=mysql_result($result, $i, "Id");
		
		$redirect = 'profile.php?id='.$id;
		echo "<a href='$redirect' data-role='button' data-theme='b'> send message</a></p>";
		echo "<b>$first_name 
		$last_name</b><br>$res<br>50% done<hr><br>";
		
		
		$i++;
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