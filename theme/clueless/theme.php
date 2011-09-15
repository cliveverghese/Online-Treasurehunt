<html>
<head>
	<title><?php if ($title) print $title; ?><?php if (!$title) print "Clueless" ?></title>
	<link href = "theme/clueless/style.css" media = "all" rel = "stylesheet" type = "text/css">
	<link href = "http://fonts.googleapis.com/css?family=Aldrich" rel = "stylesheet" type = "text/css">
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
	<div id = "watermarkleft"></div>
	<div id = "watermarkright"></div>
	<?php if($_SESSION["valid_user"]) :?>
	<div id = "welcome">
		How you doin', <?php echo $_SESSION["valid_user"]; ?>?
	</div>		
	<?php endif; ?>	
	<div id = "header">
		<div id = "logo">
			<img src = "theme/clueless/clueless_s.png" height = "69px" width = "495px">
		</div>
	</div>
	<div class="colmask threecol">
		<div class="colmid">
			<div class="colleft">
				<div class="col1"> 
				<!-- Second column starts -->
					<div id = "center_content<?php if($pagetype) print $pagetype ;?>">
					<?php print $content; ?>
					</div>
				<!-- Second column ends -->
				</div>
				<div class="col2">
				<!-- First column starts -->
					<ul id = "navbar">
						<li><a href = "index.php">Home</a></li>
						<li><a href = "leaderboard.php">Leaderboard</a></li>
						<li><a href = "rules.php">Rules</a></li>
						<li><a href = "hall.php">Hall of Fame</a></li>
						<?php if($_SESSION["valid_user"]) :?>
						<li><a href = "logout.php">Logout</a></li>
						<?php else: ?>
						<li><a href = "register.php">Register</a></li>
						<?php endif; ?>
						<?php if($_SESSION["role"] >= 6) :?>
						<li><a href = "addlevels.php">Add levels</a></li>
						<?php endif; ?>
					</ul>
				<!-- First column ends -->
				</div>
				<div class="col3">
				<!-- Third column start -->
				<?php if($_SESSION["role"] >= 6) :?>
					<div id = "sidebaradmin">
					<?php if($sidebaradmin) print $sidebaradmin; ?>
					</div>
				<?php endif; ?>
				<!-- Third column ends -->
				</div>
			</div>
		</div>
	</div>
	<div id="footer">
	&copy; Clueless, in association with <a href="http://www.tathva.org/2011/" target="_blank">Tathva '11</a>
	</div>	
</body>
</html>
