// Runtime: 4 ms
// Memory Usage: 14.8 MB
class Solution {

    /**
    * @param String $s
    * @return Boolean
    */
    function isValid($s) {
        $sample = array(
            '(' => ')',
            '{' => '}',
            '[' => ']'
        );

        $max = strlen($s);
        if($max % 2 === 0)
        { 	
            $temp = NULL;
            $substr = NULL;
            $array = [];
            for($i = 0; $i < $max; ++$i)
            {
                $temp = end($array); // 最後一個欄位
                $substr = substr($s, $i, 1);

                if($i > 0 && $sample[$temp] === $substr)
                {
                    unset($array[key($array)]); // 當前的 key
                }
                else
                {
                    $array[] = $substr;
                }
            }
        }
        else
        {
            return FALSE;
        }

        return count($array) === 0;
    }
}