<html>
<head>
	<title><?php if ($title) print $title; ?><?php if (!$title) print "Treasure Hunt" ?></title>
	<link href = "theme/style.css" media = "all" rel = "stylesheet" type = "text/css">
	<link href = "http://fonts.googleapis.com/css?family=Aldrich" rel = "stylesheet" type = "text/css">
</head>
<body>
	<div id = "watermarkleft"></div>
	<div id = "watermarkright"></div>
	<div id = "header">
		<div id = "logo">
			<a href = "index.php"><img src = "theme/imgs/logo.png" height = "100px" width = "250px"></a>
		</div>
		<?php if($_SESSION["valid_user"]) :?>
		<div id = "welcome">
			Suit up!! <?php echo $_SESSION["valid_user"]; ?>
		</div>
	<div id = "footerNotification">
		Game Ended.... Winners list has been <a href = "leaderboard.php">updated</a>.
	</div>

		
		<?php endif; ?>	

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
