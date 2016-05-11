<?php
require_once("forumUserDB.php");
require_once("forums.php");
require_once("rpc.php");


//$comment = $_POST['comment'];

 

$request = json_decode(file_get_contents("php://input"),true);
$response = "ayy lmao<p>";
switch($request['request'])
{
    case "addComment":
	$comment = $request['comment'];
	$title=$request['title'];
	$myId = $_SESSION['myId'];
	$title = $_SESSION['currentpost'];
	$addCom= new forums("connect.ini");
	$addCom->addComment($title,$comment);
	//echo "Comment added!";	
	break;
}




?>