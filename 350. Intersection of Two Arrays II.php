<?php

class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function intersect($nums1, $nums2) {
        $nums1_counter = array();
        $res = array();
        foreach($nums1 as $num) {
            if (!array_key_exists($num, $nums1_counter)) {
                $nums1_counter[$num] = 1;
            } else {
                $nums1_counter[$num] += 1;
            }
        }
        foreach($nums2 as $num) {
            if (array_key_exists($num, $nums1_counter)) {
                array_push($res, $num);
                $nums1_counter[$num] -= 1;
                if ($nums1_counter[$num] == 0) {
                    unset($nums1_counter[$num]);
                }
            }
        }
        return $res;
        
    }
    }
    
    $sol = new Solution();
    assert($sol -> intersect([1,2,2,1],  [2,2]) == [2,2]);
    assert($sol -> intersect([4,9,5], [9,4,9,8,4]) == [9, 4]);