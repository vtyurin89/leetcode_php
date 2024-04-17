<?php

class Solution {

    function twoSum($nums, $target) {
        $nums_dict = array();
        $result = array();
        foreach($nums as $index => $num) {
        	if (array_key_exists($target - $num, $nums_dict)) {
        		$result[] = $index;
        		$result[] = $nums_dict[$target - $num];
        		return $result;
        	}
        	$nums_dict[$num] = $index;
        }
        print_r($nums_dict);
    }
}

$sol = new Solution();
$sol -> twoSum([7,2,11,15], 9);

?>

