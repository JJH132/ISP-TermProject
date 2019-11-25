<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <title>[Untitled] Pizza | Sign up </title>

        <?php include 'htmlHead.php';?>

    </head>
    <body>
    <?php include 'nav.php' ?>
<div class="flex-container2">
<div class="wrapper">
    <div class="signupdiv">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="register.php" method="post">
            <div class="form-group 6">
                <label>Full Name</label>
                <input placeholder="Joe Smith" type="text" name="full_name" class="form-control" >
                <span class="help-block"></span>
            </div>
            <div class="form-group 1">
                <label>Email</label>
                <input placeholder="jsmith@example.com" type="text" name="email" class="form-control">
                <span class="help-block"></span>
            </div>    
            <div class="form-group 2">
                <label>Password</label>
                <input placeholder="Password" type="password" name="password" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group 3">
                <label>Confirm Password</label>
                <input placeholder="Confirm Password" type="password" name="confirm_password" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group 4">
                <label>Phone number</label>
                <input placeholder="5551239876" type="number" name="phone_number" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group 5">
                <label>Address</label>
                <input placeholder="123 Example St." type="text" name="address" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="sign_in.php">Login here.</a></p>
        </form>
        </div>
    </div>    
    <img src="img/pizza_pic.jpg" style="width: 35%;border-radius: 4px;">
</div>
    <?php include 'footer.php' ?>

    </body>
</html>