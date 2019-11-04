<?php 
	//include the config file
	require_once "config.php";
	$email = $password = $confirm_password = "";
	$email_err = $password_err = $confirm_password_err ="";

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$email_err = "Please enter your email.";
	}
	else
	{
		$sql = "SELECT user_id FROM users WHERE email = ?";
		if($stmt = $mysqli->prepare($sql))
		{
			$stmt->bind_param("s", $param_email);

			$param_email = trim($_POST["email"]);

			if($stmt->execute())
			{
				$stmt->store_result();

				if($stmt->num_rows == 1)
				{
					$email_err = "Sorry, this email is already in use. Please try another.";
				}
				else
				{
					echo "Oopsy!! Something went very wrong. Please try again at a later time.";
				}
			}
			$stmt->close();
		}
		if(empty(trim($_POST["password"])))
		{
			$password_err = "Please enter your password.";
		}
		elseif (strlen(trim($_POST["password"])) < 6)
		{
			$password_err = "The password must be at least 6 characters long.";
		}
		else
		{
			$password = trim($_POST["password"]);
		}

		if(empty(trim($_POST["password"])))
		{
			$confirm_password_err = "Please confirm your password.";
		}
		else
		{
			$confirm_password = trim($_POST["confirm_password"]);
			if(empty($password_err) && ($password != $confirm_password))
			{
				$confirm_password_err = "The passwords did not match. Please try again.";
			}
		}

		if(empty($email_err) && empty($password_err) && empty($confirm_password_err))
		{
			$sql = "INSERT INTO users (email, password, phone_number, address, full_name, created_at) VALUES (?,?)";

			if($stmt = $mysqli->prepare($sql))
			{
				$stmt->bind_param("ss", $param_email, $param_password);

				$param_email = $email;
				$param_password = password_hash($password,PASSWORD_DEFAULT);

				if($stmt->execute())
				{
					header("location: login.php");
				}
				else
				{
					echo "Something went very wrong. Please try again later!";
				}
			}

			$stmt->close();
		}
		$mysqli->close();
	}
?>


<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>[Untitled] Pizza | Sign up </title>

        <link rel="author" href="humans.txt">
    </head>
    <body>
<div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>    
    </body>
</html>