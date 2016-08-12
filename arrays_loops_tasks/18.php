18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
выходные дни следует вывести жирным.</p>
<?php
$week = array ('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday');
foreach ($week as $key => $day) {
    if ($key==5 or $key ==6) {
        echo '<b>'. $day.'</b> <br>';
    }
    else {
        echo $day . '<br>';
    }
}

?>