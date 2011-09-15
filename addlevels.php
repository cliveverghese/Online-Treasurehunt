<?php 
	require_once("database.php");
	session_start();
	if (!$_SESSION["valid_user"])
	{
	Header("Location: loginform.php");
	}
	else if($_SESSION["role"] >= 6)
	{
		$content = "<form name = \"addlevels\" action = \"processlevels.php\"><br>Level Name:<br><input type = \"text\" name = \"name\"/><br>Level Title:<br><input type = \"text\" name = \"title\"><br> Level Content:<br><textarea name = \"content\" rows = \"20\" cols = \"60\"></textarea><br>Cookie Content:<br><input type = \"text\" name = \"cookie\"><br>Javascript Content:<br><input type = \"text\" name = \"javascript\"><br>Answer:<br><input type = \"text\" name = \"answer\"><br><input type = \"submit\" value = \"submit\"></form>";
	}
	else
		$content = "Restricted Area";
	require_once("theme/clueless/theme.php");
?>
