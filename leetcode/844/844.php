<?php

/**
 * used function:
 * array_push() 函数向第一个参数的数组尾部添加一个或多个元素（入栈），然后返回新数组的长度。
 * array_pop() 函数删除数组中的最后一个元素。
 * str_split() 函数把字符串分割到数组中。
 */

class Solution {

    /**
     * @param String $S
     * @param String $T
     * @return Boolean
     */
    function backspaceCompare($S, $T) {
        $S = $this->handleBack($S);
        $T = $this->handleBack($T);
        return $S == $T;
    }

    function handleBack($string)
    {
        $new = [];

        for ($i = 0; $i < strlen($string); $i++) {
            if ($string[$i] == '#') {
                array_pop($new);
            } else {
                array_push($new, $string[$i]);
            }
        }
        return $new;
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


