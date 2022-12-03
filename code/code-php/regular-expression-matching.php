<?php
    /**
     * @param String $s
     * @param String $p
     * @return Boolean
     */
    function isMatch($s, $p) {
        return preg_match('/^'.$p.'$/U',$s);
    }