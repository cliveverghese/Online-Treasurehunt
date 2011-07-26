<?php
	require_once("database.php");
	$name = $_GET["name"];
	$title = $_GET["title"];
	$content = $_GET["content"];
	$cookie = $_GET["cookie"];
	$javascript = $_GET["javascript"];
	$answer = $_GET["answer"];
	session_start();
	if (!$_SESSION["valid_user"])
	{
	Header("Location: loginform.php");
	}
	else if($_SESSION["role"] >= 6)
	{
	$sql = "SELECT COUNT(*) FROM levels WHERE name = '" . $_GET['name'] . "'";
	$ref = mysql_query($sql);
	$result = mysql_result($ref,0);
	
	if($result != 0)
	{
		$sql = "UPDATE levels SET title = '" . mysql_real_escape_string($title) . "', contents = '" . $content . "', cookie = '" . mysql_real_escape_string($cookie) . "', javascript = '" . mysql_real_escape_string($javascript) . "', answer = '" . mysql_real_escape_string($answer) . "' WHERE name = '" . mysql_real_escape_string($name) . "'";
		$ref = mysql_query($sql);

		$content = "level Updated";
	}
	else	
	{
		$sql = "INSERT INTO levels(name, title, contents, answer, cookie, javascript, stat) VALUES ('" . mysql_real_escape_string($name) . "','" . mysql_real_escape_string($title) . "','" . $content . "','" . mysql_real_escape_string($answer) . "' ,'" . mysql_real_escape_string($cookie) . "','" . mysql_real_escape_string($javascript) . "','0')";

		$ref = mysql_query($sql);

		$content = "The level was added successfully";
	}

	}
	else
	{
		$content = "Restricted Area";
	}
	
	require_once("theme/theme.php");
?>
