<?php 

	require_once "src/CountRepeats.php";

	class CountRepeatsTest extends PHPUnit_Framework_TestCase
	{
		function single_letter() 
		{
			//arrange
			$test_count = new CountRepeats;
			$input_letter = "a";
			$find_input = "a";

			//act
			$result = $test_count->countRepeats($input_letter, $find_input);

			//assert
			$this->assertEquals(1, $result);
		}






	}

?>