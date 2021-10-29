<?php
error_reporting(0);
require_once('functions.php');
$data=getFileStatus();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>My Single Device Dashboard</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Single Device IOT Dashboard</h1>
	<a class="switch <?php if($data=="on"){echo 'on';} ?>" href="filewrite.php?status=on">ON</a>
	<a class="switch <?php if($data=="off"){echo 'off';} ?>" href="filewrite.php?status=off">OFF</a>
</body>
</html>