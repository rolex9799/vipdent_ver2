<?php 

include_once('./partials/page.php');

$pgname = isset($_GET['pg']) ? trim(strip_tags($_GET['pg'])) : 'index';

$title = $pgdata[$pgname]['title'];
$desc = $pgdata[$pgname]['description'];
$key = $pgdata[$pgname]['keywords'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="description" content="<?php echo $desc; ?>">
  <meta name="keywords" content="<?php echo $key; ?>">

  <title><?php echo $title; ?></title>

  <style>
    <?php include 'style.css'; ?>
  </style>
</head>
<body>

<?php include('./partials/nav-top.php')?>
<?php
  if ($pgname == 'blog') {
    echo include_once('');
 
  }elseif($pgname == 'contact'){
    echo include_once('');

  }elseif($pgname == 'login'){
    echo include_once('');
  }
  else {
    echo file_get_contents('./page/' . $pgname . '.html');
  }
  ?>
  <?php include('./partials/nav-bottom.php')?>
<script src="scripts.js"></script>
</body>
</html>