<?php 

    $conn = mysqli_connect($_SERVER['RDS_HOSTNAME'], $_SERVER['RDS_USERNAME'], $_SERVER['RDS_PASSWORD'], $_SERVER['RDS_DB_NAME'], $_SERVER['RDS_PORT']);

	if(isset($_POST['sign_in_button']))
	{
		$email = mysqli_real_escape_string($conn, $_POST['txt_email']);
		$password = mysqli_real_escape_string($conn, $_POST['txt_pass']);

		if($email != "" && $password != "")
		{
			$sql = "SELECT count(*) AS usrcnt FROM ebdb.users WHERE email='".$email."' AND password='".$password."'";
			$rs = mysqli_query($conn, $sql);
			$r = mysqli_fetch_array($rs);

			$count = $row['usrcnt'];

			if($count > 0)
			{
				$_SESSION['email'] = $email;
				header('Location: welcome.php');
			}
			else
			{
				echo "Invalid email and password";
			}
		}

	}


 ?>
