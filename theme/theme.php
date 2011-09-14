<html>
<head>
	<title><?php if ($title) print $title; ?><?php if (!$title) print "Clueless" ?></title>
	<link href = "theme/clueless/style.css" media = "all" rel = "stylesheet" type = "text/css">
	<link href = "http://fonts.googleapis.com/css?family=Aldrich" rel = "stylesheet" type = "text/css">
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
	<script type="text/javascript">
	function positionContent() {
		var w = 0;
		var h = 0;
		//IE
		if(!window.innerWidth)
		{
			//strict mode
			if(!(document.documentElement.clientWidth == 0))
			{
				w = document.documentElement.clientWidth;
				h = document.documentElement.clientHeight;
			}
			//quirks mode
			else
			{
				w = document.body.clientWidth;
				h = document.body.clientHeight;
			}
		}
		//w3c
		else
		{
			w = window.innerWidth;
			h = window.innerHeight;
		}
		if(document.getElementById('center_content')!=null) {
			document.getElementById('center_content').style.left = (w-900)/2 + "px";
		}
		if(document.getElementById('center_contentadmin')!=null) {
			document.getElementById('center_contentadmin').style.left = (w-900)/2 + "px";
		}
		if(document.getElementById('center_contentplayer')!=null) {
			document.getElementById('center_contentplayer').style.left = (w-900)/2 + "px";
		}
	}
	</script>
</head>
<body onload="javascript:positionContent()">
	<div id = "watermarkleft"></div>
	<div id = "watermarkright"></div>
	<?php if($_SESSION["valid_user"]) :?>
	<div id = "welcome">
		Whaddap, <?php echo $_SESSION["valid_user"]; ?>!
	</div>		
	<?php endif; ?>	
	<div id = "header">
		<div id = "logo">
			<img src = "theme/clueless/clueless_s.png" height = "69px" width = "495px">
		</div>
	</div>
	
	<ul id = "navbar">
		<li><a href = "index.php">Home</a></li>
		<li><a href = "leaderboard.php">Leaderboard</a></li>
		<li><a href = "rules.php">Rules</a></li>
		<li><a href = "hall.php">Hall of Fame</a></li>
		<?php if($_SESSION["valid_user"]) :?>
		<li><a href = "forum.php">Forum</a></li>
		<li><a href = "logout.php">Logout</a></li><?php endif; ?>
		<?php if($_SESSION["role"] >= 6) :?>
		<li><a href = "addlevels.php">Add levels</a></li>
		<?php endif; ?>
	</ul>
	
	<div id = "center_content<?php if($pagetype) print $pagetype ;?>">
	<?php print $content; ?>
	</div>
	<?php if($_SESSION["role"] >= 6) :?>
		<div id = "sidebaradmin">
		<?php if($sidebaradmin) print $sidebaradmin; ?>
		</div>
	<?php endif; ?>

	
</body>
</html>
