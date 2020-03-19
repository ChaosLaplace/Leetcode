// Runtime: 12 ms
// Memory Usage: 15 MB
class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        
        $string = '';
        
        $strval = strval($x);
        if($strval[0] === '-')
        {
            $string = '-';
            $strval = substr($strval, 1);
        }
        $strval = intval($string.strval(intval(strrev($strval))));
        if($strval > 2147483647 || $strval < -2147483648) {
            return 0;
        }
        
        return $strval;
    }
}