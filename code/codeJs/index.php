<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Leetcode js</title>
</head>
<body>
<?php

// print all files links in the directory
$f = scandir(__DIR__);


foreach ($f as $file) {
    if (preg_match('/\.(js)/', $file) && $file != 'index.php') {
        echo '<a href="' . $file . '" target="_blank" />' . str_replace('.php', '', $file) . '</a><br />';
    }
}

?>

</body>
</html>