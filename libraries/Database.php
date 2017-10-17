
<?php 
/*
 * Object Oriented programming
 */
//Object Oriented Programming technique. Creat class with properties and methods.
// Properties can be public or private

class Database {
	//Properties
	
	public $host =DB_HOST;
	public $username = DB_USER;
	public $password = DB_PASS;
	public $db_name = DB_NAME;
	
	//Lnk represents the mysqli object
	
	public $link;   //mysqli object
	public $error;
	
	//Methods
	// A constructor is a special method that auto executes when a new object is created from a class.
	// Does not have to be called. Initializes the properties of the object.
	
	public function __construct() {		
	//Call Connect Function
		$this->connect(); }
	//When in a function and want to call another function use keyword -this.
	//Within a class, $this stores a reference to the current object so you can access its props and methods.
		
	//Connector  It is private because we are calling it from within our class
	
	private function connect() {
			$this->link= new mysqli($this->host, $this->username, $this->password, $this->db_name);
	//Make sure we are connected		
			if(!$this->link) {                                                   //gives the mysql error.
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
		$insert_row = $this->link->query($query) or die($this->link->error.__LINE__);
		
	//Validate Insert
	if($insert_row) {
		header("Location:  index.php?msg=" .urlencode('Record Added'));
		exit();		
	} else {
		die('Error : ('. $this->link->errno .') '. $this->link->error);
	}
			
	}
	
	//Update Method
	
	public function update($query){
		$update_row = $this->link->query($query) or die($this->link->error.__LINE__);
		
	//Validate Insert
	if($update_row) {
		header("Location:  index.php?msg=" .urlencode('Record Updated'));
		exit();		
	} else {
		die('Error : ('. $this->link->errno .') '. $this->link->error);
	}
			
	}
	//Delete
	
	public function delete($query){
		$delete_row = $this->link->query($query) or die($this->error.__LINE__);
		
	//Validate Insert
	if($delete_row) {
		header("Location:  index.php?msg=" .urlencode('Record Deleted'));
		exit();		
	} else {
		die('Error : ('. $this->link->errno .') '. $this->link->error);
	}
			
	}
	
}

  ?>



