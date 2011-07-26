<?php	
	session_start();
	require_once("database.php");
	$password = sha1(mysql_real_escape_string($_POST["password"]));
	$sql = "SELECT * FROM users WHERE name = '" . $_POST["name"] . "'";
	$ref = mysql_query($sql);
	$row = mysql_fetch_assoc($ref);
	
	if($row == NULL)
	{
		$content = "Its not your friends we asked";
		$log = "Tried login in with wrong username and password was " . $_POST["password"];
	}
	else if($row["password"] == $password)
	{
		$_SESSION["ids"] = $row["id"];
		$_SESSION["valid_user"]= $_POST["name"];
		$_SESSION["level"] = $row["level"];
		$_SESSION["valid_fname"] = $row["fname"];

		$content = "Logged in successfully";
		Header("Location: index.php");
		if($row["role"] == NULL)
		{
			$_SESSION["role"] = 0;
		}
		else 
			$_SESSION["role"] = $row["role"];
		$log = "Has logged in correctly";
	
	}
	else
	{
		$content = "You have to do better than that";
		$log = "Has entered the wrong password ie " . $_POST["password"];
	}
	$sqllog = "INSERT INTO accesslogs (ip, user, time, val) VALUES ('". mysql_real_escape_string($_SERVER['REMOTE_ADDR']) . "','" . mysql_real_escape_string($_POST["name"]) . "','" . mysql_real_escape_string(time()) . "','" . mysql_real_escape_string($log) . "')";
	$ref = mysql_query($sqllog);
	
	require_once("theme/theme.php");
?>
