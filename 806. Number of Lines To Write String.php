<?php
// @codingStandardsIgnoreFile

class Solution {

    function numberOfLines($widths, $s) {
    	 $line_width = 100;
		 $res_array = array(0 => array());
		 $res_array_index = 0;
		 $alphabet = range('a', 'z');
		 
		 for($i = 0; $i < strlen($s); $i++) {
		 	$width_index = array_search($s[$i], $alphabet);
		 	if (!($line_width - $widths[$width_index] >= 0)) {
		 		$res_array_index += 1;
		 		$res_array[$res_array_index] = array();
		 		$line_width = 100;
		 	}
		 	array_push($res_array[$res_array_index], $widths[$width_index]);
	 		$line_width -= $widths[$width_index];
		 	
		 }
		return array(0 => $res_array_index + 1, 1 => array_sum($res_array[$res_array_index]));
}
}


$sol = new Solution();
assert($sol -> numberOfLines(
	[10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10],
	"abcdefghijklmnopqrstuvwxyz"
	) == array(0 => 3, 1 => 60));
assert($sol -> numberOfLines(
	[4,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10,10],
	"bbbcccdddaaa"
	) == array(0 => 2, 1 => 4));