<?php
	$content = "<div class=\"box\" >
	<form id=\"login\" action=\"login.php\" method=\"post\">
	<img src=\"theme/clueless/border_tl.png\" style=\"position:absolute; top:0; left:0;\" />
	<img src=\"theme/clueless/border_tr.png\" style=\"position:absolute; top:0; right:0;\" />
	<img src=\"theme/clueless/border_bl.png\" style=\"position:absolute; bottom:0; left:0;\" />
	<img src=\"theme/clueless/border_br.png\" style=\"position:absolute; bottom:0; right:0;\" />
	<h2>Login</h2>
	<br />
	<table id=\"tablelogin\">
	<tr><td>username</td>
	<td><input type=\"text\" name=\"name\" class=\"textbox\" /></td></tr>
	<tr><td>password</td>
	<td><input type=\"password\" name=\"password\" class=\"textbox\" /></td></tr>
	</table>
	<br />
	<input type=\"submit\" value=\"Login\" class=\"button\"/>
	</form>
	<br />Not playin' yet?, <a title = \"Register\" href = \"register.php\">c'mon in!</a>
	</div>";
	require_once("theme/theme.php");
?>
