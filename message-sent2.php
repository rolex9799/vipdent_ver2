<?php

require_once('./partials/config.php');

$message_sent = true;

if(isset($_POST ['email']) && $_POST['email'] != ''){

  if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
  //submit the form 
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = "rolandsrepetto@gmail.com";
  $body = "";

  $body = "From: " .$name.$surname. "\r\n";
  $body = "From: " .$email. "\r\n";
  $body = "From: " .$message. "\r\n";

  mail($to, $message, $body);

  $message_sent = true;

  }
  
}

?>