<?php

require_once('./functions.php');

if(isset($_GET['data'])){
	if(is_numeric($_GET['data'])){
		dumpToFile($_GET['data'], "dump");
		echo "success";
	}
	else
		echo "not a number";
}
else{
	echo "parameters missing";
}

?>