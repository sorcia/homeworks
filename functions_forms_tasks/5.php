<?php
function findDir($dirName, $word) {
   $files = $dirName . '*.*';
   $filesList = glob($files);
    foreach ($filesList as $file) {
        $pos = strpos($file, $word);
       if ($pos !== false) {
           echo $file . '<br>';
       }
    }
}
$dirName = '/Applications/XAMPP/xamppfiles/htdocs/academy0207/';
$word = 'class';
findDir($dirName, $word);
