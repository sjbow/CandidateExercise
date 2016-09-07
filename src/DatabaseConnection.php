<?php

namespace Exads;

use mysqli;

class DatabaseConnection{

	protected $conn;
	private $host = "localhost";
	private $username = "root";
	private $password = "ExadsPassword";
	private $database = "Exads";

	public function __construct(){
		//Create connection
		$this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
	}

	/**
	 * Tests the connection is working
	 * @author <sbow>
	 * @added on the 27/05/2016
	 * @return string
	 */
	public function connectionTest(){
		if (mysqli_connect_error()) {
			die("Connection failed: " . $this->conn->connect_error);
		}
		return true;
	}

	/**
	 * Returns the connection information
	 * @author <sbow>
	 * @added on the 27/05/2016
	 * @return mysqli|null
	 */
	public function getConnection(){

		if(!$this->connectionTest()){
			return null;
		}

		return $this->conn;
	}

}