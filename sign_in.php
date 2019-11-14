<!DOCTYPE html>
<html lang="en">
    <head>
        <title>[Untitled] Pizza | Login</title>
        <meta name="description" content="">
        <?php include 'htmlHead.php';?>
    </head>
    <body>
        <?php include 'nav.php';?>
    	<div align="center" id="sign_in">
            <form action="" method="post">
                <table id="Sign_in_table" align="center">
                	<tr>
                		<td align="center"><h3>Existing user? Sign in!</h3></td>
                	</tr>
                	<tr>
                		<td><b>Email:</b> <input type="text" name="txt_email"></td>
                	</tr>
                	<tr>
                		<td><b>Password:</b> <input type="Password" name="txt_pass"></td>
                	</tr>
                </table>
            </form>
        	<button type="submit" id="sign_in_button" name="sign_in_button" align="center">Sign In</button>
        </div>
        <span id="sign_up">

                     <a href="register_form.php"><b>Don't Have an Account?</b></a>
                        <br>

        </span>
        <span id="order_now">
                <a href="order.php"><button id="order_now_button">Order Now</button></a>
        </span>
        <script src="js/main.js"></script>
        <?php include 'footer.php' ?>
    </body>
</html>