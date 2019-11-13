
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

