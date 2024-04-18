<?php

class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        $res = "";
        for ($i=0; $i < strlen($strs[0]); $i++) {
        	foreach ($strs as $one_str) {
        		if ($i === strlen($one_str) || $one_str[$i] != $strs[0][$i]) {
        			return $res;
        		}
        	}
        	$res .= $strs[0][$i];
        }
        return $res;
    }
}

$sol = new Solution();
assert($sol -> longestCommonPrefix(["flower","flow","flight"]) == "fl");

?>