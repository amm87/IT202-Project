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
		echo json_encode($_SESSION);
		
		/*$fo= new forums("connect.ini");
		$fo->getForums();
		echo '<form action="forumPostPage.html"> 
		<input type="submit" value="Make a post">
		</form>';
		
		echo '<form action="viewPostPage.html"> 
		<input type="submit" value="View a Post">
		</form>';
		echo '<form action="friendsPage.html"> 
		<input type="submit" value="Add Friend">
		</form>';
		
		echo $fo->getFriends($login->getClientId($username));*/
		
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
function redirect($url, $permanent = false)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);

    exit();
}
?>
