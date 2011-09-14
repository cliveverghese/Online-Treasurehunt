<?php 
	require_once("database.php");
	$sql = "INSERT INTO users (name, password, level, role) VALUES ('" . mysql_real_escape_string($_GET["name"]) . "','" . sha1(mysql_real_escape_string($_GET['password'])) . "','0',"."'10')";
	$ref = mysql_query($sql);
	
	$result = mysql_result($ref, 0);
	
	$content = "Admin Registered Sucessfully";
?>
