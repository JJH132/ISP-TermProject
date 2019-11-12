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

	public static function getByColor_Name( $color_name ) {
		$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
		$sql = "SELECT * FROM colors WHERE color_name = :color_name";
		$st = $conn->prepare( $sql );
		$st->bindValue( ":color_name", $color_name, PDO::PARAM_STR );
		$st->execute();
		$row = $st->fetch();
		$conn = null;
		if ( $row ) return new colorScheme( $row );
	}

	public static function getList() {
		$conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
		$sql = "SELECT * FROM colors";

		$st = $conn->prepare( $sql );
		$st->execute();
		$list = array();

		while ($row = $st->fetch()) {
			$colorScheme = new colorScheme( $row );
			$list[] = $colorScheme
		}

		$conn = null;
		return ($list);
	}

	public function update() {
		if (is_null($this->color_name)) trigger_error("colorScheme::update(): Attempt to update a colorScheme object that does not have its color_name set.");

		// Update color scheme 
		$conn  = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD);
		$sql = "UPDATE colors SET color_hex=:color_hex WHERE color_name = :color_name";
		$st = $conn->prepare( $sql );
		$st->bindValue( ":color_hex", $this->color_hex, PDO::PARAM_STR );
		$st->bindValue(":color_name", $this->color_name, PDO::PARAM_STR)
		$st->execute();
		$conn = null;
	}
}

?>