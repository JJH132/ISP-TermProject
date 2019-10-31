<?php 
define('DB_SERVER', 'aa148fg0lsw80en.cnb1cjruxnbc.us-east-2.rds.amazonaws.com');
define('DB_USERNAME', 'admin');
define('DB_PASSWORD', 'administrator');
define('DB_NAME', 'untitledpizza');


$link = mysqli_connect($_SERVER['RDS_HOSTNAME'], $_SERVER['RDS_USERNAME'], $_SERVER['RDS_PASSWORD'], $_SERVER['RDS_DB_NAME'], $_SERVER['RDS_PORT']);
// Check connection
if (!$link) {
    echo "connection failed";
}
echo "Connected successfully";
?>