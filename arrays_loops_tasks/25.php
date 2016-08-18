<?php
$array = array();
for ($a=0; $a<=10; $a++) {
    $array[] = rand(0, 10);
}

echo '<pre>';
print_r($array);
echo '<pre>';

$min = min($array);
$max = max($array);

foreach($array as $key=>$element) {
    if($element == $min) {
        $array[$key] = $max;
    }
    if($element == $max) {
        $array[$key] = $min;
    }
}

echo '<pre>';
print_r($array);
echo '<pre>';
?>