<?php

$start = microtime(true);
$memory = memory_get_usage();

// easy
// https://leetcode.com/problems/roman-to-integer/

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $values = [
            'I'=>1,
            'V'=>5,
            'X'=>10,
            'L'=>50,
            'C'=>100,
            'D'=>500,
            'M'=>1000,
        ];
        $result = 0; $max = 0;

        $i = strlen($s)-1;
        for($i; $i>=0; $i--){
            $val = $values[$s[$i]];
            $max = max($max,$val);
            if($val<$max){
                $result = $result - $val;
            }else{
                $result = $result + $val;
            }
        }
        return $result;
    }




echo 'III => '.romanToInt('III').' <br />';

echo 'Time: ' . (microtime(true) - $start)/1000 . ' msec. <br />';
echo 'Memory: ' . (memory_get_usage() - $memory) . 'b <br /><br />';

echo 'IIIXX => '.romanToInt('IIIXX').' <br />';
echo 'LVIII => '.romanToInt('LVIII').' <br />';
echo 'MCMXCIV => '.romanToInt('MCMXCIV').' <br />';