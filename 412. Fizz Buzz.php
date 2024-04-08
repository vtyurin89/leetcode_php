<?php 

class Solution {

    /**
     * @param Integer $n
     * @return String[]
     */
    function fizzBuzz($n) {
    	$res = array();
		for($i=1; $i <= $n; $i++) {
			if($i % 15 == 0) {
				array_push($res, "FizzBuzz");
			}
			else if($i % 5 == 0) {
				array_push($res, "Buzz");
			}
			else if($i % 3 == 0) {
				array_push($res, "Fizz");
			}
			else {
				array_push($res, strval($i));
			}
		}
		return $res;
    }
}

$sol = new Solution();
assert($sol -> fizzBuzz(3) == ["1","2","Fizz"]);
assert($sol -> fizzBuzz(5) == ["1","2","Fizz","4","Buzz"]);
assert($sol -> fizzBuzz(15) == ["1","2","Fizz","4","Buzz","Fizz","7","8","Fizz","Buzz","11","Fizz","13","14","FizzBuzz"]);
