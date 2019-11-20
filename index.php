<!DOCTYPE html>
<html>
<head>
	<?php include 'htmlHead.php';?>
    <title><?=$companyName->contents?> | Home</title>
    <meta name="description" content="">
</head>
<body>

    <?php include 'nav.php' ?>

    <br>
    <div style="color: #654321; font-size: 40px; font-weight: bold;font-family: 'Montserrat Alternates', sans-serif; text-align: center;">
    	Welcome to <?=$companyName->contents?>!
    </div>
    <br>
    <br>
    <div style="color: #654321; font-size: 100px; font-weight: bold;font-family: 'Montserrat Alternates', sans-serif; text-align: center;">
    	This could be your homepage!
    </div>

    <br>
    <br>
    <br>
    <div style="font-size: 2.5em; margin: auto; text-align: center;">DEALS! DEALS! DEALS!</div>
    <?php include 'footer.php' ?>
</body>
</html>
