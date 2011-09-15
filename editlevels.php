<?php 
	require_once("database.php");
	session_start();
	if (!$_SESSION["valid_user"])
	{
	Header("Location: loginform.php");
	}
	else if($_SESSION["role"] >= 6)
	{
		$level = $_GET["l"];
		$sql = "SELECT * FROM levels WHERE name = '" . $level . "'";
		$ref = mysql_query($sql);
		$row = mysql_fetch_assoc($ref);
		$content = "The Page look like this<br><br>". $row["contents"] . "<br><br><strong>EDIT LEVEL</strong><br><form name = \"editlevels\" action = \"processlevels.php\"><br>Level Name: " . $row['name'] . "<input type = \"hidden\" name = \"name\" value = \"". $row['name'] . "\"<br><br>Level Title:<br><input type = \"text\" name = \"title\" value = \"" . $row['title'] . "\"><br> Level Content:<br><textarea name = \"content\" rows = \"20\" cols = \"60\">" . $row['contents'] . "</textarea><br>Cookie Content:<br><input type = \"text\" name = \"cookie\" value = \"" . $row['cookie'] . "\"><br>Javascript Content:<br><input type = \"text\" name = \"javascript\" value = \"" . $row['javascript'] . "\"><br>Answer:<br><input type = \"text\" name = \"answer\" value = \"" . $row['answer'] . "\"><br><input type = \"submit\" value = \"submit\"></form>";
	}
	else
		$content = "Restricted Area";
	require_once("theme/clueless/theme.php");
?>
