<?php

require_once("forumUserDB.php");
require_once("forums.php");

$request = $_POST['request'];
$response = "ayy lmao<p>";
$forum = new forums("connect.ini");
switch($request)
{
    case "login":
	$username = $_POST['username'];
	$password = $_POST['password'];
	$login = new forumUserDB("connect.ini");
	$response = $login->validateClient($username,$password);
	if ($response['success']===true)
	{
		$response = "Login Successful!<p>";
	
	}
	else
	{
		$response = "Login Failed:".$response['message']."<p>";
	}
	break;
}

echo $response;
?>
