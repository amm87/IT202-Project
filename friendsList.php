<?php
require_once("forumUserDB.php");
require_once("forums.php");
require_once("rpc.php");


$addPost = $_POST['add'];
switch($addPost)
{
    case "add":
	$myId = $_SESSION['myId'];
	$name = $_POST['friend'];
	$friend= new forums("connect.ini");
	$response = $friend->addFriend($name);
	if ($response['success']===true)
	{
	  echo "Friend added!";
	}
	else
	{
	  $response = $response['message']."<p>";
	  echo $response; 
	}
	break;
}

?>