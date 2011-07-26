<?php 

	require_once("database.php");
	session_start();
	if (!$_SESSION["valid_user"])
	{
	Header("Location: loginform.php");
	}
	else if($_SESSION["role"] == 10)
	{
		$id = $_GET['id'];
		$role = $_GET['role'];
		$level = $_GET['level'];
	
		$sql = "UPDATE users SET role = '" . $role . "', level = '" . $level . "' WHERE id = '" . $id ."'";
		$ref = mysql_query($sql);
		$content = "User role and Level updated";
	}
	else if($_SESSION["role"] >= 6)
	{
		$id = $_GET['id'];
		$level = $_GET['level'];
	
		$sql = "UPDATE users SET  level = '" . $level . "' WHERE id = '" . $id ."'";
		$ref = mysql_query($sql);
		$content = "User Level updated";
	}
	else
		$content = "Restricted Area";
	require_once("theme/theme.php");
?>
