<?php

class Solution {

    /**
     * @param Integer[] $arr
     * @return Boolean
     */
    function uniqueOccurrences($arr) {
        $flag = 0;
        $countArr = array_count_values($arr);
        $judgeArr = array_count_values($countArr);
        foreach ($judgeArr as $key => $value) {
            if ($value > 1) {
                $flag = 1;
            }
        }
        if ($flag) {
            return false;
        } else {
            return true;
        }
    }
}

$solution = new Solution();
$arr = [1,2,2,1,1,3];
$result = $solution->uniqueOccurrences($arr);
var_dump($result);


