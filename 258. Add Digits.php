<?php

class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    function addDigits($num) {
        while($num > 9) {
            $sum = 0;
            foreach (str_split(strval($num)) as $num_char) {
                $sum += $num_char;
            }
            $num = $sum;
        }
        return $num;
    }
    }
    
    $sol = new Solution();
    assert($sol -> addDigits(0) == 0);
    assert($sol -> addDigits(0) == 0);
    