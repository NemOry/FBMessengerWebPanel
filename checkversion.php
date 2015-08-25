<?php

$userAppVersion			= $_GET["version"];
$latestReleasedVersion 	= "1.1.0.1";

$response 				= new Response();

if($userAppVersion != $latestReleasedVersion)
{
	$response->title 		= "New Update Available ".$latestReleasedVersion;
	$response->body 		= "Please upgrade your current version ".$userAppVersion." to the latest version ".$latestReleasedVersion." for FREE and get these awesome new changes.";
	$response->link 		= "http://appworld.blackberry.com/webstore/content/52509887/";

	$list 					= array();
	//array_push($list, "");

	$response->list 		= $list;
}

echo json_encode($response);

class Response
{
	public $status 	= "okay";
	public $title 	= "";
	public $body 	= "";
	public $list 	= array();
	public $link 	= "";
}

?>