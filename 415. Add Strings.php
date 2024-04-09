<?php

class Solution {

    function minAndMax($num1, $num2) {
        $res = array(
                'minNum' => '',
                'maxNum' => '',
            );
            
        if (strlen($num1) <= strlen($num2)) {
            $res['minNum'] = $num1;
            $res['maxNum'] = $num2;
        } else {
            $res['minNum'] = $num2;
            $res['maxNum'] = $num1;
        }
        return $res;
    }
    
    
    function addStrings($num1, $num2) {
        $next_line = 0;
        $strs = $this -> minAndMax($num1, $num2);
        $minNum = $strs['minNum'];
        $maxNum = $strs['maxNum'];
        $result = str_split($maxNum);
        array_unshift($result, 0);
        $i = count($result) - 1;
        $j = strlen($minNum) - 1;
        
        while($j >= 0) {
            $res = intval($minNum[$j]) + intval($result[$i]) + $next_line;
            $next_line = 0;
            if ($res > 9) {
                $res = $res - 10;
                $next_line = 1;
            }
            $result[$i] = $res;
            $i -= 1;
            $j -= 1;
        }
        while($next_line) {
            $res = intval($result[$i]) + $next_line;
            $next_line = 0;
            if ($res > 9) {
                $res = $res - 10;
                $next_line = 1;
            }
            $result[$i] = $res;
            $i -= 1;
        }
        $result = implode($result);
        if ($result[0] == '0') {
            $result = substr($result, 1, null);
        }
        return $result;
        }
    }
    
    
    $sol = new Solution();
    assert($sol -> addStrings("3876620623801494171", "6529364523802684779") === "10405985147604178950");
    assert($sol -> addStrings("999", "1") === '1000');
    assert($sol -> addStrings("456", "77") === '533');
    assert($sol -> addStrings("11", "123") === '134');

?>