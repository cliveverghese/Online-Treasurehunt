<?php
	require_once('database.php');
			$to = 'cliveverghese@gmail.com';
			$subject = 'Registered users';
		$result = mysql_query("SELECT * FROM logs");
		$content = "\n";
while($array = mysql_fetch_array($result)) {
	$content = $content .  '\n' . $array['user'] . ' ' . $array['val'] ;
}
$list[0] = "cliveverghese@gmail.com";
	$message = $content;
	$content = "message sent";
	foreach($list as $to)
	{
		$headers = "From: admin@tresor.conjura.in" . "\r\n" . "Reply-To: cliveverghese@gmail.com";
		mail($to, $subject, $message, $headers);
		$content = $content . $to . "<br>";
	}
?>

