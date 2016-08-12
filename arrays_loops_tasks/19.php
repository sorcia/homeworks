<p>19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а
    текущий день выведите курсивом. Текущий день должен храниться в переменной $day.</p>

<?php
$week = array ('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
$day = 'Friday';

foreach ($week as $days) {
    if ($days == $day) {
        echo '<i>'. $day . '</i><br>';
    }
    else {
        echo $days . '<br>';
    }
}
?>