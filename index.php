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
  <meta name="format-detection" content="telephone=no">

  <style>
    <?php include './style/style.css'; ?><?php include './style/navbar.css'; ?><?php include './style/navbar-bottom.css'; ?><?php include './style/forma.css'; ?><?php include './style/contacts.css'; ?><?php include './style/prices.css'; ?><?php include './style/services.css'; ?>
  </style>

  <title>
    <?php echo $title; ?>

  </title>
</head>

<body>

  <?php include('./partials/nav-top.php') ?>
  <?php

  if ($pgname == 'index') {
    include_once('./page/index.php');
  }

  if ($pgname == 'services') {
    include_once('./page/services.php');
  } elseif ($pgname == 'prices') {
    include_once('./page/prices.php');
  } elseif ($pgname == 'booking') {
    include_once('./page/booking.php');
  } elseif ($pgname == 'contacts') {
    include_once('./page/contacts.php');
  } elseif ($pgname == 'after-message') {
    include_once('./page/after-message.php');
  } else {
    file_get_contents('./page/' . $pgname . '.php');
  }
  ?>

  <?php include('./partials/nav-bottom.php') ?>

  <!-- <script src="scripts.js"></script> -->
  <script src="navbar-top.js"></script>
</body>

</html>