<?php
require_once("forumUserDB.php");
require_once("forums.php");
require_once("rpc.php");


$comment = $_POST['comment'];

 
$myId = $_SESSION['myId'];
$title = $_SESSION['currentpost'];
$addCom= new forums("connect.ini");
$addCom->addComment($title,$comment);
echo "Comment added!";




?>