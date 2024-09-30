<?php
echo "Welcome to the stage where we are ready to connect to a database <br>";

/*
way to connect to a MySql
  1. MySQLi extension
  2. PDO
  */


  //Connecting to Database 
$serverName="localhost";
$userName="root";
$password="";
$db="freebook";

//creating connection
$conn=mysqli_connect($serverName,$userName,$password,$db);

//Die if connection was not successfull
if(!$conn)
 {
    die("Sorry we failed to connect database".mysqli_connect_error());
 }
echo"Connection was successfull";
?>