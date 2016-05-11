<?php
require_once("forumUserDB.php");
require_once("forums.php");
require_once("rpc.php");
$con= new forums("connect.ini");
$con->getFriends($_SESSION['myId']);



$request = json_decode(file_get_contents("php://input"),true);
//$addPost = $_POST['add'];
switch($request['request'])
{
    case "add":
	$myId = $_SESSION['myId'];
	$username = $request['username'];
	$friend= new forums("connect.ini");
	$response = $friend->addFriend($username);
	if ($response['success']===true)
	{
	  //echo "Friend added!";
	}
	else
	{
	  $response = $response['message']."<p>";
	  echo $response; 
	}
	break;
}

?>