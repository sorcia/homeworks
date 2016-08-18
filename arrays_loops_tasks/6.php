<?php

$arr = array ('green' => 'зеленый', 'red' => 'красный', 'blue' => 'голубой');

foreach ($arr as $key => $element) {
    $en [] = $key;
    $ru [] = $element;
}

echo '<pre>';
var_dump ($en);
echo '</pre>';

echo '<pre>';
var_dump ($ru);
echo '</pre>';
?>


