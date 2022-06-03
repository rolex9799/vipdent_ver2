

<!-- <?php 

require_once('./partials/config2.php');

$kontakti = isset($_GET['kontakti']) ? trim(strip_tags($_GET['kontakti'])) : 1;

$sql = "SELECT * FROM contacts WHERE id = $kontakti";


$result2 = $conn->query($sql);


?> -->


<div class="banner">

  <h1>Log in</h1>
</div>

<div class="form-panel2">


  <form method="POST" action="" id="login">
  
      <div class="form-group">
        <label for="username">Username: </label>
  
        <input type="text" id="username" name="username">
  
      </div>
     
      <div class="form-group">
        <label for="password">Password: </label>
  
        <input type="password" id="password" name="password">
  
      </div>
      <input class="submit btn" type="submit" value="Log in">
  </form>
</div>