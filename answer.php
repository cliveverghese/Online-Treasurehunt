<?php 
	session_start();
	require_once("database.php");
	if (!$_SESSION["valid_user"])
	{
	Header("Location: loginform.php");
	}
	
	$content = "<div class='box'>
		<img src=\"theme/clueless/border_tl.png\" style=\"position:absolute; top:0; left:0;\" />
		<img src=\"theme/clueless/border_tr.png\" style=\"position:absolute; top:0; right:0;\" />
		<img src=\"theme/clueless/border_bl.png\" style=\"position:absolute; bottom:0; left:0;\" />
		<img src=\"theme/clueless/border_br.png\" style=\"position:absolute; bottom:0; right:0;\" />";
	
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
		$content .= "Wrong answer. <a href = \"index.php\">Try again</a>";
	$content .= "</div><br /><br />";
	require_once("theme/clueless/theme.php");
?>
