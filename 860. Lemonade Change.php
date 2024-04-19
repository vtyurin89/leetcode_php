<?php

class Solution {

    function lemonadeChange($bills) {
        $money = array( 5 => 0,
        					10 =>0,
        					20 => 0
        					);
    	foreach ($bills as $bill) {
    		if ($bill == 5) {
    			$money[5] +=1;
    		}
    		else {
    			$newBill = $bill;
    			while ($bill - 10 >= 5 && $money[10] > 0) {
    				$bill -= 10;
    				$money[10] -=1;
    			}
    			while ($bill - 5 >= 5 && $money[5] > 0) {
    				$bill -= 5;
    				$money[5] -=1;
    			}
    			if ($bill > 5) {
    				return false;
    			}
    			$money[$newBill] += 1;
    		}	
    	}
    	return true;
    }
}

$sol = new Solution();
assert($sol -> lemonadeChange([5,5,5,10,20]) == true );
assert($sol -> lemonadeChange([5,5,10,10,20]) == false );

?>