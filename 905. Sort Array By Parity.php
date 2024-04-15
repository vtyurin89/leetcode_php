<?php

class Solution {

    function sortArrayByParity($nums) {
        $even = array();
        $odd = array();
        foreach($nums as $num) {
        	if ($num % 2 == 0) {
        		$even[] = $num;
        	} else {
        		$odd[] = $num;
        	}
        }
        $result = array_merge($even, $odd);
        return $result;
    }
}

$sol = new Solution();
$sol -> sortArrayByParity([3,1,2,4]);