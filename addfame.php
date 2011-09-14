<?php 
	require_once("database.php");
	session_start();
	if (!$_SESSION["valid_user"])
	{
	Header("Location: loginform.php");
	}
	if($_SESSION["role"] >= 5)
	{
		$opt = $_GET["opt"];
		$value = $_GET["winner"];
		if($opt == "add")
		{
			$sql = "SELECT * FROM users WHERE id = " . $value;
			$ref = mysql_query($sql);
			$row = mysql_fetch_assoc($ref);

			$sql = "INSERT INTO fame (user, status, college) VALUES ('" . $row['fname'] . "', '1', '" . $row['college'] . "')";
			$ref = mysql_query($sql);

		}
		else if($opt == "rem")
		{
			$sql = "DELETE FROM fame WHERE id = " . $value;
			$ref = mysql_query($sql);
		}
	}
	Header("Location: hall.php");
?>  
