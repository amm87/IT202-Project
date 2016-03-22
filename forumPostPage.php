<?php
require_once("forumUserDB.php");
require_once("forums.php");
require_once("rpc.php");

$addPost = $_POST['submit'];

$response = "ayy lmao<p>";
switch($addPost)
{
    case "post":
	//$login = new forumUserDB("connect.ini");
	$myId = $_SESSION['myId'];
	
	$myName = $_SESSION['myName'];
	$title = $_POST['title'];
	$makepost= new forums("connect.ini");
	$makepost->addForumTopic($title);
	echo "Post Created";
	
	break;
}


?>