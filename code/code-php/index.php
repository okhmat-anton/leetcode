<?php

$f = scandir(__DIR__);
foreach ($f as $file) {
    if (preg_match('/\.(php)/', $file) && $file!='index.php') {
        echo '<a href="'.$file .'" target="_blank" />'.str_replace('.php','',$file).'</a><br />';
    }
}