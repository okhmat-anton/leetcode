<?php


$start = microtime(true);
$memory = memory_get_usage();

// easy
// https://leetcode.com/problems/remove-all-adjacent-duplicates-in-string/

/**
 * @param String $s
 * @return String
 */
function removeDuplicates($s)
{
    $m = strlen($s);
    $rlen = 0;
    $i = 0;
    $r = '';
    for ($i; $i < $m; $i++) {
        $l = $s[$i];
        $n = empty($s[$i + 1]) ? '' : $s[$i + 1];
        if ($l == $n) {
            $i++;
            $needFind = true;
            while ($needFind) {
                $n = empty($s[$i + 1]) ? '' : $s[$i + 1];
                $index = $rlen - 1;
                if ($index < 0) {
                    break;
                }
                $l = $r[$index];
                if ($l == $n) {
                    $i++;
                    $rlen--;
                } else {
                    $needFind = false;
                }
            }
            $r = substr($r, 0, $rlen);
            continue;
        }
        $rlen++;
        $r .= $l;
    }
    return $r;
}


echo 'abbaca => ' . removeDuplicates('abbaca') . '<br />';

echo 'Time: ' . (microtime(true) - $start)/1000 . ' msec. <br />';
echo 'Memory: ' . (memory_get_usage() - $memory) . 'b <br /><br />';

echo 'azxxzy => ' . removeDuplicates('azxxzy') . '<br />';