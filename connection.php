<?php
$host = 'localhost:3307';  
$user = 'root';  
$pass = '';  

$dbname = 'hotel';  
  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  


?>
