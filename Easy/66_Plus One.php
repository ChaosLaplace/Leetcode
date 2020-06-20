// Runtime: 12 ms
// Memory Usage: 15 MB
class Solution {

    /**
    * @param Integer[] $digits
    * @return Integer[]
    */
    function plusOne($digits) {
        $max = count($digits) - 1;
        $add = 0;
        $explode = NULL;
        $result = [];
        $tmp = [];
        for($i = $max; $i >= 0; --$i)
        {
            if($i === $max)
            {
                $add += $digits[$i] + 1;
            }
            else
            {
                $add += $digits[$i];
            }

            if(strpos($add, '0'))
            {
                $explode = explode('0', $add);
                foreach($explode as $values)
                {
                    if($values !== '')
                    {
                        $add = intval($values);
                        $result[] = 0;
                        if(!isset($digits[$i - 1]))
                        {
                            $result[] = $add;
                        }
                    }
                }
            }
            else
            {
                $result[] = $add;
                $add = 0;
            }
        }

        krsort($result);
        foreach($result as $values)
        {
            $tmp[] = $values;
        }

        return $tmp;
    }
}