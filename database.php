<?php
require_once("config.php");

$result = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
$database = DB_NAME;
@mysql_select_db($database) or die( "Unable to select database. Please see if the database exists");

$sql = "CREATE TABLE IF NOT EXISTS `levels` (
		  `id` int(11) NOT NULL AUTO_INCREMENT,
		  `name` varchar(200) DEFAULT NULL,
		  `als` varchar(200) DEFAULT NULL,
		  `title` varchar(1000) DEFAULT NULL,
		  `contents` varchar(1000) DEFAULT NULL,
		  `answer` varchar(1000) DEFAULT NULL,
		  `cookie` varchar(1000) DEFAULT NULL,
		  `javascript` varchar(1000) DEFAULT NULL,
		  `stat` int(11) DEFAULT NULL,
		  `misc` varchar(200) DEFAULT NULL,
		  UNIQUE KEY `id` (`id`)
	)";
$ref = mysql_query($sql);


$sql = "CREATE TABLE IF NOT EXISTS `users` (
		  `id` int(11) NOT NULL AUTO_INCREMENT,
		  `name` varchar(200) DEFAULT NULL,
		  `password` varchar(200) DEFAULT NULL,
		  `level` int(11) DEFAULT NULL,
		  `passtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
		  `mob` varchar(20) DEFAULT NULL,
		  `college` varchar(200) DEFAULT NULL,
		  `email` varchar(200) DEFAULT NULL,
		  `role` int(11) DEFAULT NULL,
		  `fname` varchar(200) DEFAULT NULL,
		  `validation` varchar(200) DEFAULT NULL,
		  `validated` int(11) DEFAULT NULL,
		  UNIQUE KEY `id` (`id`)
	);";
$ref = mysql_query($sql);


$sql = "CREATE TABLE IF NOT EXISTS `logs` (
		  `id` int(11) NOT NULL AUTO_INCREMENT,
		  `user` varchar(200) DEFAULT NULL,
		  `val` varchar(2000) DEFAULT NULL,
		  `level` int(11) DEFAULT NULL,
		  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
		  UNIQUE KEY `id` (`id`)
	);";
$ref = mysql_query($sql);


$sql = "CREATE TABLE IF NOT EXISTS `accesslogs` (
		  `id` int(11) NOT NULL AUTO_INCREMENT,
		  `ip` varchar(20) DEFAULT NULL,
		  `user` varchar(200) DEFAULT NULL,
		  `val` varchar(2000) DEFAULT NULL,
		  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
		  UNIQUE KEY `id` (`id`)
	);";
$ref = mysql_query($sql);


$sql = "CREATE TABLE IF NOT EXISTS `forum` (
		  `id` int(11) NOT NULL AUTO_INCREMENT,
		  `user` varchar(200) DEFAULT NULL,
		  `val` varchar(2000) DEFAULT NULL,
		  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
		  `status` int(11) DEFAULT NULL,
		  `level` int(11) DEFAULT NULL,
		  UNIQUE KEY `id` (`id`)
	);";
$ref = mysql_query($sql);


$sql = "CREATE TABLE IF NOT EXISTS `fame` (
		  `id` int(11) NOT NULL AUTO_INCREMENT,
		  `user` varchar(200) DEFAULT NULL,
		  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
		  `status` int(11) DEFAULT NULL,
		  `college` varchar(200) DEFAULT NULL,
		  UNIQUE KEY `id` (`id`)
	);";
$ref = mysql_query($sql);
?>
