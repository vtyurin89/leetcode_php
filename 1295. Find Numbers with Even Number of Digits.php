<?php

class Solution {

    function findNumbers($nums) {
        $result = 0;
        foreach ($nums as $num) {
        	if (strlen($num) % 2 === 0) {
        		$result++;
        	}
        }
        return $result;
    }
}

$sol = new Solution();
assert($sol -> findNumbers([12,345,2,6,7896]) === 2);
assert($sol -> findNumbers([555,901,482,1771]) === 1);

