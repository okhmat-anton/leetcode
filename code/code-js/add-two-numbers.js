// https://leetcode.com/problems/add-two-numbers/submissions/
// Runtime: 132 ms, faster than 99.98% of JavaScript online submissions for Add Two Numbers.

/**
 * Definition for singly-linked list.
 * function ListNode(val, next) {
 *     this.val = (val===undefined ? 0 : val)
 *     this.next = (next===undefined ? null : next)
 * }
 */
/**
 * @param {ListNode} l1
 * @param {ListNode} l2
 * @return {ListNode}
 */

let addTwoNumbers = (l1, l2) => {
    let result = new ListNode(0);
    let head = result;
    let carry = 0;
    while (l1 || l2 || carry) {
        let sum = (l1 ? l1.val : 0) + (l2 ? l2.val : 0) + carry;
        carry = Math.floor(sum / 10);
        head.next = new ListNode(sum % 10);
        head = head.next;
        l1 = l1 ? l1.next : null;
        l2 = l2 ? l2.next : null;
    }
    return result.next;
}