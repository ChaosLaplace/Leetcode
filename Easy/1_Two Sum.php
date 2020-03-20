// Runtime: 824 ms
// Memory Usage: 15.7 MB
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        
        $max = count($nums);
        $num = null;
        
        for($i = 0; $i < $max; ++$i)
        {
            $num = $target - $nums[$i];
            for($j = $i + 1; $j < $max; ++$j)
            {
                if($nums[$j] == $num)
                {
                    return [$i, $j];
                }
            }
        }
    }
}