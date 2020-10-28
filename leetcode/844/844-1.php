<?php

/**
 * Class Solution
 * other people's solution code
 */

class Solution {

    /**
     * @param String $S
     * @param String $T
     * @return Boolean
     */
    function backspaceCompare($S, $T) {
        $stack1 = [];
        $str1 = strlen($S);
        $stack2 = [];
        $str2 = strlen($T);
        for($i = 0; $i < $str1; $i++){
            if($S[$i] == '#'){
                array_pop($stack1);
            } else {
                array_push($stack1, $S[$i]);
            }
            var_dump($stack1);
        }

        for($i = 0; $i < $str2; $i++){
            if($T[$i] == '#'){
                array_pop($stack2);
            } else {
                array_push($stack2, $T[$i]);
            }
        }
        return $stack1 == $stack2;
    }
}

$solution = new Solution();
//$s = 'ab#c';
//$t = 'ad#c';
//$s = 'ab##';
//$t = 'c#d#';
//$s = 'a##c';
//$t = '#a#c';
$s = 'a#c';
$t = 'b';
var_dump($solution->backspaceCompare($s, $t));

