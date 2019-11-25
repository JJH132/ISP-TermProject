<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'htmlHead.php';?>
        <title><?=$companyName->contents?> | Login</title>
        <meta name="description" content="">
    </head>
    <body>
        <?php include 'nav.php';?>

    <div class="signInHeader">
        <h2>Sign in to <?=$companyName->contents?></h2>
    </div>
    <div class="signinContainer">
        <form action="loginuser.php" id="sign_in">
            <input  placeholder="Email" type="text" name="txt_email" id="txt_email">
            <br>
            <input placeholder="Password"  type="Password" name="txt_pass" id="txt_pass"> <br>
            <button type="submit" id="sign_in_button" name="sign_in_button">Sign In</button>
        </form>
    </div>
    <div class="sininCreateAccout">
        <span id="sign_up">New to <?=$companyName->contents?>?
                <a href="register_form.php">Create an account.</a>
        </span>
    </div>
        <script src="js/main.js"></script>
        <?php include 'footer.php' ?>
    </body>
</html>