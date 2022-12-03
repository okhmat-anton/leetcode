<?php
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode[] $lists
     * @return ListNode
     */
    function mergeKLists($lists){
        $list = [];
        foreach($lists as $l){
            while($l){
                $list[] = $l->val;
                $l = $l->next;
            }
        }
        sort($list);
        $head = new ListNode();
        $node = $head;
        foreach($list as $l){
            $node->next = new ListNode($l);
            $node = $node->next;
        }
        return $head->next;
    }
}
