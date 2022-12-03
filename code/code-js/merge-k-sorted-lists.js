// https://leetcode.com/problems/merge-k-sorted-lists/

/**
 * Definition for singly-linked list.
 * function ListNode(val, next) {
 *     this.val = (val===undefined ? 0 : val)
 *     this.next = (next===undefined ? null : next)
 * }
 */
/**
 * @param {ListNode[]} lists
 * @return {ListNode}
 */

let mergeKLists = (lists)=> {
    let result = new ListNode(0);
    let head = result;
    while (lists.length > 0) {
        let min = 0;
        for (let i = 1; i < lists.length; i++) {
            if (lists[i] && lists[i].val < lists[min].val) {
                min = i;
            }
        }
        if (lists[min]) {
            head.next = lists[min];
            head = head.next;
            lists[min] = lists[min].next;
        } else {
            lists.splice(min, 1);
        }
    }
    return result.next;
}