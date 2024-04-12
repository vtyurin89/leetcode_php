<?php

class Solution {

    function selfDividingNumbers($left, $right) {
        $result = array();
        for($i = $left; $i<=$right; $i++) {
        	$self_devide = true;
        	$num = strval($i);
        	for($j=0; $j<strlen($num);$j++) {
				if ($num[$j] == 0) {
        			$self_devide = false;
        			break;
				}
        		if ($i % $num[$j] != 0) {
        			$self_devide = false;
        			break;
        		}
        	}
        	if ($self_devide) {
        		$result[] = $i;
        	}
        }
        return $result;
    }
}


$sol = new Solution();
assert($sol -> selfDividingNumbers(1, 22) == array(1,2,3,4,5,6,7,8,9,11,12,15,22));
assert($sol -> selfDividingNumbers(47, 85) == array(48,55,66,77));

?>