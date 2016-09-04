<?php
$row = 5;
$cols = 5;
$colors = array('red','yellow','blue','gray','maroon','brown','green');
$number = rand(1000, 9999);
echo "<table border = '1'>";

for ($i= 0; $i<$row; $i++) {
    echo "<tr>";
    for ($a = 0; $a < $cols; $a++) {
        $color = array_rand($colors, 1);
        $number = rand(1000, 9999);
        echo "<td bgcolor = $colors[$color]> $number </td>";
    }
echo "</tr>";
}
echo "</table>"
?>
