<?php 
	require_once("database.php");
	session_start();
	if (!$_SESSION["valid_user"])
	{
	Header("Location: loginform.php");
	}
	$content = "<h2>Forum</h2><form name = \"forum\" action = \"forumaddpost.php\"><br><textarea name = \"value\" rows = \"5\" cols = \"60\"></textarea>"; 
	if($_SESSION["role"] >= 5)
	{
		$content = $content . "<br><input type = \"text\" name = \"level\">";
		$sql = "SELECT * FROM forum ORDER BY time DESC";
	}
	else
	{
		$sql = "SELECT * FROM forum WHERE level = " . $_SESSION["level"] . " AND status != 0 ORDER BY time DESC";
	}
	$content = $content . "<br><input type = \"submit\" value = \"post\"></form>";
	$ref = mysql_query($sql);
	while($row = mysql_fetch_assoc($ref))
	{
		$content = $content . "<p";
		if($row["status"] == 2)
			$content = $content . " style = \"color:#f4b1b1\"";
		if($row["status"] == 0)
			$content = $content . " style = \"color:#3cf4f2\"";
		$content = $content . ">";
		$content = $content . "<br><br>" . $row["user"];
		if($row["status"] == 2)
			$content = $content . "(admin)";
		$content = $content . ": " . $row["val"];
		if($_SESSION["role"] >= 5)
		{
			$content = $content . "<br>Current status:" . $row["status"] . " And level: " . $row["level"] . " <form name = \"moderatepost\" action = \"moderatepost.php\"><select name =\"opt\"><option value =\"1\">Allow</option><option value = \"0\">Block</option></select><input type = \"hidden\" name = \"id\" value = \"" . $row["id"] . "\"><input type = \"submit\" value = \"change\"></form>";
		}
		$content = $content . "</p>";
	}
	require_once("theme/theme.php");
?>
