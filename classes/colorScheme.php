<?php  

// Class for color scheme

class colorScheme
{
    // Properties

    /**
    * @var int The article ID from the database
    */
    public $color_name = null;

    /**
    * @var int When the article was published
    */
    public $color_hex = null;

    public function __construct( $data=array() ) {
        if ( isset( $data['color_name'] ) ) $this->color_name = $data['color_name'];
        if ( isset( $data['color_hex'] ) ) $this->color_hex = $data['color_hex'];
    }

    public static function getByColor_Name( $color_name ) {
         $conn = mysqli_connect($_SERVER['RDS_HOSTNAME'], $_SERVER['RDS_USERNAME'], $_SERVER['RDS_PASSWORD'], $_SERVER['RDS_DB_NAME'], $_SERVER['RDS_PORT']);
         // Check connection
         if (!$conn) {
             echo "connection failed";
         }
         echo "Connected successfully";         
          $sql = "SELECT * FROM colors WHERE color_name = '$color_name'";
        $result = mysqli_query($conn, $sql);
        if(!$result)
        {
            print "Error - the query could not be executed";
            $error = mysqli_error();
            print "<p>" . $error . "</p>";
            exit;
        }
        $obj = $result->fetch_assoc();
        if ( $obj ) return new colorScheme($obj);
    }

    public static function getColorHexByColorName($color_name) {
     $conn = mysqli_connect($_SERVER['RDS_HOSTNAME'], $_SERVER['RDS_USERNAME'], $_SERVER['RDS_PASSWORD'], $_SERVER['RDS_DB_NAME'], $_SERVER['RDS_PORT']);
     // Check connection
     if (!$conn) {
         echo "connection failed";
     }
     echo "Connected successfully";
        $sql = "SELECT color_hex FROM colors WHERE color_name = '$color_name'";
        $result = mysqli_query($conn, $sql);
        if(!$result)
        {
            print "Error - the query could not be executed";
            $error = mysqli_error();
            print "<p>" . $error . "</p>";
            exit;
        }
        $color_hex = $result->fetch_assoc();
        return($color_hex["color_hex"]);
    }
    
    public function update() {
        if (is_null($this->color_name)) trigger_error("colorScheme::update(): Attempt to update a colorScheme object that does not have its color_name set.");

        // Update color scheme 
         $conn = mysqli_connect($_SERVER['RDS_HOSTNAME'], $_SERVER['RDS_USERNAME'], $_SERVER['RDS_PASSWORD'], $_SERVER['RDS_DB_NAME'], $_SERVER['RDS_PORT']);
         // Check connection
         if (!$conn) {
             echo "connection failed";
         }
         else 
          echo "Connected successfully";

        $sql = "UPDATE colors SET color_hex='$this->color_hex' WHERE color_name = '$this->color_name'";
        $result = mysqli_query($conn, $sql);
        if(!$result)
        {
            print "Error - the query could not be executed";
            $error = mysqli_error();
            print "<p>" . $error . "</p>";
            exit;
        }
    }
}

?>