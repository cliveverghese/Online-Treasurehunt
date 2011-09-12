<?php
	$content = "<form id=\"login\" action=\"login.php\" method=\"post\">
	<div class=\"box\" >
	<img src=\"theme/clueless/border_tl.png\" style=\"position:absolute; top:0; left:0;\" />
	<img src=\"theme/clueless/border_tr.png\" style=\"position:absolute; top:0; right:0;\" />
	<img src=\"theme/clueless/border_bl.png\" style=\"position:absolute; bottom:0; left:0;\" />
	<img src=\"theme/clueless/border_br.png\" style=\"position:absolute; bottom:0; right:0;\" />
	<table id=\"tablelogin\">
	<tr><td><span id=\"loginform\">Username</span></td>
	<td><input type=\"text\" name=\"name\" class=\"textbox\" /></td></tr>
	<tr><td><span id=\"loginform\">Password</span></td>
	<td><input type=\"password\" name=\"password\" class=\"textbox\" /></td></tr>
	<tr><td></td><td><input type=\"submit\" value=\"Login\" /></td></tr>
	</table></div>
	</form><br>If you're not yet playing, <a title = \"Register\" href = \"register.php\">register!</a>";
	require_once("theme/theme.php");
?>
