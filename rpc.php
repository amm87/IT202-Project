<?php

session_start();

require_once("forumUserDB.php");
require_once("forums.php");
$url = "forumPostPage.html";
$request = json_decode(file_get_contents("php://input"),true);
$response = "error unrecognized request<p>";
$newuser = json_decode(file_get_contents("php://input"),true);
switch($request["request"])
{
    case "login":
	$username = $request['username'];
	$password = $request['password'];
	$login = new forumUserDB("connect.ini");
	$response = $login->validateClient($username,$password);
	if ($response['success']===true)
	{	
		//$response = "Login Successful!<p>";
		$_SESSION['myId'] = $login->getClientId($username);
		$_SESSION['myName']=$username; 
		echo '<a href="index.html">Login Successful Click here to go the homepage</a>';
		
		 
	}
	else
	{
		$response = "Login Failed:".$response['message']."<p>";
		echo $response;
	}
	break;
}


//$register = $_POST['register'];
switch($newuser['request']){
   case "register":
	$username = $newuser['username'];
	$password = $newuser['password'];
	$reg= new forumUserDB("connect.ini");
	$response=$reg->addNewClient($username, $password);
	if($response['success']===true)
	{
	    $response="Account Created<p>";
	    echo $response;
	}
	else
	{
	$response ="Failed:".$response['message']."<p>";
	echo $response;
	}
	break;

} 
//echo json_encode($response);
?>
