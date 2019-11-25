<!DOCTYPE html>
<html>
<head>
	<?php include 'htmlHead.php';?>
    <title><?=$companyName->contents?> | Employee Login</title>
    <meta name="description" content="">
</head>
<body>
    <?php include 'nav.php' ?>
    <div class="signInHeader">
        <h2><?=$companyName->contents?> Employee Login</h2>
    </div>
    <div id="sign_in" class="signinContainer" style="margin-bottom: 75px;">
        <form action="emplogin.php" id="sign_in" method="post">
            <input  placeholder="Employee Username" type="text" name="emp_usr" id="emp_usr">
            <br>
            <input placeholder="Password"  type="Password" name="emp_pass" id="emp_pass"> <br>
            <button type="submit" id="sign_in_button" name="sign_in_button">Sign In</button>
        </form>
    </div>





<br>
    <?php include 'footer.php' ?>
</body>
</html>