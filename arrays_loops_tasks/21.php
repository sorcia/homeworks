<?php
$c = '';
	for ($a = 1; $a <= 9; $a++)
    {
        for ($b = 0; $b < $a; $b++)
        {
           $c .= $a;
        }
        echo $c.'<br>';
        $c = '';
        $b = 0;
    }
?>