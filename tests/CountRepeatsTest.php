<?php 

	require_once 'src/CountRepeats.php';

	class CountRepeatsTest extends PHPUnit_Framework_TestCase
	{
		function test_singleLetter() 
		{
			//arrange
			$test_count = new CountRepeats;
			$input_letter = "a";
			$find_input = "a";

			//act
			$result = $test_count->count_repeats($input_letter, $find_input);

			//assert
			$this->assertEquals(1, $result);
		}

		function test_multiLetter() 
		{
			//arrange
			$test_count = new CountRepeats;
			$input_letters = "a b";
			$find_input = "a";

			//act
			$result = $test_count->count_repeats($input_letters, $find_input);

			//assert
			$this->assertEquals(1, $result);
		}

		function test_duplicateLetter() 
		{
			//arrange
			$test_count = new CountRepeats;
			$input_letters = "a a";
			$find_input = "a";

			//act
			$result = $test_count->count_repeats($input_letters, $find_input);

			//assert
			$this->assertEquals(2, $result);
		}

		function test_multiDuplicateLetter() 
		{
			//arrange
			$test_count = new CountRepeats;
			$input_letters = "a b a";
			$find_input = "a";

			//act
			$result = $test_count->count_repeats($input_letters, $find_input);

			//assert
			$this->assertEquals(2, $result);
		}

		function test_singleWord() 
		{
			//arrange
			$test_count = new CountRepeats;
			$input_word = "cat";
			$find_input = "cat";

			//act
			$result = $test_count->count_repeats($input_word, $find_input);

			//assert
			$this->assertEquals(1, $result);
		}

		function test_singleWordNotMatching() 
		{
			//arrange
			$test_count = new CountRepeats;
			$input_word = "cat";
			$find_input = "dog";

			//act
			$result = $test_count->count_repeats($input_word, $find_input);

			//assert
			$this->assertEquals(0, $result);
		}

		function test_string() 
		{
			//arrange
			$test_count = new CountRepeats;
			$input_word = "the last time I saw him, he was at the bar";
			$find_input = "the";

			//act
			$result = $test_count->count_repeats($input_word, $find_input);

			//assert
			$this->assertEquals(2, $result);
		}
		
		function test_lcString() 
		{
			//arrange
			$test_count = new CountRepeats;
			$input_word = "The last time I saw him, he was at the bar";
			$find_input = "tHe";

			//act
			$result = $test_count->count_repeats($input_word, $find_input);

			//assert
			$this->assertEquals(2, $result);
		}
		
	}

?>