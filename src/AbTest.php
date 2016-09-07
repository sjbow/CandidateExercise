<?php

namespace Exads;

class AbTest{

	protected $conn;

	/**
	 * AbTest constructor.
	 */
	public function __construct(){
		$database = new DatabaseConnection();
		$this->conn =  $database->getConnection();
	}

	/**
	 * Get the design based on the split percent given to the design
	 * @author <sbow>
	 * @added on the 27/05/2016
	 * @return mixed
	 */
	public function getDesigns(){

		//Query the database to get all the different designs
		$sql = "SELECT * FROM ab_test";
		$result = $this->conn->query($sql);

		// Set a base percent and generate a random number between 1 and 100
		$percent = 0;
		$random = rand(1, 100);

		/**
		 * Loop through each of the different designs. Check to see if the $percent is greater
		 *  or equal to the random generated number. If it is show that design. Otherwise, Move to the
		 * next iteration of the loop and add on the the new split percent to the old one. This is
		 * presuming that the total split percent of designs would alway be equal to 100. A different
		 * implementation would be needed if the the split percent could go over 100%
		 */
		while ($row = $result->fetch_assoc()) {
			$percent = $percent + $row['split_percent'];

			if($percent >= $random){
				return $row['design_name'];
			}
		}
	}
}