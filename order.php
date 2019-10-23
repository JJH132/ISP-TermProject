<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>[Untitled] Order Page</title>
        <link rel="stylesheet" href="css/default_style.css">
        <link rel="author" href="humans.txt">
    </head>
    <body>
        <?php include 'nav.php';?>
        <form>
        <table>
            <tr>
                Meats:
            </tr><tr>
                <td>Pepperoni </td><td>
                    <input type="radio" name="pepperoni" value="none"> None 
                </td><td>
                    <input type="radio" name="pepperoni" value="full"> Full 
                </td><td>
                    <input type="radio" name="pepperoni" value="left-half">Left only 
                </td><td>
                    <input type="radio" name="pepperoni" value="right-half">Right only 
                </td>
            </tr><tr>
                <td>Ham </td><td>
                    <input type="radio" name="ham" value="none"> None 
                </td><td>
                    <input type="radio" name="ham" value="full"> Full 
                </td><td>
                    <input type="radio" name="ham" value="left-half">Left only 
                </td><td>
                    <input type="radio" name="ham" value="right-half">Right only 
                </td>
            </tr><tr>



        </table>

        <?php include 'footer.php' ?>
        
        <script src="js/main.js"></script>
    </body>
</html>