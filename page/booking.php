
<!-- <?php 

require_once('../partials/config.php');

$kontakti = isset($_GET['kontakti']) ? trim(strip_tags($_GET['kontakti'])) : 1;

$sql = "SELECT * FROM contacts WHERE id = $kontakti";


$result2 = $conn->query($sql);


?> -->


<?php
	$message_sent = false;

//submit the form
if(isset($_POST['email']) && $_POST['email'] != ''){

	if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
		$userName = $_POST['name'];
		$userSurname = $_POST['surname'];
		$messageSubject = $_POST['subject'];
		$userEmail = $_POST['email'];
		$message = $_POST['message'];
		
		$mailto = "rolandsrepetto@gmail.com";
		$body = "";
		
		$body .= "From: " . $userName . $userSurname . "\r\n";
		
		$body .= "Email: ".$userEmail. "\r\n";
		$body .= "Message: ".$message. "\r\n";
		
		mail($mailto, $messageSubject, $body);
	
		$message_sent = true;
	}

}


if ($message_sent){
	$success = "Ziņa nosūtīta veiksmīgi!";
	  
} else {
	$failed = "Atvainojiet, ziņa nav nosūtīta!";
}

?>



<div class="form-panel">
	<h1 class="form">
		Aizsūtitiet mums ziņu!
	</h1>
	<form method="POST" action="">
		<div class="form-group">
			<label for="name">Vārds: </label>
			<input type="text" id="name" name="name">
		</div>
		<div class="form-group">
			<label for="surname">Uzvārds: </label>
			<input type="text" id="surname" name="surname">
		</div>
		<div class="form-group">
			<label for="email">E-pasts:</label>
			<input type="text" id="email" name="email">
		</div>
		<div class="form-group">
			<label for="subject">Tēma:</label>
			<input type="text" id="subject" name="subject">
		</div>
		<div class="form-group">
			<label for="message">Ziņa: </label>
			<textarea name="message" id="message" cols="50" rows="10"></textarea>
		</div>
		<button class="submit btn" name="submit" type="submit">Nosūtīt</button>
		<!-- <input class="submit btn" type="submit" value="Nosūtīt"> -->
	</form>
</div>
