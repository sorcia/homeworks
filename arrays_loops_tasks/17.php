<p>17.Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий
    месяц выведите жирным. Текущий месяц должен храниться в переменной $month.</p>

<?php
$monthes = array ('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
$month = 'August';
foreach ($monthes as $mon) {
    if ($mon == $month) {
        echo '<b>'. $mon . '</b><br>';
    }
    else {
        echo $mon . '<br>';
    }
}
?>