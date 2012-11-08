<?php
session_start();
if(!session_is_registered(id)){
header('Location:index.php');
} else {
include('config.php');
$search=$_POST['search'];
$id=$_SESSION['id'];

$query = "SELECT * FROM Main_Classes";
$result = mysql_query($query);		
	while ($row = mysql_fetch_assoc($result)){
		$current=$row["Class"];
		if ($current == $search){
			$checkQuery = "SELECT * FROM Classes WHERE User_ID='" . $id . "'";
			$checkResult = mysql_query($checkQuery);
			$num_rows = mysql_num_rows($checkResult);
				if ($num_rows == 0) {
					mysql_query("INSERT INTO Classes VALUES ('" . $id . "', '" . $current . "'))";
					header('Location:classes.php');
				}
		}
	}
}	
?>