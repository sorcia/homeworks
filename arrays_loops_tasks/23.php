<h1>Введите число</h1>
<form action="23.php" method="post">
    <input type="text" name="number"></input>
    <input type="submit" value="Calculate"></input>
</form>

<?php
if(isset($_POST['number'])) {
    $number = (int) $_POST['number'];
    $count = strlen($number);

    if($count > 1) {
        $sum = 0;
        $arr = str_split($number);

        for($n = 0; $n < $count; $n++)
            $sum += $arr[$n];

        echo 'Сумма введенных цифр: ', $sum;
    }
    else
        echo 'Вы ввели одну цифру. Цифра: ', $number;
}
?>



