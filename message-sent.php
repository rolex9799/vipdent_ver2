<?php

require_once('./partials/config.php');

if(isset($_POST)){

  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $subject = $_POST['subject'];

  $sql = "INSERT INTO zinas (name, surname, email, message, subject) VALUE (' $name', '$surname', '$email', '$message', '$subject')";

  if($conn->query($sql) === TRUE){
    $info2 = 'Ziņa nosūtīta!';
  } else{
    $info2 = 'ERROR: ' . $sql . '<br>' . $conn->error;
  }
}
?>
 <?php echo "<script>location.href='./?pg=after-message';</script>"; ?>