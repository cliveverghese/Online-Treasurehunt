<html>
<head>
	<title><?php if ($title) print $title; ?><?php if (!$title) print "Treasure Hunt" ?></title>
	<link href = "theme/style.css" media = "all" rel = "stylesheet" type = "text/css">
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-15226524-5']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>

</head>
<body>
	<div id = "watermark"></div>
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
	
	<div id = "navbar">
		<a href = "leaderboard.php"><img src = "theme/imgs/leaderboard.png"></a><br><a href = "rules.php"><img src = "theme/imgs/rules.png"></a><br><a href = "hall.php"><img src = "theme/imgs/winners.png"></a><br><?php if($_SESSION["valid_user"]) :?><a href = "forum.php"><img src = "theme/imgs/forum.png"></a><br><a href = "logout.php"><img src = "theme/imgs/logout.png"></a><?php endif; ?><?php if($_SESSION["role"] >= 6) :?><br><a href = "addlevels.php">Add levels</a><?php endif; ?>
	</div>
	
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
