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
		<a href="logout.php" data-icon="delete" id="log_out" class="ui-btn-right">Logout</a>
	</div><!-- /header -->

	<div data-role="content">	
		
		<?php 
		include("config.php");
		$id = $_SESSION['id'];
		//$id = $_GET['id'];
		$query = "SELECT * FROM users WHERE Id = '$id'";
		$result = mysql_query($query);
		
		
		
		echo "<b><center>Editing Your Profile</center></b><br><br>";
		
	
		
		$first_name=mysql_result($result,$i,"first_name");
		$last_name=mysql_result($result,$i,"last_name");
		$gender=mysql_result($result,$i,"gender");
		$year=mysql_result($result,$i,"year");
		$major=mysql_result($result,$i,"major");
		$res=mysql_result($result,$i,"res");
		$email=mysql_result($result,$i,"email"); 
		
		echo "<b>$first_name 
$last_name</b><br><hr>$gender<br>$year<br>$major<br>$res<br>$email<hr><br>";
?>
<?php
// close connection 
mysql_close();
?>
<?php
// TESTING CODE 

//THIS SHOULD BE UNNECESSARY WITH CONFIG 
$host="mysql-user-master.stanford.edu"; // Host name 
$username="ccs147gnaifeh"; // Mysql username 
$password="uuniesha"; // Mysql password 
$db_name="c_cs147_gnaifeh"; // Database name 
$tbl_name="users"; // Table name

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");


// get value of id that sent from address bar
//$id=$_GET['id'];

// Retrieve data from database 
$sql="SELECT * FROM users WHERE Id='$id'";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);
?>


<table width="400" border="0" cellspacing="1" cellpadding="0">
<tr>

<td>
<table width="100%" border="0" cellspacing="1" cellpadding="0">
<tr>
<td>&nbsp;</td>
<td colspan="3"><strong>Update your profile by editing the fields below:</strong> </td>
<form  method='post' name='update' action='file_update.php'>
</tr>
<tr>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
</tr>
<tr>
<td align="center">&nbsp;</td>
<td align="center"><strong>First Name</strong></td>
<td align="center"><strong>Last Name</strong></td>
<td align="center"><strong>Email</strong></td>
</tr>
<tr>
<td>&nbsp;</td>
<td align="center">
<input name="first_name" type="text" id="first_name" value="<? echo $rows['first_name']; ?>">
</td>
<td align="center">
<input name="last_name" type="text" id="last_name" value="<? echo $rows['last_name']; ?>" size="15">
</td>
<td>
<input name="email" type="text" id="email" value="<? echo $rows['email']; ?>" size="15">
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>
<input name="id" type="hidden" id="id" value="<? echo $rows['id']; ?>">
</td>
<td align="center">
<input type="submit" name="submit" value="update">
</td>
<td>&nbsp;</td>
</tr>
</table>
</td>
</form>
</tr>
</table>





<?php		
		
		//while ($row = mysql_fetch_assoc($result)) {
			//echo $row["email"];
			//$redirect = 'assignments.php?Class='.$row["Class"];
			//echo "<a href='$redirect' data-role='button' data-theme='b'>".$row["Class"]."</a></p>";
		//}

		?>
		
	</div><!-- /content -->
	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="b">
			<ul>
				<li><a href="classes.php" id="home" data-icon="custom" >Classes</a></li>
				<li><a href="my_profile.php" id="key" data-icon="custom" class="ui-btn-active" >Profile</a></li>
				<li><a href="messages.php" id="email" data-icon="custom" >Messages</a></li>
			</ul>
		</div>
	</div>

</div>
</div><!-- /page one -->


</body>
</html>