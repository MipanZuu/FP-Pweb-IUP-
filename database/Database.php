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
    //get row
	public function getRow($query, $params = []){
		try {
			$stmt = $this->db->prepare($query);
			$stmt->execute($params);
			return $stmt->fetch();	
		} catch (PDOException $e) {
			throw new Exception($e->getMessage());	
		}


	}//end getRow

	//get rows
	public function getRows($query, $params = []){
		try {
			$stmt = $this->db->prepare($query);
			$stmt->execute($params);
			return $stmt->fetchAll();	
		} catch (PDOException $e) {
			throw new Exception($e->getMessage());	
		}
	}//end getRows

    //insert row
	public function insertRow($query, $params = []){
		try {
			$stmt = $this->db->prepare($query);
			$stmt->execute($params);
			return TRUE;	
		} catch (PDOException $e) {
			throw new Exception($e->getMessage());	
		}

	}//end insertRow

    //update row
	public function updateRow($query, $params = []){
		$this->insertRow($query, $params);
		return true;
	}//end updateRow

	//delete row
	public function deleteRow($query, $params = []){
		$this->insertRow($query, $params);
		return true;
	}

}// End of Database Function

?>