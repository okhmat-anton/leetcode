<?php

$start = microtime(true);
$memory = memory_get_usage();

// hard
// https://leetcode.com/problems/wildcard-matching/

/**
 * @param String $s - contains only lowercase English letters.
 * @param String $p - contains only lowercase English letters, '?' or '*'
 * @return Boolean
 */

function isMatch($s, $p): bool
{
    $preg = str_replace('?', '.', $p);
    $preg = preg_replace('/\*+/', '.*' ,$preg);
    return preg_match('/^'.$preg.'$/U',$s);
}