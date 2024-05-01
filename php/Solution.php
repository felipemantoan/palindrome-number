<?php

class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome(int $x) : bool {
        $xAsString = (string)$x;
        $totalLetters = strlen($xAsString);
        
        $j = $totalLetters-1;

        for ($i = 0; $i < $totalLetters; $i++) {
            if ($xAsString[$i] !== $xAsString[$j]) {
                return FALSE;
            }
            $j--;
        }

        return TRUE;
    }
}


$solution = new Solution();
echo (int) $solution->isPalindrome(121) . "\n";
echo (int) $solution->isPalindrome(-121) . "\n";
echo (int) $solution->isPalindrome(10) . "\n";
