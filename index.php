<?php
  session_start();

  if (!isset($_SESSION['email'])) {
    $_SESSION['msg'] = "You must log in first";

    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
  }
?>

<!DOCTYPE html>
<html>
<head>
    <title>[Untitled] Pizza | Home</title>
    <meta name="description" content="">
    <?php include 'htmlHead.php';?>
</head>
<body>
    <?php include 'config.php' ?>

    <?php include 'nav.php' ?>
    <h1 style="color: #3D3D3D;">Untitled Pizza Home</h1>

    <a href="order.php">ORDER LINK</a>


    <br>
    <span style="font-size: 2.5em; margin: auto;">DEALS! DEALS! DEALS!</span>
    <?php include 'footer.php' ?>
</body>
</html>
