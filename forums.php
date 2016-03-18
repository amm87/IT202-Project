<?php

class forums{
private $db;

public function __construct($iniFile)
    {
	$ini = parse_ini_file($iniFile,true);
        //$this->logger = new errorLogger("/var/log/it202.log");
	$this->db = new mysqli(
		$ini['loginDB']['host'],
		$ini['loginDB']['user'],
		$ini['loginDB']['password'],
		$ini['loginDB']['db']);
	$this->salt = $ini['loginDB']['salt'];
	if ($this->db->connect_errno > 0 )
	{
		//$this->logger->log(__FILE__.__LINE__."failed to connect to database re: ".$this->db->connect_error);
		exit(0);
	}
	//$this->logger->log("testing");
    }

    public function getClientId($name)
    {
	$query = "select userId from users where userName = '$name';";
	$results = $this->db->query($query);
	if (!$results)
	{
	    //$this->logger->log("error with results: ".$this->db->error);
	    return 0;
	}
        $client = $results->fetch_assoc();
	if (isset($client['userId']))
	{
	    return $client['userId'];
	}
	return 0;
    }

    public function getClientName($id)
    {
	$query = "select userName from users where userId = '$id';";
	$results = $this->db->query($query);
	if (!$results)
	{
	    //$this->logger->log("error with results: ".$this->db->error);
	    return 0;
	}
        $client = $results->fetch_assoc();
	if (isset($client['userName']))
	{
	    return $client['userName'];
	}
	return 0;
    }


    public function addFriend($username)
    {
    $inDB = false;
    $myName = $_SESSION['myName'];
    $myId =$_SESSION['myId'];
    $friendId= $this->getClientId($username);
     if ($friendId===$_SESSION["myId"] or $friendId==0)
        {
	    $response = array(
		"message"=>"user $username doesn't exists!",
		"success"=>false,
		"message2"=>"Can't add yourself"
		);
	    return $response;
	}
	else
	{
	  $name = $this->db->real_escape_string($username);
	  $addQuery = "insert into friends (userId,userName, friendId, friendName) values ('$myId','$myName','$friendId','$username');";
	  $results = $this->db->query($addQuery);
	  return array("success"=>true);
	}
    }
    
	public function getForums()
	{
	  $query = "select * from forums";
	  $result = $this->db->query($query);;
	
	    echo "<table>
	    <tr>
	    <td>Thread Name:</td>
	    <td></td>
	    <td>Created By:</td>";		
	    
	    while($row = $result->fetch_assoc())
	    {
	      echo "<tr><td>" . $row['threadName'] . "</td><td>" ."</td><td>" .$row['opName'] . "</td></tr>";  //$row['index'] the index here is a field name
	    }

	    echo "</table>";
	}  
	
	
	
}
    
?>