<?php
class Solution {

/**
 * @param String $s
 * @return Integer
 */
function firstUniqChar($s) {
	$result = -1; 
	$s_dict = array();
    for($i=0; $i < strlen($s);$i++) {
		if (!array_key_exists($s[$i], $s_dict)) {
			$s_dict[$s[$i]] = 1;
		}
		else {
			$s_dict[$s[$i]] += 1;
		}
    }
    for($i=0; $i < strlen($s);$i++) {
    	if ($s_dict[$s[$i]] == 1) {
    		return $i;
    	}
    }
    return $result;
}
}


class Solution2 {

    /**
     * @param String $s
     * @return Integer
     */
    function firstUniqChar($s) {
        $res = -1; 
        $s_dict = array();
        foreach(count_chars($s, 1) as $ind => $occurence) {
            if ($occurence == 1) {
                if ($res == -1) {
                    $res = strlen($s) - 1;
                }
                $check_index = strpos($s, chr($ind));
                if ($check_index < $res) {
                    $res = $check_index;
                }
            }
        }
        return $res;
    }
    }
    
    $sol = new Solution2();
    assert($sol -> firstUniqChar("loveleetcode") == 2);
    assert($sol -> firstUniqChar("leetcode") == 0);
    assert($sol -> firstUniqChar("aabb") == -1);

    