
<?php 
include 'after-message.php';

require_once('./partials/config.php');

$kontakti = isset($_GET['kontakti']) ? trim(strip_tags($_GET['kontakti'])) : 1;

$sql = "SELECT * FROM contacts WHERE id = $kontakti";


$result2 = $conn->query($sql);


?>


<div class="form-panel">
	<h1 class="form">
		Aizsūtitiet mums ziņu!
	</h1>
	<form method="POST" action="message-sent.php">
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
			<label for="message">Ziņa: </label>
			<textarea name="message" id="message" cols="50" rows="10"></textarea>
		</div>
		<button class="submit btn" name="submit" type="submit">Nosūtīt</button>
		<!-- <input class="submit btn" type="submit" value="Nosūtīt"> -->
	</form>
</div>
