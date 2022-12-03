<?php
class Solution {

    /**
     * @param String $s
     * @param String[] $words
     * @return Integer[]
     */
    function findSubstring($s, $words) {
        $res = [];
        $len = strlen($s);
        $wordLen = strlen($words[0]);
        $wordCount = count($words);
        $words = array_count_values($words);
        for($i = 0; $i < $len - $wordLen * $wordCount + 1; $i++){
            $tmp = [];
            for($j = 0; $j < $wordCount; $j++){
                $word = substr($s, $i + $j * $wordLen, $wordLen);
                if(!isset($words[$word])) break;
                $tmp[$word] = isset($tmp[$word]) ? $tmp[$word] + 1 : 1;
                if($tmp[$word] > $words[$word]) break;
            }
            if($j == $wordCount) $res[] = $i;
        }
        return $res;
    }
}