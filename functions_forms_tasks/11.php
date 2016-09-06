<?php
$txt = 'а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался.а там хоть трава не расти.';

function firstWordToUpper ($txt) {
    $array = explode('. ', $txt);
    foreach ($array as $element) {
        $str = mb_strtoupper(mb_substr($element, 0, 1, 'UTF-8'), 'UTF-8') . mb_substr($element, 1, mb_strlen($element), 'UTF-8');
        $arrayUp[] = $str;
    }
    $strUp = implode('. ', $arrayUp);
    echo $strUp;
}

firstWordToUpper($txt);
?>