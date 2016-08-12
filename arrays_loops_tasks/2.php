
<?php
$numbers = array (1, 20, 15, 17, 24, 35);
$result = 0;

foreach ($numbers as $number) {
    $result = $result + $number;
}
echo "Сумма элементов массива равна ". $result;
?>