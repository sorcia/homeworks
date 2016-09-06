<?php
$dirName = '/Applications/XAMPP/xamppfiles/htdocs/';

if (is_dir($dirName)) {
    $dir = opendir ($dirName);
    while (($file = readdir($dir)) !== false) {
        echo $file . '<br>';
    }
    closedir($dir);
}
else {
    echo "$dirName is not a directory";
}
?>
