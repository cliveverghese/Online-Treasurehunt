<?php
	require_once("database.php");
	session_start();
	if (!$_SESSION["valid_user"])
	{
	Header("Location: loginform.php");
	}
	$val = filter_var($_GET["value"],513);

	if($_SESSION["role"] >= 5)
	{
		$level = $_GET["level"];
	}
	else if($_SESSION["role"] >= 0)
	{
		$level = $_SESSION["level"];
	}
	if($_SESSION["role"] >=5)
	{
	$sql = "INSERT INTO forum (user, val, status, level) VALUES ('" . mysql_real_escape_string($_SESSION["valid_fname"]) . "','" . mysql_real_escape_string($val) . "','2','" . $level . "')";
	}
	else 
	{
	$sql = "INSERT INTO forum (user, val, status, level) VALUES ('" . mysql_real_escape_string($_SESSION["valid_fname"]) . "','" . mysql_real_escape_string($val) . "','1','" . $level . "')";
	}
	if($_SESSION["role"] >= 0)
	{
		$ref = mysql_query($sql);
		$content = "Your post was added";
		Header("Location: forum.php");
	}
	else
		$content = "You are not allowed to post in the forum";
	require_once("theme/clueless/theme.php");
?>
