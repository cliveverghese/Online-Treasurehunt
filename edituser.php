<?php 
	require_once("database.php");
	session_start();
	if (!$_SESSION["valid_user"])
	{
	Header("Location: loginform.php");
	}
	else if($_SESSION["role"] >= 6)
	{
		$user = $_GET['id'];
		$sql = "SELECT * FROM users WHERE id = '" . $user . "'";
		$ref = mysql_query($sql);
		$row = mysql_fetch_assoc($ref);
		$content = "ID : " . $row['id'] . "<br>Name : " . $row['name'] . "<br>Alias : " . $row["fname"] . "<br>College : " . $row['college'] . "<br>Mob NO : " . $row['mob'] . "<br>Email : " . $row['email'] . "<br><form action=\"updateuser.php\"><input type = \"hidden\" name = \"id\" value = \"" . $row['id'] . "\"> Level : <input type = \"text\" name = \"level\" value = \"" . $row['level'] . "\"><br>";
		if($_SESSION["role"] == 10)
			$content = $content . "<input type = \"text\" name = \"role\" value = \"" . $row['role'] . "\">";
		$content = $content . "<input type = \"submit\" value=\"update\"></form>";
		$name = $row['name'];
		$sql = "SELECT * FROM logs WHERE user = '" . $name . "'ORDER BY time DESC";
		$ref = mysql_query($sql);
		$content = $content . "<br><br>";		
		while($row = mysql_fetch_assoc($ref))
		{
			
			 $content = $content . "<br>" . $row["user"] . "&nbsp; : &nbsp;" . $row["val"];
		}
		if($_SESSION["role"] == 10)
		{
			$sql = "SELECT * FROM accesslogs WHERE user = '" . $name . "' ORDER BY time DESC";
			$ref = mysql_query($sql);
			$content = $content . "<br><br>";
			while($row = mysql_fetch_assoc($ref))
			{
				$content = $content . "<br>" . $row['val'] . "&nbsp; From" . $row['ip'];
			}
		}
	}
	else
		$content = "Restricted Area";
	require_once("theme/clueless/theme.php");
?>
