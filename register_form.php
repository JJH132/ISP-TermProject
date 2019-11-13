
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
        <form action="register.php" method="post">
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