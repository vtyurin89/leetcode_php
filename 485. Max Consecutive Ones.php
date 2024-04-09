<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findMaxConsecutiveOnes($nums) {
        $res = 0;
        $current = 0;
        for ($i=0; $i < count($nums); $i++) {
            if ($nums[$i] == 1) {
                $current += 1;
                $res = max($res, $current);
            } else {
                $current = 0;
            }
        }
        return $res;
    }
    }
    
    $sol = new Solution();
    assert($sol -> findMaxConsecutiveOnes([1,1,0,1,1,1]) === 3);
    assert($sol -> findMaxConsecutiveOnes([1,0,1,1,0,1]) === 2);
    assert($sol -> findMaxConsecutiveOnes([1,0,1,0,0,0]) === 1);

?>