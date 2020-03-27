// Runtime: 8 ms
// Memory Usage: 14.9 MB
class Solution {

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) {
        if(strlen($needle) > 0)
        {
            $result = strstr($haystack, $needle);
            if($result !== FALSE)
            {
                return (strlen($haystack) - strlen($result));
            }
            else
            {
                return -1;
            }
        }
        else
        {
            return 0;
        }
    }
}