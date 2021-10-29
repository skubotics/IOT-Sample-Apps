<?php
error_reporting(0);
require_once('./functions.php');
$data=getFileStatus();

if($data[0]=='1'){
	$device1_ON="on";
	$device1_OFF="";
}else{
	$device1_ON="";
	$device1_OFF="off";
}
if($data[1]=='1'){
	$device2_ON="on";
	$device2_OFF="";
}else{
	$device2_ON="";
	$device2_OFF="off";
}
if($data[2]=='1'){
	$device3_ON="on";
	$device3_OFF="";
}else{
	$device3_ON="";
	$device3_OFF="off";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>My Multi Device Dashboard</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Multi Device IOT Dashboard</h1>
<div>
<span> LED 1 : </span>
<a href="filewrite.php?writeA=on" class="<?php echo $device1_ON; ?>">ON</a>
<a href="filewrite.php?writeA=off" class="<?php echo $device1_OFF; ?>">OFF</a>
</div>
<div>
<span> LED 2 : </span>
<a href="filewrite.php?writeB=on" class="<?php echo $device2_ON; ?>">ON</a>
<a href="filewrite.php?writeB=off" class="<?php echo $device2_OFF; ?>">OFF</a>
</div>
<div>
<span> LED 3 : </span>
<a href="filewrite.php?writeC=on" class="<?php echo $device3_ON; ?>">ON</a>
<a href="filewrite.php?writeC=off" class="<?php echo $device3_OFF; ?>">OFF</a>
</div>
</body>
</html>