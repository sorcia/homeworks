<?php
$txt = 'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался. А там хоть трава не расти';
function reverseText($a) {
    $array = explode('. ', $a);
    krsort($array);
    $rtext = implode('. ', $array);
    echo $rtext . '.';
}
reverseText($txt);
?>