<?php
function countUniqArray($a) {
    $array = explode(' ', $a);
    $uniq_array = array_unique($array);
    $cnt = count($uniq_array);
    return $cnt;
}

if (isset($_POST['text'])) {
    $result = countUniqArray($_POST['text']);
    echo '<pre>';
    print_r($result);
    echo '</pre>';
}
?>

<form action="" method="post">
    <h1>Enter Text</h1>
    <textarea rows="10" cols="45" name="text"></textarea>
    <p><input type="submit" name="Count" value="Count"> </input></p>
</form>
