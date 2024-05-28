<?php 

class Solution {

    function singleNumber($nums) {
        return array_search(1, array_count_values($nums));
    }
}

$sol = new Solution();
assert($sol -> singleNumber([2,2,3,2]) === 3);
assert($sol -> singleNumber([0,1,0,1,0,1,99]) === 99);

