<?php 
	session_start();
	require_once("database.php");
	if (!$_SESSION["valid_user"])
	{
	Header("Location: loginform.php");
	}
	
	$level = $_SESSION["level"];
	$answer = $_GET["answer"];

	$sql = "INSERT INTO logs (user,val,level) VALUES ('" . mysql_real_escape_string($_SESSION["valid_user"]) . "','" . mysql_real_escape_string($answer) . "','". $level . "')";

	$ref = mysql_query($sql);

	$sql = "SELECT * FROM levels WHERE name = '" . mysql_real_escape_string($level) . "'" ;
	
	$ref = mysql_query($sql);
	$row = mysql_fetch_assoc($ref);

	$ans = $row['answer'];
	if(!($ans))
	{
		$content .= "you are trying to answer a question that has not yet been decided";
	}


	else if($answer == $row['answer'])
	{
		$level++;
		$_SESSION["level"] = $level;
		$content = "Answer is right. <a href = \"index.php\">Next Level</a>";
		$sql = "UPDATE users SET level = '" . $level . "' WHERE id = '" . $_SESSION["ids"] ."'"; 
		$ref = mysql_query($sql);
		$ref = mysql_query($sql);

		$content = $content;
		
	}
	else
		$content = "Wrong answer. <a href = \"index.php\">Try again</a>";
	
	require_once("theme/theme.php");
?>
