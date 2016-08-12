<?php
$numbers = array (2, 5, 9, 15, 0, 4);

echo 'Элементы массива, которые больше 3­х, но меньше 10: <br>';

foreach ($numbers as $number) {
    if ($number > 3 and $number < 10) echo $number . '<br>';
}


?>