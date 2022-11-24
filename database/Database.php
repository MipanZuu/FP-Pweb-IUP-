<?php
include_once('Connection.php');

class Database extends Connection{
    // Where The Function Backends Begin!!
    public function __construct(){

		parent::__construct();

		if(session_status() == PHP_SESSION_NONE)
		{
			session_start();//start session if session not start
		}
	}

    
}// End of Database Function

?>