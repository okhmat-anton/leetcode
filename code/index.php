<?php

// all directories in  the current directory
$dirs = array_filter(glob('*'), 'is_dir');
foreach ($dirs as $dir){
    echo '<a href="http://localhost:8005/'.$dir.'/index.php">'.$dir.'</a><br />';
}