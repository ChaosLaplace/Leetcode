// Runtime: 8 ms
// Memory Usage: 15.1 MB
class Solution {

    /**
     * @param Integer $n
     * @return String
     */
    function countAndSay($n) {
        if($n === 1)
        {
            return '1';
        }
        else
        {
            $n -= 1;
        }

        $result = [1];
        $tmp = [];

        $max = count($result);

        $count = 0;

        for($i = 0; $i < $n; ++$i)
        {
            $max = count($result);
            $tmp = $result;
            unset($result);
            $result = [];

            for($j = 0; $j < $max; ++$j)
            {
                ++$count;
                if(isset($tmp[$j + 1]))
                {
                    if($tmp[$j] !== $tmp[$j + 1])
                    {
                        $result[] = $count;
                        $result[] = $tmp[$j];
                        $count = 0;
                    }
                }
                else
                {
                    $result[] = $count;
                    $result[] = $tmp[$j];
                    $count = 0;
                }
            }

            unset($tmp);
            $tmp = $j;
        }

        $str = '';
        foreach($result as $values)
        {
            $str .= $values;
        }
        return $str;
    }
}