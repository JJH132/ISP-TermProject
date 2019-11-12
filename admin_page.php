<?php  

require 'config.php';
session_start();
$action = isset( $_GET['action'] ) ? $_GET['action'] : "";

?>

<!DOCTYPE html>
<html>
<head>
    <title>[Untitled] Pizza | Home</title>
    <meta name="description" content="">
    <?php include 'htmlHead.php';?>
</head>
<body>
    <?php include 'nav.php' ?>

    <div>
    	<form>
    		<input type="text" name="backgroundColor" placeholder="#000000">
    		<input type="submit" name="save" value="Save Changes">
    	</form>
    </div>

    <?php include 'footer.php' ?>
</body>
</html>