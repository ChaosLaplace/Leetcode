// Runtime: 8 ms
// Memory Usage: 14.9 MB
class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) {
        if($n <= 1)
		{
           return 1;
		}

        $res[0]=1;
        $res[1]=1;

        for($i = 2; $i <= $n; ++$i)
        {
            $res[$i] = $res[$i - 1] + $res[$i - 2];
        }
        
        return $res[$n];
    }
}