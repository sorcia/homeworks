<?php
function getTopLongestWords($i, $topCount = 3) {
    $array = explode(' ', $i);
    usort($array, 'cmp');
    $array = array_unique($array);
    return array_slice($array, 0, $topCount);
}

function cmp($a, $b) {
    if (strlen($a) == strlen($b)) {
        return 0;
    }
    return (strlen($a) < strlen($b)) ? 1 : -1;
}

if (isset($_POST['text'])) {
    $result = getTopLongestWords($_POST['text']);
    echo '<pre>';
    print_r($result);
    echo '</pre>';
}
?>

<form action="" method="post">
    <h1>Enter text</h1>
    <textarea rows="10" cols="45" name="text"></textarea>
    <p><input type="submit" name="compare" value="Compare"> </input></p>
</form>


