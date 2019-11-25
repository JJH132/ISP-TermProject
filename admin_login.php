<!DOCTYPE html>
<html>
<head>
	<?php include 'htmlHead.php';?>
    <title><?=$companyName->contents?> | Employee Login</title>
    <meta name="description" content="">
</head>
<body>
    <?php include 'nav.php' ?>
<!--     <div align="center" id="sign_in">
            <form action="emplogin.php" method="post">
                <table id="emp_sign_in" align="center">
                	<tr>
                		<td align="center"><h3>Existing user? Sign in!</h3></td>
                	</tr>
                	<tr>
                		<td><b>Employee Username:</b> <input type="text" name="emp_usr" id="emp_usr"></td>
                	</tr>
                	<tr>
                		<td><b>Password:</b> <input type="Password" name="emp_pass" id="emp_pass"></td>
                	</tr>
                </table>
                <button type="submit" id="sign_in_button" name="sign_in_button">Sign In</button>
            </form>
    </div>
 -->
    <div class="signInHeader">
        <h2><?=$companyName->contents?> Employee Login</h2>
    </div>
    <div class="signinContainer" style="margin-bottom: 75px;">
        <form action="emplogin.php" id="sign_in">
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