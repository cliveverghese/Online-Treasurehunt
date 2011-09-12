<?php
	session_start();
	require_once("database.php");
	$sql = "SELECT * FROM users WHERE role != 10 AND role != -1 ORDER BY level DESC,passtime ASC";
	$ref = mysql_query($sql);
	$content = "<h2>Clueless Ranking</h2><br><br><table width = \"60%\" align = \"center\">";
	$i = 1;
	while($row = mysql_fetch_assoc($ref))
	{
		$content = $content ."<tr><td>" . $i . ".</td><td> " . $row["fname"] . "</td><td>" . $row["level"] . "</td><td></td><td>" . $row["college"]. "</td></tr>";
		$i++;
	}
	$content = $content . "</table>";
	$title = "Leaderboard";
	
	require_once("theme/theme.php");
?>
	
