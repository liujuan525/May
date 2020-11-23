<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        for ($i = 0; $i < count($nums); $i++)
        {
            if ($nums[$i] == 0) {
                array_push($nums, $nums[$i]);
                unset($nums[$i]);
            }
        }
        return $nums;
    }
}

$solution = new Solution();
$nums = [0,1,0,3,12];
$result = $solution->moveZeroes($nums);
var_dump($result);

//输出: [1,3,12,0,0]

