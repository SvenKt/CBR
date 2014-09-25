<?php
 
class DB_Connect {
 
	// Connecting to database
    public function connect() {
        require_once 'include/config.php';
        // connecting to mysql
        $con = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
		// set charset to utf8
		mysql_set_charset('utf8');
        // selecting database
        mysql_select_db(DB_DATABASE);
 
        // return database handler
        return $con;
    }
 
    // Closing database connection
    public function close() {
        mysql_close();
    }
 
}
 
?>