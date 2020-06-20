// Runtime: 8 ms
// Memory Usage: 15 MB
// 看範例優化
// Runtime: 0 ms
// Memory Usage: 15 MB
class Solution {

    /**
    * @param String $s
    * @return Integer
    */
    function lengthOfLastWord($s) {
        $s = trim($s);
        $s = explode(' ', $s);
        if($s !== '')
        {
            return strlen(end($s));
        }
        else
        {
            return 0;
        }
    }
}