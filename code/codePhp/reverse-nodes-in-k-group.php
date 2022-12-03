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
     * @param ListNode $head
     * @param Integer $k
     * @return ListNode
     */
    function reverseKGroup($head, $k) {
        $dummy = new ListNode(0, $head);
        $pre = $dummy;
        $end = $dummy;
        while ($end->next != null) {
            for ($i = 0; $i < $k && $end != null; $i++) {
                $end = $end->next;
            }
            if ($end == null) {
                break;
            }
            $start = $pre->next;
            $next = $end->next;
            $end->next = null;
            $pre->next = $this->reverse($start);
            $start->next = $next;
            $pre = $start;
            $end = $pre;
        }
        return $dummy->next;

    }

    function reverse($head) {
        $pre = null;
        $cur = $head;
        while ($cur != null) {
            $next = $cur->next;
            $cur->next = $pre;
            $pre = $cur;
            $cur = $next;
        }
        return $pre;
    }
}