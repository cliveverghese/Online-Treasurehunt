<?php
	require_once('database.php');
			$to = 'clueless@tathva.org';
			$subject = 'Registered users';
		$result = mysql_query("SELECT * FROM logs");
		$content = "\n";
while($array = mysql_fetch_array($result)) {
	$content = $content .  '\n' . $array['user'] . ' ' . $array['val'] ;
}
$list[0] = "clueless@gmail.com";
	$message = $content;
	$content = "message sent";
	foreach($list as $to)
	{
		$headers = "From: clueless@tathva.org" . "\r\n" . "Reply-To: clueless@tathva.org";
		mail($to, $subject, $message, $headers);
		$content = $content . $to . "<br>";
	}
?>

