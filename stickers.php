<?php

$path	= $_GET["path"];

$files 	= scandir("stickers/".$path);

$newfiles = array();

$index = 0;

foreach ($files as $file) 
{
	if($file != "." && $file != "..")
	{
		// rename("stickers/".$path."/".$file, "stickers/".$path."/".$index.".png");

		$imageFolder = "http://$_SERVER[HTTP_HOST]/messenger/stickers/".$path."/";

		array_push($newfiles, $imageFolder.$file);
	}

	$index++;
}

echo json_encode($newfiles);

?>