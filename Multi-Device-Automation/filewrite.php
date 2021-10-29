<?php
error_reporting(0);
require_once('./functions.php');
$data=getFileStatus();

if(
	isset($_GET['writeA'])
	|| isset($_GET['writeB'])
	|| isset($_GET['writeC'])
){

	if(isset($_GET['writeA']))
		$data[0]=$_GET['writeA']=="on"?'1':'0';
	else if(isset($_GET['writeB']))
		$data[1]=$_GET['writeB']=="on"?'1':'0';
	else if(isset($_GET['writeC']))
		$data[2]=$_GET['writeC']=="on"?'1':'0';

	writeToFile($data);
} 
else {
	echo 'error in api';
}

?>