<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Leetcode js</title>
</head>
<body>
  <script>
    <?php

        // print all files links in the directory
        $dir = '../code-js';
        $files = scandir($dir);
        foreach($files as $file){
            if($file != '.' && $file != '..'){
                echo '<a href="'.$file.'">'.$file.'</a><br />';
            }
        }

    ?>

  </script>
</body>
</html>