<?php 
	session_start();


	if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true)
	{
		header("location: welcome.php");
		exit;
	}

	require_once "config.php";

	$email = $password = "";
	$email_err = $password_err = "";

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if(empty(trim($_POST["email"])))
		{
			$email_err = "Please enter a valid email. ";
		}
		else
		{
			$email = trim($_POST["email"]);
		}

		if(empty(trim($_POST["password"])))
		{
       		 $password_err = "Please enter your password.";
    	}
     	else
   		{
     	  	 $password = trim($_POST["password"]);
   	    }


   	    if(empty($email_err) && empty($password_err)) 
   	    {
   	    	$sql = "SELECT user_id, email, password, phone_number, address, full_name, created_at WHERE email = ?";
   	    	if($stmt = mysqli_prepare($conn, $sql))
   	    	{
   	    		mysqli_stmt_bind_param($stmt, "s", $param_email);
   	    		$param_email = $email;
   	    		if(mysqli_stmt_execute($stmt))
   	    		{
   	    			mysqli_stmt_store_result($stmt);

   	    			if(mysqli_stmt_num_rows($stmt) == 1)
   	    			{
   	    				mysqli_stmt_bind_result($stmt, $user_id, $email, $hashed_password);
   	    				if(mysqli_stmt_fetch($stmt))
   	    				{
   	    					if(password_verify($password, $hashed_password))
   	    					{
   	    						session_start();
   	    						$_SESSION["loggedin"] = true;
   	    						$_SESSION["user_id"] = $user_id;
   	    						$_SESSION["email"] = $email;
   	    					}
   	    					else
   	    					{
   	    						$password_err = "The password you entered was not valid.";
   	    					}
   	    				}

   	    			}
   	    			else
   	    			{
   	    				$email_err = "No account found with email.";
   	    			}

   	    		}
   	    		else
   	    		{
   	    			echo "Oppsy! Something went very wrong. Please try again later.";
   	    		}
   	    	}
   	    	mysqli_stmt_close($stmt);
   	    }
   	    mysqli_close($conn);
	}

 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                <span class="help-block"><?php echo $email_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>
    </div>    
</body>
</html>

