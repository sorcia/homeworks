<?php
$array = array();
for ($a=0; $a<=10; $a++) {
    $array[] = rand(1, 100);
}

echo '<pre>';
print_r($array);
echo '<pre>';

$sum1 = 0;
$sum2 = 0;
foreach ($array as $key => $element) {
    if ($key % 2 == 0) {
        $sum1 = $sum1 + $element ;
    }
    if ($key % 2 == 1) {
        $sum2 = $sum2 + $element ;
            }
}
echo 'Сумма элементов с парным индексом = ' . $sum1 . '<br>';
echo 'Сумма элементов с не парным индексом = ' . $sum2;
?>