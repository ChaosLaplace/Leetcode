// Runtime: 8 ms
// Memory Usage: 15.2 MB
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function mergeTwoLists($l1, $l2) {
        if($l1 !== NULL && $l2 !== NULL)
        {
            if($l1->val > $l2->val)
            {
                $temp = $l1;
                $l1 = $l2;
                $l2 = $temp;
            }

            $l1->next = $this->mergeTwoLists($l1->next, $l2);
        }
        
        return $l1 ?? $l2;
    }
}