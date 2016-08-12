
<?php
$arr = array ('green' => 'зеленый', 'red' => 'красный', 'blue' => 'голубой');

//ну, если как написано в задании двумя форичами, то так
foreach ($arr as $key => $key) {
    echo $key . '<br>';
}

echo '<br>';

foreach ($arr as $element) {
    echo $element . '<br>';
}

echo '<br>';
//если одним:

foreach ($arr as $key => $element) {
    echo $key. '  ' . $element .'<br>';
}


