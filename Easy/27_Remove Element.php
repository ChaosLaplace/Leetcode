// Runtime: 8 ms
// Memory Usage: 15 MB
class Solution {

    /**
    * @param Integer[] $nums
    * @param Integer $val
    * @return Integer
    */
    function removeElement(&$nums, $val) {
        foreach($nums as $keys => $values)
        {
            if($values === $val)
            {
                unset($nums[$keys]);
            }
        }
        
        return count($nums);
    }
}