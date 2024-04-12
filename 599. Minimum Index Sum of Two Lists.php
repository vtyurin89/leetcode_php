<?php

class Solution {

    /**
     * @param String[] $list1
     * @param String[] $list2
     * @return String[]
     */
    function findRestaurant($list1, $list2) {
    	$index_dict = array();
    	$result = array();
    	
        for($i=0; $i<count($list1); $i++) {
        	$index_dict[$list1[$i]] = $i;
        }
        
        for($i=0; $i<count($list2); $i++) {
        	if(array_key_exists($list2[$i], $index_dict)) {
        		if(!array_key_exists($index_dict[$list2[$i]] + $i, $result)) {
        			$result[$index_dict[$list2[$i]] + $i] = [$list2[$i]];
        		} else {
        			$result[$index_dict[$list2[$i]] + $i][] = $list2[$i];
        		}
        	}
        }
        $min_key = min(array_keys($result));
        return $result[$min_key];
       
    }
}

$sol = new Solution();
assert($sol -> findRestaurant(["happy","sad","good"], ["sad","happy","good"]) == array("sad","happy") );