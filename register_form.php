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

    <?php include 'footer.php' ?>
</body>
</html><!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <title>[Untitled] Pizza | Sign up </title>

        <?php include 'htmlHead.php';?>

    </head>
    <body>
    <?php include 'config.php' ?>
    <?php include 'nav.php' ?>

<div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="register.php" method="post">
            <div class="form-group 1">
                <label>Email</label>
                <input type="text" name="email" class="form-control">
                <span class="help-block"></span>
            </div>    
            <div class="form-group 2">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group 3">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group 4">
                <label>Phone number</label>
                <input type="number" name="phone_number" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group 5">
                <label>Address</label>
                <input type="text" name="address" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group 6">
                <label>Full Name</label>
                <input type="text" name="full_name" class="form-control" >
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? Login here.</p>
        </form>
    </div>    
    <?php include 'footer.php' ?>

    </body>
</html>