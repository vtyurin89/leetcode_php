<?php

class Solution {

    function commonChars($words) {
    	$words_len = count($words);
    	if ($words_len == 1) {
    		return str_split($words[0]);
    	}
    	
    	$letter_dict = array();
    	$result = array();
    	
    	$words_len = count($words);
    	if ($words_len == 1) {
    		return str_split($words[0]);
    	}
    	
    	$letter_dict = array();
    	$result = array();

		for ($i = 97; $i <= 122; $i++) {
		    $char = chr($i);
		    $result[$char] = 0;
		}
		for ($i=0; $i < strlen($words[0]); $i++) {
			$result[$words[0][$i]] += 1;
		}

    	foreach($words as $word) {
    		$letter_dict[$word] = array();
			for ($i = 97; $i <= 122; $i++) {
		    $char = chr($i);
		    $letter_dict[$word][$char] = 0;
			}
	    	for($i=0; $i<strlen($word); $i++) {
	    		if (array_key_exists($word[$i], $letter_dict[$word])) {
	    			$letter_dict[$word][$word[$i]] += 1;
	    		} else {
	    			$letter_dict[$word][$word[$i]] = 1;
    			}
    		}
    	}
    	
    	foreach($letter_dict as $letters) {
    		foreach($letters as $letter => $num) {
    			$result[$letter] = min($num, $result[$letter]);
    		}
    	}
    	$res = array();
    	foreach ($result as $key => $value) {

        for ($i = 0; $i < $value; $i++) {
            $res[] = $key;
        }
    }
    	return $res;
    }
}

$sol = new Solution();
$sol -> commonChars(["bella","label","roller"]);