<?php

// time limit execution


class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */

    public static function countSmaller($nums)
    {
        $result = [];
        $count = count($nums);
        for ($i=0; $i < $count; $i++) {
            $result[$i] = 0;
            for ($j = $i + 1; $j < $count; $j++) {
                if ($nums[$j] < $nums[$i]) {
                    $result[$i]++;
                }
            }
        }
        return $result;
    }
}