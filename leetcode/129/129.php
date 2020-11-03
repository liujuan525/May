<?php

// Definition for a binary tree node.
 class TreeNode {
    public $val = null;
    public $left = null;
    public $right = null;
    function __construct($value)
    {
        $this->val = $value;
    }
}

class Solution {

    protected $sum = 0;

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function sumNumbers($root) {
        if ($root === null) {
            return $this->sum;
        }
        $this->handle($root);

        return $this->sum;
    }

    private function handle($root, $sum = 0)
    {
        if ($root === null) return;
        $sum = $sum * 10 + $root->val;
        if ($root->left === null && $root->right === null) {
            $this->sum += $sum;
        }
        $this->handle($root->left, $sum);
        $this->handle($root->right, $sum);
    }
}


$solution = new Solution();
//$rootArr = [1,2,3];
//$root = new TreeNode($rootArr);
$root = 1->2->3;
$result = $solution->sumNumbers($root);
var_dump($result);


