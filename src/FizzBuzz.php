<?php

namespace Exads;

/**
 * Class FizzBuzz
 * @added on the 27/05/2016
 * @author Steven Bow
 */
class FizzBuzz{

	/**
	 * Display fizz for numbers divisible by 3, Display Buzz for numbers divisible by 5
	 * and when numbers are divisible by 2 and 5 display FizzBuzz, otherwise display the interger
	 * @author <sbow>
	 * @added on the 27/05/2016
	 * @param $max
	 * @return string
	 * @static
	 */
	public static function displayFizzBuzz($max){

		$data = "";
		for($i=1; $i<=$max; $i++){
			if($i % 3 == 0 && $i % 5 == 0){
				$data .= "<div>FizzBuzz</div>";
			} elseif ($i % 3 == 0){
				$data .= "<div>Fizz</div>";
			} elseif ($i % 5 == 0){
				$data .= "<div>Buzz</div>";
			} else{
				$data .= "<div>$i</div>";
			}
		}

		return $data;
	}
}