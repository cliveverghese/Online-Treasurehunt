<?php
	session_start();
	require_once("database.php");
	$sql = "SELECT * FROM users WHERE role != 10 AND role != -1 ORDER BY level DESC,passtime ASC";
	$ref = mysql_query($sql);
	$content = "<div class='box'>
		<img src=\"theme/clueless/border_tl.png\" style=\"position:absolute; top:0; left:0;\" />
		<img src=\"theme/clueless/border_tr.png\" style=\"position:absolute; top:0; right:0;\" />
		<img src=\"theme/clueless/border_bl.png\" style=\"position:absolute; bottom:0; left:0;\" />
		<img src=\"theme/clueless/border_br.png\" style=\"position:absolute; bottom:0; right:0;\" />
		<h2>Leaderboard</h2>
		<br /><br />
		<table id='leaderboard'>
		<tr class='first'><th>Position</th><th>Player</th><th>Level</th><th>College</th>";
	$i = 1;
	while($row = mysql_fetch_assoc($ref))
	{
		$content = $content ."<tr><td>" . $i . "</td><td> " . $row["fname"] . "</td><td>" . $row["level"] . "</td><td>" . $row["college"]. "</td></tr>";
		$i++;
	}
	$content = $content . "</table></div>";
	$title = "Leaderboard";
	
	require_once("theme/theme.php");
?>
	
