<?php 

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'vipdent_db';

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn -> connect_error){
  die('Connection failed: ' . $conn -> connect_error); 
}

// echo "Connected successfully!"

?>

<h1>Zina nosutiita!</h1>