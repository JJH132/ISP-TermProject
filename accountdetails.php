<?php
session_start();
	$currUser = $_SESSION['email'];

	$conn = mysqli_connect($_SERVER['RDS_HOSTNAME'], $_SERVER['RDS_USERNAME'], $_SERVER['RDS_PASSWORD'], $_SERVER['RDS_DB_NAME'], $_SERVER['RDS_PORT']);

	$SELECT = "SELECT * FROM users WHERE email = ? LIMIT 1";
		$stmnt = $conn->prepare($SELECT);
        $stmnt->bind_param("s", $currUser);
        $stmnt->execute();
        $result = $stmnt->get_result();
        $r = $result->fetch_array(MYSQLI_ASSOC);
        $userId = $r['user_id'];
        $currUser = $r['email'];
        $password = $r['password'];
        $phone = $r['phone_number'];
        $address = $r['address'];
        $full_name = $r['full_name'];
        $past_orders = $r['past_orders'];
        $datecreated = $r['created_at'];



        $conn->close();
        $stmnt->close();

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

    Name: <br> <?php echo $full_name; ?>
    <br>
    User ID: <br> <?php echo $userId; ?>
    <br>
    Current Password: <br> <?php echo $password; ?>
    <br>
    Phone Number: <br> <?php echo $phone; ?>
    <br>
    Address: <br> <?php echo $address; ?>
    <br>
    Past Orders (by order id): <br> <?php echo $past_orders; ?>
    <br>
    Date Account Created: <br> <?php echo $datecreated; ?>
    <br>





    <?php include 'footer.php' ?>
</body>
</html>