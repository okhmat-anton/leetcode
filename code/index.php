<?php

// all directories in  the current directory
$dirs = array_filter(glob('*'), 'is_dir');
foreach ($dirs as $dir){
    echo '<a href="'.$dir.'">'.$dir.'</a><br />';
}