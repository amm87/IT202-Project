<?php
require_once("forumUserDB.php");
require_once("forums.php");
require_once("rpc.php");

//$addPost = $_POST['submit'];
$request = json_decode(file_get_contents("php://input"),true);
$response = "ayy lmao<p>";
switch($request['request'])
{
    case "addPost":
	$myId = $_SESSION['myId'];
	
	$myName = $_SESSION['myName'];
	$title = $request['title'];
	$makepost= new forums("connect.ini");
	$makepost->addForumTopic($title);
	//echo "Post Created";
	
	break;
}


?>