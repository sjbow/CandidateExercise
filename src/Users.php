<?php

namespace Exads;

/**
 * Class Users
 * @added on the 27/05/2016
 * @author <sbow>
 */
class Users{

	protected $conn;

	/**
	 * Users constructor.
	 */
	public function __construct(){

		$database = new DatabaseConnection();
		$this->conn = $database->getConnection();
	}

	/**
	 * Query the database for all of the users.
	 * @author <sbow>
	 * @added on the 27/05/2016
	 * @return string
	 */
	public function queryDatabase(){

		$query = "SELECT * FROM exads_test";
		$result = $this->conn->query($query);
		$data = "";
		$data .= "<table><thead><th>Name</th><th>Age</th><th>Job</th></thead>";
		while ($row = $result->fetch_assoc()) {

			$data .= "<tr>";
			$data .= "<td>".$row['name']."</td>";
			$data .= "<td>".$row['age']."</td>";
			$data .= "<td>".$row['job_title']."</td>";
			$data .= "</tr>";
		}

		$data .= "</tr></table>";

		return $data;
	}

	/**
	 * Insert a dummy record into the database.
	 * @author <sbow>
	 * @added on the 27/05/2016
	 * @param $name
	 * @param $age
	 * @param $job_title
	 * @return string
	 */
	public function insertIntoDatabase($name, $age, $job_title){

		$name = $this->conn->real_escape_string($name);
		if(!is_int($age)){
			die('The number you have entered is not an integer');
		}
		$job_title = $this->conn->real_escape_string($job_title);

		$sql = "INSERT INTO exads_test (name, age, job_title)VALUES ('$name', $age, '$job_title');";
		$this->conn->query($sql);

		return "Row successfully added";
	}

}

