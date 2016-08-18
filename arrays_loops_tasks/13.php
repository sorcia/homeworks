<?php
$a = 1;
$b = 1;

while ($a<=9) {
    for ($b=1; $b<=9; $b++) {
        $sum = $a*$b;
        echo $a . ' x ' . $b . ' = ' . $sum .'<br>';
    }
    $a = $a + 1;
    echo '<br>';
}

?>