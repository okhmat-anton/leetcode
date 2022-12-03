<?php
/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($value) { $this->val = $value; }
 * }
 */

class Codec
{
    function __construct()
    {
        $this->index = 0;

    }

    /**
     * @param TreeNode $root
     * @return String
     */
    function serialize($root)
    {
        if ($root === null) {
            return 'null';
        }
        return $root->val . ',' . $this->serialize($root->left) . ',' . $this->serialize($root->right);
    }

    /**
     * @param String $data
     * @return TreeNode
     */
    function deserialize($data)
    {
        $data = explode(',', $data);
        return $this->deserializeHelper($data);

    }

    private function deserializeHelper(array $data)
    {
        if ($data[$this->index] === 'null') {
            $this->index++;
            return null;
        }
        $node = new TreeNode($data[$this->index]);
        $this->index++;
        $node->left = $this->deserializeHelper($data);
        $node->right = $this->deserializeHelper($data);
        return $node;
    }
}

/**
 * Your Codec object will be instantiated and called as such:
 * $ser = Codec();
 * $deser = Codec();
 * $data = $ser->serialize($root);
 * $ans = $deser->deserialize($data);
 */