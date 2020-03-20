// Runtime: 20 ms
// Memory Usage: 14.9 MB
class Solution {

    /**
    * @param String[] $strs
    * @return String
    */
    function longestCommonPrefix($strs) {
        $max_i = strlen($strs[0]);
        $max_j = count($strs);
        foreach($strs as $values)
        {
            if($max_i > strlen($values))
            {
                $max_i = strlen($values);
            }
        }
        
        $substr = '';
        $result = '';
        $array = [];
        $array_count_values = NULL;
        for($i = 0; $i < $max_i; ++$i)
        {
            for($j = 0; $j < $max_j; ++$j)
            {
                $substr = substr($strs[$j], $i, 1);
                $array[] = $substr;
                $array_count_values = array_count_values($array);

                if($j === $max_j - 1)
                {
                    if($array_count_values[$substr] === $max_j)
                    {
                        $result .= $substr;
                        unset($array);
                    }
                    else
                    {
                        return $result;
                    }
                }
            }
        }
        
        return $result;
    }
}