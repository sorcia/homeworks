<?php
$fileName = '3.txt';
$file = fopen($fileName, 'a');
$str = file_get_contents('3.txt');
$words = explode(" ", $str);

if (isset ($_POST ['num'])) {
    $num = $_POST ['num'];
    foreach ($words as $word) {
        $count = iconv_strlen($word);
        if ($count < $num ) {
            $wordsWr[] = $word;
        }
    }
    $text = implode(" ", $wordsWr);
    echo $text;
    file_put_contents($fileName, $text);
}
?>

<form action="" method="post">
    <input type="number" name="num"> Enter Number</input>
    <p><input type="submit" name="submit" value="submit"> </input></p>
</form>

