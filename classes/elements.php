<?php  

/**
 * Class for html elements that change
 */
class elements
{
	/**
    * @var int The article ID from the database
    */
    public $name = null;

    /**
    * @var int When the article was published
    */
    public $contents = null;
	
	public function __construct($data=array())
	{
		if (isset($data['name'])) {
			$this->name = $data['name'];
		}
		if (isset($data['contents'])) {
			$this->contents = $data['contents'];
		}
	}

	public static function getByName($name)
	{
		// print_r('getByName');
		$conn = mysqli_connect($_SERVER['RDS_HOSTNAME'], $_SERVER['RDS_USERNAME'], $_SERVER['RDS_PASSWORD'], $_SERVER['RDS_DB_NAME'], $_SERVER['RDS_PORT']);
         // Check connection
         if (!$conn) {
             echo "connection failed";
         }    
		$sql = "SELECT * FROM ebdb.elements WHERE name = '$name'";
		$result = mysqli_query($conn, $sql);
		if(!$result)
        {
            print "Error - the query could not be executed";
            $error = mysqli_error();
            print "<p>" . $error . "</p>";
            exit;
        }
        $obj = $result->fetch_assoc();
        if ( $obj ) return new elements($obj);
	}

	public function getContentsByName($name)
	{
		// print_r('getContentsByName');
		$conn = mysqli_connect($_SERVER['RDS_HOSTNAME'], $_SERVER['RDS_USERNAME'], $_SERVER['RDS_PASSWORD'], $_SERVER['RDS_DB_NAME'], $_SERVER['RDS_PORT']);
         // Check connection
         if (!$conn) {
             echo "connection failed";
         }    
		$sql = "SELECT ebdb.contents FROM elements WHERE name = '$name'";
		$result = mysqli_query($conn, $sql);
	}

	 public function update() {
        if (is_null($this->name)) trigger_error("elements::update(): Attempt to update a elements object that does not have its name set.");

        // Update color scheme 
        $conn = mysqli_connect($_SERVER['RDS_HOSTNAME'], $_SERVER['RDS_USERNAME'], $_SERVER['RDS_PASSWORD'], $_SERVER['RDS_DB_NAME'], $_SERVER['RDS_PORT']);
         // Check connection
         if (!$conn) {
             echo "connection failed";
         }    
        $sql = "UPDATE ebdb.elements SET contents='$this->contents' WHERE name = '$this->name'";
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