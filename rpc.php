<?php
session_start();

require_once("forumUserDB.php");
require_once("forums.php");

$request = $_POST['request'];

$response = "ayy lmao<p>";
switch($request)
{
    case "login":
	$username = $_POST['username'];
	$password = $_POST['password'];
	$login = new forumUserDB("connect.ini");
	$response = $login->validateClient($username,$password);
	if ($response['success']===true)
	{
		//$response = "Login Successful!<p>";
		$_SESSION['myId'] = $login->getClientId($username);
		$_SESSION['myName']=$username;
		$fo= new forums("connect.ini");
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
		
		echo $fo->getFriends($login->getClientId($username));
	}
	else
	{
		$response = "Login Failed:".$response['message']."<p>";
		echo $response;
	}
	break;
}


$register = $_POST['register'];
switch($register){
   case "register":
	$username = $_POST['username'];
	$password = $_POST['password'];
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
//echo $response;
//echo var_dump($_SESSION);
//$buddy = new forums("connect.ini");
//$buddy->addFriend("John");

?>
