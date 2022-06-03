<!-- <?php
 if(isset($_POST['submit']))
$mailto = "vipdent@inbox.lv"; //my email adress
$name = $_POST['name'];
$surname = $_POST['surname'];
$fromEmail = $_POST['email'];


//What I will receive:

$message = "Client Name: " . $name . "\n"
. "Client Surname: " . $surname . "\n"
. "Client message: " . "\n" . $_POST['message'];

//Message for client confirmation

$message2 = "Sveiki/-a " . $name . $surname . "\n"
. "Paldies! Ziņa nosūtīta! Mēs sazināsimies ar Jums tuvākajā laikā!" . "\n\n";

//Email header

$headers = "From: " . $fromEmail; //client email vipdent receives
$headers2 = "From: " . $mailto; //client receives

//PHP mailer function

$result1 = mail($mailto, $message, $headers); // Thus email sent to my address
$result2 = mail($fromEmail, $message2, $headers2); // This confirmation email to client

//checking if mails sent successfully

if ($result1 && $result2){
    $success = "Ziņa nosūtīta veiksmīgi!";    
} else {
    $failed = "Atvainojiet, ziņa nav nosūtīta!";
}
?>  -->


<div class="after-message">
    
<h3>
    Ziņa nosūtīta
</h3>

<img class="checkmark" src="./assets/checkmark.svg"/>
</div>
