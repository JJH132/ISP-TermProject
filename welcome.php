<?php 
	$conn = mysqli_connect($_SERVER['RDS_HOSTNAME'], $_SERVER['RDS_USERNAME'], $_SERVER['RDS_PASSWORD'], $_SERVER['RDS_DB_NAME'], $_SERVER['RDS_PORT']);

	if(!isset($_SESSION['email']))
	{
		header('Location: index.php');
	}

	if(isset($_POST['log_out_button']))
	{
		session_destroy();
		header('Location: index.php');
	}

 ?>

<!DOCTYPE html>
<html>
<head>
    <title>[Untitled] Pizza | Welcome</title>
    <meta name="description" content="">
    <?php include 'htmlHead.php';?>
</head>
<body>
    <?php include 'config.php' ?>

    <?php include 'nav.php' ?>
<form method='post' action="">
    <input type="submit" value="Logout" name="log_out_button">
</form>
    <?php include 'footer.php' ?>
</body>
</html>