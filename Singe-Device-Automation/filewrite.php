<?php

require_once('./functions.php');

if(isset($_GET['status'])){
	$status = $_GET['status'];
	writeToFile($status);
} else {
	echo 'incorrect use of api';
}

?>