<?php 
	session_start();
	require_once("database.php");
	if (!$_SESSION["valid_user"])
	{
	Header("Location: loginform.php");
	}
	if($_SESSION["role"] >= 1)
	{
	
	$level = $_SESSION["level"];
	$answer = filter_var($_GET["answer"],513);

	$sql = "INSERT INTO logs (user,val,level,time) VALUES ('" . mysql_real_escape_string($_SESSION["valid_user"]) . "','" . mysql_real_escape_string($answer) . "','". $level . "','" . time() . "')";

	$ref = mysql_query($sql);

	$sql = "SELECT * FROM levels WHERE name = '" . mysql_real_escape_string($level) . "'" ;
	
	$ref = mysql_query($sql);
	$row = mysql_fetch_assoc($ref);

	$ans = $row['answer'];
	if(!($ans))
	{
		$content = "you are trying to answer a question that is has not yet been decided";
	}


	else if($answer == $row['answer'])
	{
		$level++;
		$_SESSION["level"] = $level;
		$content = "Answer is right. <a href = \"index.php\">Next Level</a>";
		$sql = "UPDATE users SET level = '" . $level . "' , passtime = " . time() . " WHERE id = '" . $_SESSION["ids"] ."'"; 
		$ref = mysql_query($sql);
		$ref = mysql_query($sql);

		$content = $content;
		
	}
	else
		$content = "Wrong answer. <a href = \"index.php\">Try again</a>";
	}
	else if($_SESSION["role"] == 1)
		$content = "Please complete you email validation";
	else
		$content = "You have been banned from playing. Please contact the admins";	
	require_once("theme/theme.php");
?>
