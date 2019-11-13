<?php // CMS config
ini_set( "display_errors", true );
date_default_timezone_set( "America/New_York" );  // http://www.php.net/manual/en/timezones.php
define( "SERVER", "127.0.0.1:3306" );
define('DB_NAME', 'cms');
define( "DB_USERNAME", "dbms-staff" );
define( "DB_PASSWORD", "admin" );
define( "CLASS_PATH", "classes" );
define( "TEMPLATE_PATH", "templates" );
require( CLASS_PATH . "/colorScheme.php" );

function handleException( $exception ) {
  echo "Sorry, a problem occurred. Please try later.";
  error_log( $exception->getMessage() );
}

set_exception_handler( 'handleException' );
?>

<?php 
 // $link = mysqli_connect($_SERVER['RDS_HOSTNAME'], $_SERVER['RDS_USERNAME'], $_SERVER['RDS_PASSWORD'], $_SERVER['RDS_DB_NAME'], $_SERVER['RDS_PORT']);
// // Check connection
// if (!$link) {
//     echo "connection failed";
// }
// echo "Connected successfully";
?>