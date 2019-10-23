<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>[Untitled]'s Online Pizza Ordering</title>
        <link rel="icon" href="img/pizza.png" type="image/x-icon">
        <link rel="stylesheet" href="css/default_style.css">
        <link rel="author" href="humans.txt">
    </head>
    <body>
        <?php include 'nav.php';?>
    	<div align="center" id="sign_in">
            <form action="submitscript.php" method="post">
                <table id="Sign_in_table" align="center">
                	<tr>
                		<td align="center"><h3>Existing user? Sign in!</h3></td>
                	</tr>
                	<tr>
                		<td><b>Username:</b> <input type="text"></td>
                	</tr>
                	<tr>
                		<td><b>Password:</b> <input type="Password"></td>
                	</tr>
                </table>
            </form>
        	<button type="submit" id="sign_in_button" align="center">Sign In</button>
        </div>
        <span id="sign_up">
        <table>
            <tr>
                <td>
                     <b>Don't Have an Account?</b><br>
                </td>
            </tr>
            <form action="signup.php">
            <tr>
                <td align="center">
                    </form>
                <a href="signup.php"><button id="sign_up_button" align="center">Sign Up</button></a>
                </td>
            </form>
            </tr>
        </table>
        </span>
        <span id="order_now">
                <a href="order.html"><button id="order_now_button">Order Now</button></a>
        </span>
        <script src="js/main.js"></script>

    </body>
</html>