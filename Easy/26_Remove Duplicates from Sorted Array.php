// Runtime: 24 ms
// Memory Usage: 17.6 MB
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
    	$nums = array_values(array_unique($nums)); // 刪除重複然後排序
        return count($nums);
    }
}