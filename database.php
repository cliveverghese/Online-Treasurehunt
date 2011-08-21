<?php
require_once("config.php");

$result = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
$database = DB_NAME;
@mysql_select_db($database) or die( "Unable to select database. Please see if the database exists");
$sql = sprintf("SELECT COUNT(*) FROM information_schema.tables WHERE table_schema = '%s' AND table_name = '%s'", DB_NAME, mysql_real_escape_string('levels'));

$ref = mysql_query($sql);

$result = mysql_result($ref, 0);
if($result == 0){	
	 $sql = "CREATE TABLE levels (id INT UNIQUE AUTO_INCREMENT, name VARCHAR(200), als VARCHAR(200), title VARCHAR(1000), contents VARCHAR(1000), answer VARCHAR(1000), cookie VARCHAR(1000), javascript VARCHAR(1000), stat INT, misc VARCHAR(200))";
	 $ref = mysql_query($sql);
	 $result = mysql_result($ref,0);
}

$sql = sprintf("SELECT COUNT(*) FROM information_schema.tables WHERE table_schema = '%s' AND table_name = '%s'", DB_NAME, mysql_real_escape_string('users'));
$ref = mysql_query($sql);

$result = mysql_result($ref,0);

if($result == 0)
{
	$sql = "CREATE TABLE users (id INT UNIQUE AUTO_INCREMENT, name VARCHAR(200), password VARCHAR(200), level INT, passtime INT, mob VARCHAR(20) ,college VARCHAR(200), email VARCHAR(200), role INT, fname VARCHAR(200), validation VARCHAR(200), validated INT)";
	$ref = mysql_query($sql);
	$result = mysql_result($ref, 0);
}

$sql = sprintf("SELECT COUNT(*) FROM information_schema.tables WHERE table_schema = '%s' AND table_name = '%s'", DB_NAME, mysql_real_escape_string('logs'));
$ref = mysql_query($sql);

$result = mysql_result($ref,0);

if($result == 0)
{
	$sql = "CREATE TABLE logs (id INT UNIQUE AUTO_INCREMENT, user VARCHAR(200), val VARCHAR(2000), level INT, time INT)";
	$ref = mysql_query($sql);
	$result = mysql_result($ref, 0);
}

$sql = sprintf("SELECT COUNT(*) FROM information_schema.tables WHERE table_schema = '%s' AND table_name = '%s'", DB_NAME, mysql_real_escape_string('accesslogs'));
$ref = mysql_query($sql);
$result = mysql_result($ref,0);
if($result == 0)
{
	$sql = "CREATE TABLE accesslogs (id INT UNIQUE AUTO_INCREMENT, ip VARCHAR(20), user VARCHAR(200), val VARCHAR(2000), time INT)";
	$ref = mysql_query($sql);
	$result = mysql_result($ref,0);
}
$sql = sprintf("SELECT COUNT(*) FROM information_schema.tables WHERE table_schema = '%s' AND table_name = '%s'", DB_NAME, mysql_real_escape_string('forum'));
$ref = mysql_query($sql);
$result = mysql_result($ref,0);
if($result == 0)
{
	$sql = "CREATE TABLE forum (id INT UNIQUE AUTO_INCREMENT, user VARCHAR(200), val VARCHAR(2000), time INT, status INT, level INT)";
	$ref = mysql_query($sql);
	$result = mysql_result($ref,0);
}

$sql = sprintf("SELECT COUNT(*) FROM information_schema.tables WHERE table_schema = '%s' AND table_name = '%s'", DB_NAME, mysql_real_escape_string('fame'));
$ref = mysql_query($sql);
$result = mysql_result($ref,0);
if($result == 0)
{
	$sql = "CREATE TABLE fame (id INT UNIQUE AUTO_INCREMENT, user VARCHAR(200), time INT, status INT ,college VARCHAR(200))";
	$ref = mysql_query($sql);
}
?>
