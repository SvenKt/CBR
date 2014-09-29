<?php
 
class DB_Connect {
	public $con;
	// Connecting to database
    public function connect() {
        require_once 'config.php';
        // connecting to mysql
        $this->con = new mysqli(DB_HOST, DB_USER, DB_PASSWORD);
		// set charset to utf8
		$this->con->set_charset('utf8');
        // selecting database
        $this->con->select_db(DB_DATABASE);
 
        // return database handler
        return $this->con;
    }
 
    // Closing database connection
    public function close() {
        mysql_close();
    }
 
}
 
?>