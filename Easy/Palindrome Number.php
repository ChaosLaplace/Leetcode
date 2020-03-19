// Runtime: 24 ms
// Memory Usage: 14.8 MB
class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        $strval = strval($x);
        $max = strlen($strval);
        
        if($strval[0] === '-')
        {
            return false;
        }
        else
        {
            $intval = intval($max / 2);
            for($i = 0; $i < $intval; ++$i)
            {
                if($strval[$i] !== $strval[$max - (1 + $i)])
                {
                    return false; 
                }
            }

            return true;
        }
    }
}