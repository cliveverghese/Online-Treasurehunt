<?php	
	session_start();
	require_once("database.php");
	$password = sha1(mysql_real_escape_string($_POST["password"]));
	$sql = "SELECT * FROM users WHERE name = '" . $_POST["name"] . "'";
	$ref = mysql_query($sql);
	$row = mysql_fetch_assoc($ref);
	$content = "<div class='box'>
	<img src=\"theme/clueless/border_tl.png\" style=\"position:absolute; top:0; left:0;\" />
	<img src=\"theme/clueless/border_tr.png\" style=\"position:absolute; top:0; right:0;\" />
	<img src=\"theme/clueless/border_bl.png\" style=\"position:absolute; bottom:0; left:0;\" />
	<img src=\"theme/clueless/border_br.png\" style=\"position:absolute; bottom:0; right:0;\" />";
	if($row == NULL)
	{
		$content .= "Really? Don't fool around! :P";
		$log = "Tried login in with wrong username and password was " . $_POST["password"];
	}
	else if($row["password"] == $password)
	{
		Header("Location: index.php");
		$_SESSION["ids"] = $row["id"];
		$_SESSION["valid_user"]= $_POST["name"];
		$_SESSION["level"] = $row["level"];
		$_SESSION["valid_fname"] = $row["fname"];

		$content .= "Welcome back!";
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
		$content .= "What were you thinking? That wasn't your password!";
		$log = "Has entered the wrong password ie " . $_POST["password"];
	}
	$sqllog = "INSERT INTO accesslogs (ip, user, val) VALUES ('". mysql_real_escape_string($_SERVER['REMOTE_ADDR']) . "','" . mysql_real_escape_string($_POST["name"]) . "','" . mysql_real_escape_string($log) . "')";
	$ref = mysql_query($sqllog);
	$content .= "</div><br /><br />";
	require_once("theme/clueless/theme.php");
?>
