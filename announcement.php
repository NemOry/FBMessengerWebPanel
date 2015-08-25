<?php

$response 				= new Response();
$response->title 		= "";
$response->body 		= "";

echo json_encode($response);

class Response
{
	public $title 	= "";
	public $body 	= "";
}

?>