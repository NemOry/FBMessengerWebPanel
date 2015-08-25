<?php

$userid					= $_POST["userid"];

$uploadsLocation		= "0/".$userid;

if(!file_exists($uploadsLocation))
{
	mkdir($uploadsLocation, 0700);
}

$filesInUploadsLocation	= scandir($uploadsLocation);

if ($_FILES["filename"]["error"] > 0)
{
	// error
}
else
{
	$blob 		= file_get_contents($_FILES["filename"]["tmp_name"]);
	$filename	= $_FILES["filename"]["name"];

	file_put_contents($uploadsLocation."/".count($filesInUploadsLocation)."_".$filename, $blob);
}

?>