<?php
require_once("forumUserDB.php");
require_once("forums.php");
require_once("rpc.php");

	$viewpost = $_POST['submit'];
	$title = $_POST['title'];
	echo $title;
	$_SESSION['currentpost']=$title;
	$response = "ayy lmao<p>";
	$myId = $_SESSION['myId'];
	$myName = $_SESSION['myName'];
	$post= new forums("connect.ini");
	$post->getComments($title);
	
	
	echo '<form action="addCommentPage.html"> 
		<input type="submit" value="Add a Comment">
		</form>';




?>