<?php

class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
    	$str_x = strval($x);
        if (str_starts_with($str_x, "-")) {
        	return false;
        }
        $start_index = 0;
        $end_index = strlen($str_x) - 1;
        while ($start_index < $end_index) {
        	if ($str_x[$start_index] != $str_x[$end_index]) {
        		return false;
        	}
        	$start_index += 1;
        	$end_index -= 1;
        }
        return true;
        
    }	
}

$sol = new Solution();
assert($sol -> isPalindrome(-121) === false);
assert($sol -> isPalindrome(121) === true);
assert($sol -> isPalindrome(10) === false);

