<!-- <?php 

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'login_db';

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn -> connect_error){
  die('Connection failed: ' . $conn -> connect_error); 
}

// echo "Connected successfully!"

?> -->

<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'login_db');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>