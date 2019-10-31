<?php 
define('DB_SERVER', 'aa148fg0lsw80en.cnb1cjruxnbc.us-east-2.rds.amazonaws.com');
define('DB_USERNAME', 'admin');
define('DB_PASSWORD', 'administrator');
define('DB_NAME', 'untitledpizza');


$conn = mysqli_connect(DB_USERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if (!$conn) {
    echo "connection failed";
}
echo "Connected successfully";
?>