<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="refresh" content="2" />
	<title></title>
</head>
<style type="text/css">
	.box{
		border: 1px solid #000;
		border-radius: 5px;
		padding: 10px;
		margin-bottom: 10px;
	}
</style>
<body>

<?php

require_once('./functions.php');

$data=getFileStatus("dump");

$arr = explode(",",	substr_replace($data ,"", -1));

foreach ($arr as $i) {
	echo '<div class="box">Data is : '.$i.'</div>';	
}

?>

</body>
</html>