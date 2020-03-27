// Runtime: 8 ms
// Memory Usage: 15.7 MB
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        $result = array_search($target, $nums);
        if(($result !== FALSE))
        {
            return $result;
        }
        else
        {
            foreach($nums as $keys => $values)
            {
                if($target < $values)
                {
                    return $keys;
                    break;
                }
            }
            return count($nums);
        }
    }
}