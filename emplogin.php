<?php 
	session_start();
    $conn = mysqli_connect($_SERVER['RDS_HOSTNAME'], $_SERVER['RDS_USERNAME'], $_SERVER['RDS_PASSWORD'], $_SERVER['RDS_DB_NAME'], $_SERVER['RDS_PORT']);

	if(isset($_POST['emp_usr']) && isset($_POST['emp_pass']))
	{
		$usr = mysqli_real_escape_string($conn, $_POST['emp_usr']);
		$pass = mysqli_real_escape_string($conn, $_POST['emp_pass']);

		if($usr != "" && $pass != "")
		{
			$sql = "SELECT * FROM ebdb.employees WHERE username='$usr' AND password='$pass'";

			$rs = mysqli_query($conn, $sql) or die(mysqli_error($conn));
			$count = mysqli_num_rows($rs);
			$r = mysqli_fetch_array($rs);


			if($count == 1)
			{
				$_SESSION['employee'] = $usr;
				$employee = $_SESSION['employee'];


				$SELECT = "SELECT privileges FROM employees WHERE username = ? LIMIT 1";
		        $stmnt = $conn->prepare($SELECT);
		        $stmnt->bind_param("i", $usr);
		        $stmnt->execute();
		        //$stmnt->bind_result($currUser);
		        $result = $stmnt->get_result();
		        $r = $result->fetch_array(MYSQLI_ASSOC);
		        $priv = $r['privileges'];
		        $_SESSION['privileges'] = $priv;



				echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";


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
    <title>[Untitled] Pizza | Home</title>
    <meta name="description" content="">
    <?php include 'htmlHead.php';?>
</head>
<body>
    <?php include 'nav.php' ?>
    <?php include 'footer.php' ?>


</body>
</html>