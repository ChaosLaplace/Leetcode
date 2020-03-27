// Runtime: 16 ms
// Memory Usage: 16.3 MB
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArray($nums) {
        $switch = FALSE;
        $tmp = 0;
        $result = 0;
        $result_ex = 0;
        foreach($nums as $keys => $values)
        {
            $tmp += $values;
            if($values > $tmp)
            {
                $tmp = $values;
            }

            if($tmp > $result)
            {
                $switch = TRUE;
                $result = $tmp;
            }

            // 處理沒有正數的情況
            if($switch === FALSE)
            {
                if($keys === 0)
                {
                    $result_ex = $tmp;
                }
                else
                {
                    $result_ex = max($result_ex, $tmp);
                }
            }
        }

        if($switch)
        {
            return $result;
        }
        else
        {
            return $result_ex;
        }
    }
}