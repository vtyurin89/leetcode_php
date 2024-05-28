<?php

class Solution {

    function singleNumber($nums) {
    	$result = 0;
        foreach($nums as $num) {
    		$result ^= $num;
        }
        return $result;
	}
}

$sol = new Solution();
assert($sol -> singleNumber([2,2,1]) === 1);
assert($sol -> singleNumber([4,1,2,1,2]) === 4);
assert($sol -> singleNumber([1]) === 1);