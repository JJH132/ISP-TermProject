<!DOCTYPE html>
<html>
<head>
	<?php include 'htmlHead.php';?>
    <title><?=$companyName->contents?> | Home</title>
    <meta name="description" content="">
</head>
<body>

    <?php include 'nav.php' ?>
    <div class="mainContainer">
    <div class="homeH">
    	<h2>Welcome to <?=$companyName->contents?>!</h2>
    	<h1>Place your homepage here!</h1> 
    </div>
</div>

    <div style="font-size: 2.5em; margin: auto; text-align: center;">
    <!-- DEALS! DEALS! DEALS! -->
    <img style="width: 100%" src="img/deals.png">
    </div>
    <?php include 'footer.php' ?>
</body>
</html>
