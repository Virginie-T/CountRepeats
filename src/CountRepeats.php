<?php 

	class CountRepeats {

		function count_repeats($input_string, $find_input) {

			$lc_string = strtolower($input_string);
			$lc_find = strtolower($find_input);
			$exploded_string = explode(" ", $lc_string);
			$number = array();
				foreach ($exploded_string as $word) {

					if ($lc_find == $word) {
						array_push($number, 1);
					} 
				}
			$output = array_sum($number);
			return $output;




		}

	}

?>