<?php 
	session_start();
    $conn = mysqli_connect($_SERVER['RDS_HOSTNAME'], $_SERVER['RDS_USERNAME'], $_SERVER['RDS_PASSWORD'], $_SERVER['RDS_DB_NAME'], $_SERVER['RDS_PORT']);

	if(isset($_POST['emp_usr']) && isset($_POST['emp_pass']))
	{
		$usr = mysqli_real_escape_string($conn, $_POST['emp_usr']);
		$pass = mysqli_real_escape_string($conn, $_POST['emp_pass']);

		if($usr != "" && $pass != "")
		{
			$sql = "SELECT * FROM ebdb.employees WHERE username='$usr' AND password='$pass'";

			$rs = mysqli_query($conn, $sql) or die(mysqli_error($conn));
			$count = mysqli_num_rows($rs);
			$r = mysqli_fetch_array($rs);


			if($count == 1)
			{
				$_SESSION['employee'] = $usr;
				$employee = $_SESSION['employee'];


				$SELECT = "SELECT privileges FROM employees WHERE username = ? LIMIT 1";
		        $stmnt = $conn->prepare($SELECT);
		        $stmnt->bind_param("s", $usr);
		        $stmnt->execute();
		        //$stmnt->bind_result($currUser);
		        $result = $stmnt->get_result();
		        $r = $result->fetch_array(MYSQLI_ASSOC);
		        $priv = $r['privileges'];
		        $_SESSION['privileges'] = $priv;


			}
			else
			{
				echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
			}
		}

	}

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
    <?php include 'footer.php' ?>
    <?php
    $currPrivs = $_SESSION['privileges'];
    if($currPrivs == '1')
    {
    	echo 'Your current privileges are ';
    	echo $currPrivs;
    	echo '<br>';
    	 header("Location: admin_page.php");     

    }
    else if($currPrivs == '0')
    {
    	echo 'Your current privileges are ';
    	echo $currPrivs;
    	echo '<br>';
    	$sql = "SELECT order_id AS 'Order ID', details AS 'Order Details', price AS 'Price', estimated_completion AS 'Estimate Completion', user_id AS 'User ID', order_time AS 'Order Placed At' FROM ebdb.orders";

    	$result = mysqli_query($conn,$sql);

		if(!$result)
		{
		    print "Error - the query could not be executed";
		    $error = mysqli_error();
		    print "<p>" . $error . "</p>";
		    exit;
		}

		$num_rows = mysqli_num_rows($result);
		print "<table><caption> <h2> All Orders ($num_rows) </h2> </caption>";
		print "<tr align = 'center'>";

		$row = mysqli_fetch_array($result);
		$num_fields = mysqli_num_fields($result);

		// Produce the column labels
		$keys = array_keys($row);
		for ($index = 0; $index < $num_fields; $index++) 
		    print "<th>" . $keys[2 * $index + 1] . "</th>";
		print "</tr>";


		for ($row_num = 0; $row_num < $num_rows; $row_num++) 
		{
		    print "<tr align = 'center'>";
		    $values = array_values($row);
		    for ($index = 0; $index < $num_fields; $index++){
		        $value = htmlspecialchars($values[2 * $index + 1]);
		        print "<td>" . $value . "</td> ";
		    }
		    print "</tr>";
		    $row = mysqli_fetch_array($result);
		}
		print "</table>";
    }

    ?>

</body>
</html>