<?php 
  //include the config file



$link = mysqli_connect($_SERVER['RDS_HOSTNAME'], $_SERVER['RDS_USERNAME'], $_SERVER['RDS_PASSWORD'], $_SERVER['RDS_DB_NAME'], $_SERVER['RDS_PORT']);
// Check connection
if (!$link) {
    echo "connection failed";
}
echo "Connected successfully";




  $email = $password = $confirm_password = $phone_number = $address = $full_name = "";
  $email_err = $password_err = $confirm_password_err = $phone_number_err = $address_err = $full_name_err = "";

  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    if(empty(trim($_POST["email"])))
    {
      $email_err = "Please enter your email.";
    }

    else
    {
      $sql = "SELECT user_id FROM users WHERE email = ?";
      if($stmt = mysqli_prepare($link,$sql))
      {
        mysqli_stmt_bind_param($stmt, "s", $param_email);
        $param_email = trim($_POST["email"]);
        if(mysqli_stmt_execute($stmt)
        {
          mysqli_stmt_store_result($stmt);
          if(mysqli_stmt_num_rows($stmt) == 1)
          {
            $email_err = "Sorry, this email is already in use. Please try another.";
          }
          else
          {
            $email = trim($_POST["email"]);   
          }
        }
        else
        {
          echo "Oopsy! Something went very wrong. Please try again later.";
        }
      
      } 
      
              mysqli_stmt_close($stmt);
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
      if(empty(trim($_POST["confirm_password"])))
      {
        $confirm_password_err = "Please confirm your password.";
      }
      else
      {
        $confirm_password = trim($_POST["confirm_password"]);
        if($password != $confirm_password
        {
          $confirm_password_err = "The passwords did not match. Please try again.";
        }
      }
      if(empty($email_err) && empty($password_err) && empty($confirm_password_err) && empty($phone_number_err) && empty($address_err) && empty($full_name_err))
      {
        $sql = "INSERT INTO users (email, password, phone_number, address, full_name) VALUES (?,?,?,?,?)";
        if($stmt = mysqli_prepare($link, $sql))
        {
          mysqli_stmt_bind_param($stmt,"ss", $param_email, $param_password, $param_phone_number, $param_address, $param_full_name);
          $param_email = $email;
          $param_phone_number = $phone_number;
          $param_address = $address;
          $param_full_name = $full_name;
          $param_password = password_hash($password,PASSWORD_DEFAULT);
          if(mysqli_stmt_execute($stmt))
          {
            header("location: index.php");
          }
          else
          {
            echo "Something went very wrong. Please try again later!";
          }
        }
        mysqli_stmt_close($stmt);
      }
      mysqli_stmt_close($link);
    }
?>

<!DOCTYPE HTML>
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
                <span class="help-block"><?php echo $email_err; ?></span>
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
            <div class="form-group <?php echo (!empty($phone_number_err)) ? 'has-error' : ''; ?>">
                <label>Phone number</label>
                <input type="number" name="phone_number" class="form-control" value="<?php echo $phone_number ?>">
                <span class="help-block"><?php echo $phone_number_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($address_err)) ? 'has-error' : ''; ?>">
                <label>Address</label>
                <input type="text" name="address" class="form-control" value="<?php echo $address; ?>">
                <span class="help-block"><?php echo $address_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($full_name_err)) ? 'has-error' : ''; ?>">
                <label>Full Name</label>
                <input type="text" name="full_name" class="form-control" value="<?php echo $full_name; ?>">
                <span class="help-block"><?php echo $full_name_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="formlogin.php">Login here</a>.</p>
        </form>
    </div>    
    </body>
</html>