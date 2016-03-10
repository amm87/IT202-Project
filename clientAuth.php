#!/usr/bin/php
<?php

class clientDB
{
  private $db;
  public function_construct()
  {
    $this->db = new mysqli("localhost","root","aasdfdsdsd","it202");

    if($this->db->connect_errno >0)
    {
      echo __FILE__.__Line__."failed to connect to database re:". $this->db->connect_error.PHP_EOL;
      exit(-1);
 
    }
  }
  public function __destruct()
  {
     $this->db->close();
     echo "db closed".PHP_EOL;
  
  }
  
  public function validateClient($name,$password)
  {
    $query = "select * from clients where clientName='$name';");
    $results = $this->db->query($query);
    if(!$results)
    {
      echo "error with results: ".$this->db->erro.PHP_EOL;
      return false;
    }
    while($client= $results->fetch_assoc())
    {
	
    }
  }
  
  
  
  public functin addNewClient($name, $password)
  {
    $now = date("Y-m-d h: i : s", time
    $addQuery ="insert into clients (clientName, clientPW, firstLogin,lastLogin) values ('$name','$password',$now,$now)";
    
    echo "executing "
  }

?>