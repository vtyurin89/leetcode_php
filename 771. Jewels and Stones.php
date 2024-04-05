<?php

class Solution {

    /**
     * @param String $jewels
     * @param String $stones
     * @return Integer
     */
    function numJewelsInStones($jewels, $stones) {
        $res = 0;
        for($i=0; $i < strlen($stones); $i++) {
            if (array_key_exists(ord($stones[$i]), count_chars($jewels, 1))) {
                $res += 1;
            }
        }
        return $res;
    }
    }