
<?php 
/*
 * Object Oriented programming
 */

class Database {
	//Properties
	
	public $host =DB_HOST;
	public $username = DB_USER;
	public $password = DB_PASS;
	public $db_name = DB_NAME;
	
	public $link;   //mysqli object
	public $error;
	
	//Methods
	
	public function __construct() {		
	//Call Connect Function
		$this->connect(); }
		
	//Connector  It is private because we are calling it from within our class
	
	private function connect() {
			$this->link= new mysqli($this->host, $this->username, $this->password, $this->db_name);
			
			if(!$this->link) {
				$this->error = "Connection Failed:  ".$this->link->connect_error;
				return false;
			}
		}	
		
	//Select Method
	
	public function select($query) {
		$result = $this->link->query($query) or die($this->error.__LINE__);
		if($result->num_rows > 0) {
			return $result;
		}else {
			return false;
		}
	}
	
	//Insert Method
	
	public function insert($query){
		$insert_row = $this->link->query($query) or die($this->error.__LINE__);
		
	//Validate Insert
	if($insert_row) {
		header("Location:  index.php?msg=" .urlencode('Record Added'));		
	} else {
		die('Error : ('. $this->link->errno .') '. $this->link->error);
	}
			
	}
}
  ?>



