<?php

class Solution {

    /**
     * @param String[] $words
     * @return String[]
     */
    function findWords($words) {
    	$res = array();
    	$lines = ["qwertyuiop", "asdfghjkl", "zxcvbnm"];
		$lineDict = array();
		foreach($lines as $line) {
			$lineDict[$line] = array();
			for($i=0; $i<strlen($line); $i++) {
				$lineDict[$line][$line[$i]] = true;
			}
		}
		foreach($words as $word) {
			$found = false;
			foreach($lines as $dict_key) {
					for($j=0;$j<strlen($word);$j++) {
						if(!array_key_exists(strtolower($word[$j]), $lineDict[$dict_key])) {
							$j = -1;
							break;
						}
						if ($j == strlen($word) - 1) {
							$found = true;
						}
					}
					if ($found) {
						$res[] = $word;
						break;
					}
			}
		}
		
    }
}


$sol = new Solution();
assert($sol -> findWords(["Hello","Alaska","Dad","Peace"]) == ["Alaska","Dad"]);
assert($sol -> findWords(["omk"]) == []);
assert($sol -> findWords(["adsdf","sfd"]) == ["adsdf","sfd"]);
?>