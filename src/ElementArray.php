<?php

namespace Exads;

class ElementArray{

	protected $number_of_elements;
	protected $sum;

	/**
	 * @param $number
	 */
	public function __construct($number){
		$this->number_of_elements = $number;

		/*
		 * Using the formula n * n+1 / 2 to find the sum of all sequential numbers in the array
		 */
		$this->sum = ($this->number_of_elements * ($this->number_of_elements + 1)) / 2;

		//Had to add minus one from the number as i am working with removing the index from the array
		$this->randomNumber = rand(1, $number - 1);
	}

	/**
	 * Generate an array of integers and then shuffle them so they are randomly placed.
	 * @author <sbow>
	 * @added on the 27/05/2016
	 * @return array
	 */
	private function createArray(){
		$array = range(1, $this->number_of_elements);
		shuffle($array);
		return $array;
	}

	/**
	 * This method creates the array then removes a random element and then displays which number is missing
	 * @author <sbow>
	 * @added on the 27/05/2016
	 */
	public function removeRandomIndexAndDisplayNumber(){

		//Generate a random array of integers.
		$array = $this->createArray();

		//Randomly remove one of the numbers from the array.
		array_splice($array, $this->randomNumber, 1);

		//Sum up the total of the array
		$new_sum = array_sum($array);

		//Subtract it from the total of the original array to find out which number was removed.
		$removed_number = $this->sum - $new_sum;

		//Display the result
		echo "<h3>Result</h3>";

		echo "Removed Number: " . $removed_number;
	}
}