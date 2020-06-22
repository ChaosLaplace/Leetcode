// Runtime: 8 ms
// Memory Usage: 14.7 MB
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n) {
        $max = count($nums1);

        for($i = $m; $i < $max; ++$i)
        {
            $nums1[$i] = $nums2[$max - $i - 1];
        }
        sort($nums1);
        return $nums1;
        // echo json_encode($nums1);
    }
}