#!/usr/bin/php

<?php

echo "begin script ".$argv[0].PHP_EOL;

class sampleClass
{
  private  $name;
  private  $address;
  private $gpa;
  private $year;
  private $major;
  public function __construct($name,$address,$gpa,$year,$major) #creates a constructor
  {
      $this-> name =$name;
      $this-> address =$address;
      $this-> gpa =$gpa;
      $this-> year =$year;
      $this-> major =$major;
  }
  
  public function printName()
  {
    echo "name: ".$this->name.PHP_EOL;
  }
  
  public function setGPA($gpa)
  {
    echo "gpa: ".$this->gpa =$gpa.PHP_EOL;
  }
}

$myStudent = new sampleClass("Anthony");
$myStudent->printName(); 
$myStudent->setGPA(0.1);

$var = "some value";
$number = 433432123;
$realNumber = 2345.12345;
$arr = array();
$arr[] =5;
$arr[] ="words";
$arr[] =343.345;
$arr[] = array("food","water","Oh God what am i doing?");
print_r($arr);

echo "end script ".$argv[0].PHP_EOL;
?>