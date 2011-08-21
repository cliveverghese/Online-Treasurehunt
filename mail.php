<?php
	require_once("database.php");
	if(isset($_GET["validationCode"]))
	{
		$validation = $_GET["validationCode"];
		$sql = "SELECT * FROM users WHERE validation = '" . mysql_real_escape_string($validation) . "'";
		$ref = mysql_query($sql);
		$result = mysql_result($ref,0);
		if($result == 0)
		{
			$content = "Invalid validation code";
		}
		else
		{
			$sql = "UPDATE users SET validated = 1, role  = 1 WHERE validation = '" . mysql_real_escape_string($validation) . "'";
			$ref = mysql_query($sql);
			$content = "Registration completed sucessfully.<br/>You can now <a href = \"loginform.php\">Login</a>";
		}
	}
	require_once("theme/theme.php");
?>
	
		
		
