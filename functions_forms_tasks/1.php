<?php
function getCommonWords($a, $b) {
    $arrayA = explode(" ", $a);
    $arrayB = explode(" ", $b);
    $result = array_intersect($arrayA, $arrayB);
    $result = array_unique ($result);
    return $result;
}

if (isset ($_POST['text1']) && isset ($_POST['text2'])) {
    $result = getCommonWords($_POST['text1'], $_POST['text2']);
    echo '<pre>';
    var_dump($result);
    echo '</pre>';
}
?>

<form action="" method="post">
    <p>Text 1</p>
    <textarea rows="10" cols="45" name="text1"></textarea>
    <p>Text 2</p>
    <textarea rows="10" cols="45" name="text2"></textarea>
    <p><input type="submit" name="compare" value="Compare"> </input></p>
</form>



