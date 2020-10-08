<?php
    $i = 0;
    function numbers($i) {
        if ($i == 0) {
            echo "$i &ndash; это ноль." . '<br>';
        } elseif ($i % 2 == 0 && $i > 0) {
            echo "$i &ndash; это чётное число." . '<br>';
        } elseif ($i % 2 != 0) {
            echo "$i &ndash; это нечётное число." . '<br>';
        }
        
    }
    do {
        numbers($i);
        $i++;
    }
    while ($i < 11);
?>