<?php
	$content = "<div class=\"box\" >
	<img src=\"theme/clueless/border_tl.png\" style=\"position:absolute; top:0; left:0;\" />
	<img src=\"theme/clueless/border_tr.png\" style=\"position:absolute; top:0; right:0;\" />
	<img src=\"theme/clueless/border_bl.png\" style=\"position:absolute; bottom:0; left:0;\" />
	<img src=\"theme/clueless/border_br.png\" style=\"position:absolute; bottom:0; right:0;\" />
	<form id=\"login\" action=\"login.php\" method=\"post\">
	<h2>Login</h2>
	<br />
	<table id=\"tablelogin\">
	<tr><td>username</td>
	<td><input type=\"text\" name=\"name\" class=\"textbox\" /></td></tr>
	<tr><td>password</td>
	<td><input type=\"password\" name=\"password\" class=\"textbox\" /></td></tr>
	</table>
	<br />
	<input type=\"submit\" value=\"LOGIN\" class=\"button\"/>
	</form>
	</div>";
	require_once("theme/clueless/theme.php");
?>
