<?php
$number = 442158755745;
$numeric = 5;
$count = 0;

for ($a = 0; $a < strlen($number); $a++) {
    $num = str_split($number);
    if ($num[$a] == $numeric) {
        $count = $count + 1;
    }
}
echo 'Цифра ' . $numeric . ' встречается в числе ' . $number . ' - ' . $count . ' раза';
?>