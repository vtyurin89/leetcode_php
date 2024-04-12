<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function validPalindrome($s) {
    	$len_s = strlen($s);
		if ($len_s === 1) {
			return true;
		}
		
        $start_pointer = 0;
        $end_pointer = $len_s - 1;
        
        while ($start_pointer < $end_pointer) {
        	if ($s[$start_pointer] != $s[$end_pointer]){
        		$left_cut = substr($s, $start_pointer + 1, $end_pointer - $start_pointer);
        		$right_cut = substr($s, $start_pointer, $end_pointer - $start_pointer);
        		return ($left_cut == strrev($left_cut) || $right_cut == strrev($right_cut));
        	}
        	$start_pointer++;
        	$end_pointer--;
        }
        return true;
    }
}


$sol = new Solution();
$sol ->validPalindrome("abab");
assert($sol -> validPalindrome('121') == true);
assert($sol -> validPalindrome("aba") == true);
assert($sol -> validPalindrome("abca") == true);
assert($sol -> validPalindrome("abc") == false);
assert($sol -> validPalindrome("aguokepatgbnvfqmgmlcupuufxoohdfpgjdmysgvhmvffcnqxjjxqncffvmhvgsymdjgpfdhooxfuupuculmgmqfvnbgtapekouga") == true);