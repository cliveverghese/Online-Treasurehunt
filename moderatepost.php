<?php
	session_start();
	require_once("database.php");
	if (!$_SESSION["valid_user"])
	{
	Header("Location: loginform.php");
	}
	if($_SESSION["role"] >= 5)
	{
		$id = mysql_real_escape_string($_GET["id"]);
		$opt = mysql_real_escape_string($_GET["opt"]);
		$sql = "UPDATE forum SET status = " . $opt . " WHERE id = " . $id;
		$ref = mysql_query($sql);
		$content = "Forum post moderated";
		Header("Location: forum.php");
	}
	else
	{
		$content = "Restricted access";
	}
	require_once("theme/theme.php");
?>
	
