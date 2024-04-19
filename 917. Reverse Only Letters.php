<?php

class Solution {

    function reverseOnlyLetters($s) {
    	$start = 0;
    	$end = strlen($s) - 1;
    	while ($start < $end) {
			if (ctype_alpha($s[$start]) && ctype_alpha($s[$end])) {
	    		$middleman = "";
				$middleman = $s[$start];
				$s[$start] = $s[$end];
				$s[$end] = $middleman;
				$start++;
				$end--;
			} else {
				if (!ctype_alpha($s[$start])) {
					$start++;
				} else if (!ctype_alpha($s[$end])) {
					$end--;
				}
			}
    	}
    	return $s;
    }
}


$sol = new Solution();
assert($sol -> reverseOnlyLetters("ab-cd") == "dc-ba");
assert($sol -> reverseOnlyLetters("a-bC-dEf-ghIj") == "j-Ih-gfE-dCba");