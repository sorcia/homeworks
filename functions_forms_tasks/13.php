<?php
$string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';

function countElements($string) {
    $array = explode(' ', $string);
    $count = array_count_values($array);
    array_multisort($count, SORT_NUMERIC, SORT_DESC);
    foreach ($count as $key => $element) {
        echo $key . ' - ' . $element . '<br>';
    }
}
countElements($string);
?>




