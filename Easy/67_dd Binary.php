// Runtime: 8 ms
// Memory Usage: 14.8 MB
class Solution {

    /**
     * @param String $a
     * @param String $b
     * @return String
     */
    function addBinary($a, $b) {
        $i = strlen($a) - 1; // a的长度
        $j = strlen($b) - 1; // b的长度
        $ca = 0; // 商
        $ans = ''; // 结果
        while($i >= 0 || $j >= 0)
        {
            $sum = $ca;
            $sum += $i >= 0 ? $a[$i--] : 0;
            $sum += $j >= 0 ? $b[$j--] : 0;
            // sum和上次的余数和本次的a,b对应的位置相加
            // 余数为当前位置
            $ans .= (int)($sum % 2);
            // 商为进位
            $ca = (int)($sum / 2);
        }
        // 如果ca=1表示最后有进位
        $ans .= $ca == 1 ? $ca : '';
        // 用php的形式，将字符串转数组，然后再反转，最后数组转字符串
        return implode('', array_reverse(str_split($ans)));
    }
}