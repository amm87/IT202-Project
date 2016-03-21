<?php
require_once("forumUserDB.php");
require_once("forums.php");
require_once("rpc.php");


$addComment = $_POST['comment'];

 
$myId = $_SESSION['myId'];
$title = $_SESSION['currentpost'];
$friend= new forums("connect.ini");
$friend->addComment($title,$addComment);

echo "Comment added!";



?>