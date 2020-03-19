class Solution {

    /**
    * @param String $s
    * @return Integer
    */
    function romanToInt($s) {
        
        $sample = array(
            'I' => 1,
            'II' => 2,
            'III' => 3,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000
        );

        $strrchr = [];
        $max = 0;
        $total = 0;
        $i = 0;
        
        for($i; $i < 1; ++$i)
        { 
            foreach($sample as $keys => $values)
            {
                $max = strlen($s);
                if($max > 0)
                {
                    $i = 0;
                    // 從後面搜尋到字串,丟出日標後的所有字串             
                    $strrchr[] = strrchr($s, $sample[$keys]);
                    str_replace($sample[$keys], '', $s);
                }
                else
                {
                    $i = 1;
                    break;
                }
            }
        }
        
        $max = count($strrchr) - 1;
        $back = 0;
        $front = 0;
        for($i = 0; $i < $max; ++$i)
        {
            $back = $strrchr[$i];
            $front = isset($strrchr[$i + 1]) ? $strrchr[$i + 1] : FALSE;
            if($front !== FALSE)
            {
                if($back < $front)
                {
                    $total += ($sample[$back] + $sample[$front]);
                }
                else
                {
                    $total += ($sample[$back] - $sample[$front]);
                }
                ++$i;
            }
            else
            {
                break;
            }
        }
            
        return $total;
    }
}