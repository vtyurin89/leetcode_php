<?php

class Solution {

    /**
     * @param String $columnTitle
     * @return Integer
     */
    function titleToNumber($columnTitle) {
       $result = 0;
       $columnTitle = strrev($columnTitle);
       for($i=0; $i < strlen($columnTitle); $i++) {
    		$result += (ord($columnTitle[$i]) - 64) * 26**$i;
       }
       return $result;
    }
}


$sol = new Solution();
assert($sol -> titleToNumber("ZY") == 701);
assert($sol -> titleToNumber("A") == 1);
assert($sol -> titleToNumber("AB") == 28);