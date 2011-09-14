<?php

	$content = "<div class=\"box\" >
	<img src=\"theme/clueless/border_tl.png\" style=\"position:absolute; top:0; left:0;\" />
	<img src=\"theme/clueless/border_tr.png\" style=\"position:absolute; top:0; right:0;\" />
	<img src=\"theme/clueless/border_bl.png\" style=\"position:absolute; bottom:0; left:0;\" />
	<img src=\"theme/clueless/border_br.png\" style=\"position:absolute; bottom:0; right:0;\" />
	<form id = \"regform\" name = \"register\" action = \"registeraction.php\">
	<h2>Registration</h2>
	<br />
	<table id= \"tablereg\">
	<tr><td>username</td> <td><input class = \"textbox\" type = \"text\" name = \"username\"/></td></tr>
	<tr><td>alias</td> <td><input class = \"textbox\" type = \"text\" name = \"alias\"/></td></tr>
	<tr><td>password</td> <td><input class = \"textbox\" type = \"password\" name = \"password\"/></td></tr>
	<tr><td>college</td> <td><input class = \"textbox\" type = \"text\" name = \"college\"></td></tr>
	<tr><td>phone</td> <td><input class = \"textbox\" type = \"text\" name = \"phone\"></td></tr>
	<tr><td>email</td><td> <input class = \"textbox\" type = \"text\" name = \"email\"></td></tr>
	</table>
	<br />
	<input type = \"submit\" value = \"Register\" class=\"button\">
	</form>
	</div>";
	require_once("theme/theme.php");

?>
