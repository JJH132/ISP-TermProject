<?php 
	session_start();
    $conn = mysqli_connect($_SERVER['RDS_HOSTNAME'], $_SERVER['RDS_USERNAME'], $_SERVER['RDS_PASSWORD'], $_SERVER['RDS_DB_NAME'], $_SERVER['RDS_PORT']);

	if(isset($_POST['txt_email']) && isset($_POST['txt_pass']))
	{
		$email = mysqli_real_escape_string($conn, $_POST['txt_email']);
		$password = mysqli_real_escape_string($conn, $_POST['txt_pass']);

		if($email != "" && $password != "")
		{
			$sql = "SELECT * FROM ebdb.users WHERE email='$email' AND password='$password'";

			$rs = mysqli_query($conn, $sql) or die(mysqli_error($conn));
			$count = mysqli_num_rows($rs);
			$r = mysqli_fetch_array($rs);

			

			if($count == 1)
			{
				$_SESSION['email'] = $email;
				 header("Location: order.php");
			}
			else
			{
				echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
			}
		}

	}

 ?>
 <!DOCTYPE html>
<html>
<head>
    <title>[Untitled] Pizza | Sign In</title>
    <meta name="description" content="">
    <?php include 'htmlHead.php';?>
</head>
<body>
    <?php include 'nav.php' ?>
    <?php include 'footer.php' ?>
</body>
</html>
