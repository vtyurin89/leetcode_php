<?php
class Solution {
    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {
        $s = trim(strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $s)));
        return $s === strrev($s);    
    }
}

$sol = new Solution();
$sol -> isPalindrome("Mama");
assert($sol -> isPalindrome("Mama") == false);
assert($sol -> isPalindrome("ababa") == true);
assert($sol -> isPalindrome("A man, a plan, a canal: Panama") == true);


class Solution2 {
/**
 * @param String $s
 * @return Boolean
 */
function isPalindrome($s) {
    $start_pointer = 0;
    $end_pointer = strlen($s) - 1;
    while ($start_pointer < $end_pointer) {
        if (!ctype_alnum($s[$start_pointer])) {
            $start_pointer++;
        }
        elseif (!ctype_alnum($s[$end_pointer])) {
            $end_pointer--;
        }
        elseif (strtolower($s[$start_pointer]) != strtolower($s[$end_pointer])) {
            return false;
        }
        else {
            $start_pointer++;
            $end_pointer--;
        }
    }
    return true;
}
}

$sol2 = new Solution2();
$sol -> isPalindrome("Mama");
assert($sol2 -> isPalindrome("Mama") == false);
assert($sol2 -> isPalindrome("ababa") == true);
assert($sol2 -> isPalindrome("A man, a plan, a canal: Panama") == true);
