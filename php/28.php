<?php
//28. Find the Index of the First Occurrence in a String

/*
Runtime 12 ms
Beats 16.27%
Memory 18.9 MB
Beats 87.56%
*/
class Solution {

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) {
        $haystackLen = strlen($haystack);
        $needleLen = strlen($needle);
        if($haystackLen < $needleLen){
            return -1;
        }
        for($i = 0; $i < $haystackLen; $i++) {
            if($haystack[$i] == $needle[0]) {
                $isCompare = true;
                for($j = 1; $j < $needleLen; $j++) { 
                    if($haystack[$j + $i] != $needle[$j]) {
                       $isCompare = false;
                    }
                }
                if ( $isCompare ){
                    return $i;
                }
            }
        }
        return -1;
    }
}
