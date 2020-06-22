// Runtime: 8 ms
// Memory Usage: 15.1 MB
// 無法理解
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
     * @return ListNode
     */
    function deleteDuplicates($head) {
        
        $current = $head;
        
        while($current !== NULL && $current->next !== NULL)
        {
            if($current->next->val === $current->val)
            {
                $current->next = $current->next->next;
            }
            else
            {
                $current = $current->next;
            }
        }
        
        return $head;
    }
}