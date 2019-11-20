<!DOCTYPE html>
<html>
<head>
	<?php include 'htmlHead.php';?>
    <title><?=$companyName->contents?> | Employee Login</title>
    <meta name="description" content="">
</head>
<body>
    <?php include 'nav.php' ?>
    <h1 style="color: #3D3D3D; text-align: center;">Employee Login</h1>
    <br>
    <div align="center" id="sign_in">
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





<br>
    <?php include 'footer.php' ?>
</body>
</html>