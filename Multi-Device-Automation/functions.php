<?php

function getFileStatus(){
	$myfile = fopen("dump", "r") or die("Unable to open file!");
	$data=fread($myfile,filesize("dump"));
	fclose($myfile);
	return $data;
}

function writeToFile($data){
	$myfile = fopen("dump", "w") or die("Unable to open file!");
	fwrite($myfile, $data);
	fclose($myfile);
	header("Location: index.php");
	exit(0);
}

?>