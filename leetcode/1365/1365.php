<?php

class Solution
{
    function smallerNumbersThanCurrent($nums)
    {
        $return = [];
        $newArr = $nums;
        sort($newArr);
        foreach ($nums as $key => $value) {
            $return[$key] = array_search($value, $newArr);
        }
        return $return;
    }
}

$solution = new Solution();
$nums = [8,1,2,2,3];
$result = $solution->smallerNumbersThanCurrent($nums);
var_dump($result);



