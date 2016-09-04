<?php
$arr = array (4, 2, 5, 19, 13, 0, 10, );

foreach ($arr as $e) {
    if ($e == 2) {
        echo $e . ' Eсть!<br>';
    }
    if ($e ==3) {
        echo $e . ' Eсть!<br>';
    }
    if ($e ==4) {
        echo $e . ' Есть!<br>';
    }
    else {
        echo  'Нет!';
        break;
    }
}
?>

