<?php

	$content = "<h2>Registration Form</h2><br><br><br><form id = \"regform\" name = \"register\" action = \"registeraction.php\">
	<table id= \"tablereg\">
	<tr><td>Username</td> <td><input class = \"textbox\" type = \"text\" name = \"username\"/></td></tr>
	<tr><td>Alias</td> <td><input class = \"textbox\" type = \"text\" name = \"alias\"/></td></tr>
	<tr><td>Password</td> <td><input class = \"textbox\" type = \"password\" name = \"password\"/></td></tr>
	<tr><td>College</td> <td><input class = \"textbox\" type = \"text\" name = \"college\"></td></tr>
	<tr><td>Phone No.</td> <td><input class = \"textbox\" type = \"text\" name = \"phone\"></td></tr>
	<tr><td>Email</td><td> <input class = \"textbox\" type = \"text\" name = \"email\"></td></tr>
	<tr><td></td><td><br><input class = \"textbox\" type = \"submit\" value = \"Submit\"></td></tr>
	</table></form>
	";
	require_once("theme/theme.php");

?>
