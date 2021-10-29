<?php

date_default_timezone_set("Asia/Calcutta");

function dumpToFile($output, $fileName){
	$myfile = fopen($fileName, "a") or die("Unable to open file!");
	fwrite($myfile, ($output).",");
	fclose($myfile);
}

function getFileStatus($fileName){
	$myfile = fopen($fileName, "r") or die("Unable to open file!");
	$data=fread($myfile,filesize($fileName));
	fclose($myfile);
	return $data;
}

?>