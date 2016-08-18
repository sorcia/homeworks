<?php
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$count = 0;
foreach ($arr as $element) {
    if ($count < 2) {
        echo $element . ', ';
        $count = ++$count;
    } else {
        echo $element . '<br>';
        $count = 0;
    }
}
?>