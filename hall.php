<?php 
	require_once("database.php");
	session_start();
	$content = "<h2>Hall of fame</h2>";
	if (!$_SESSION["valid_user"])
	{
	}
	
	else if($_SESSION["role"] >= 5)
	{
		$sql = "SELECT * FROM users WHERE role != 10 AND role != -1 ORDER BY level DESC, passtime ASC";
		$content = $content . "<br><br><form name = \"fame.php\" action = \"addfame.php\"><select name = \"winner\">";
		$ref = mysql_query($sql);
		while($row = mysql_fetch_assoc($ref))
		{
			$content = $content . "<option value = \"" . $row['id'] . "\">" . $row['fname'] . " AKA " . $row['name'] . "</option>";
		}
		$content = $content . "</select><input type = \"submit\" value = \"Add\"><input type = \"hidden\" value = \"add\" name = \"opt\"></form>";
	}
	$content = $content . "<br><table style=\"width:100%\">";
	$sql = "SELECT * FROM fame ORDER BY time ASC";
	$ref = mysql_query($sql);
	$i = 1;
	while($row = mysql_fetch_assoc($ref))
	{
		$content = $content ."<tr><td>Week " . $i . ".</td><td> " . $row["user"] . "</td><td></td><td>" . $row["college"]. "</td>";
		if($_SESSION["role"] >= 5)
		{
			$content = $content . "<td><form name = \"delfame\" action = \"addfame.php\"><input type = \"hidden\" value = \"rem\" name = \"opt\"><input type = \"hidden\" value = \"" . $row["id"] . "\" name = \"winner\"><input type = \"submit\" value = \"Delete\"></form></td>";
		}
		$i++;
		$content = $content . "</tr>";
	} 
	$content = $content . "</table>";
	require_once("theme/clueless/theme.php");
?>
