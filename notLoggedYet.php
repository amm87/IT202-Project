<?php 
require_once("forumUserDB.php");
require_once("forums.php");

$fo= new forums("connect.ini");
$fo->getForums();
	

	


?>