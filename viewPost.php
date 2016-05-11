<?php
require_once("forumUserDB.php");
require_once("forums.php");
require_once("rpc.php");

	/*$viewpost = $_POST['submit'];
	$title = $request['title'];
	echo $title;
	$_SESSION['currentpost']=$title;
	$response = "ayy lmao<p>";
	$myId = $_SESSION['myId'];
	$myName = $_SESSION['myName'];
	$post= new forums("connect.ini");
	$post->getComments($title); */
	
	
	/*echo '<form action="addCommentPage.html"> 
		<input type="submit" value="Add a Comment">
		</form>';*/
		
$request = json_decode(file_get_contents("php://input"),true);
$response = "ayy lmao<p>";
switch($request['request'])
{
    case "addComment":
	$title = $request['title'];
	echo $title;
	$_SESSION['currentpost']=$title;
	$response = "ayy lmao<p>";
	$myId = $_SESSION['myId'];
	$myName = $_SESSION['myName'];
	$post= new forums("connect.ini");
	$post->getComments($title);
	break;
}




?>