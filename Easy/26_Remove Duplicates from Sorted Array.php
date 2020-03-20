// Runtime: 20 ms
// Memory Usage: 17 MB
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
    	$max = count($nums);
    	$index = 0;
        for($i = 1; $i < $max; ++$i)
        {
        	if($nums[$index] !== $nums[$i])
        	{
        		++$index;
        		$nums[$index] = $nums[$i];
        	}
        }
        
        return ($index + 1);
    }
}