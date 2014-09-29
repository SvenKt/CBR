<?php
 
class DB_Connect {
 
	// Connecting to database
    public function connect() {
        require_once 'include/config.php';
        // connecting to mysql
        $con = mysqli(DB_HOST, DB_USER, DB_PASSWORD);
		// set charset to utf8
		mysqli_set_charset('utf8');
        // selecting database
        mysqli_select_db (DB_DATABASE);
 
        // return database handler
        return $con;
    }
 
    // Closing database connection
    public function close() {
        mysql_close();
    }
 
}
 
?>