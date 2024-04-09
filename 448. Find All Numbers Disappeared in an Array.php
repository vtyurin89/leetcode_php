<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function findDisappearedNumbers($nums) {
        $nums_dict = array();
        
        $res = array();
        for($i=0; $i<count($nums); $i++) {
        	if(!array_key_exists($nums[$i], $nums_dict)) {
        		$nums_dict[$nums[$i]] = true;
        	}
        }
        for($j=1; $j<=count($nums); $j++) {
        	if (!array_key_exists($j, $nums_dict)) {
        		array_push($res, $j);
        	}
        }
        return $res;
        
    }
}

$sol = new Solution();
assert($sol -> findDisappearedNumbers([1,1]) == [2]);
assert($sol -> findDisappearedNumbers([4,3,2,7,8,2,3,1]) == [5,6]);


