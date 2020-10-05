<?php
    $a = 12;
    $b = 4;
    function sum($a, $b) {
        return $a + $b;
    }
    function diff($a, $b) {
        return $a - $b;
    }
    function mul($a, $b) {
        return $a * $b;
    }
    function div($a, $b) {
        return $a / $b;
    }
    echo '$a = ' . $a . '<br>';
    echo '$b = ' . $b . '<br>';
    $x1 = sum($a, $b);
    $x2 = diff($a, $b);
    $x3 = mul($a, $b);
    $x4 = div($a, $b);
    echo '$a + $b = ' . $x1 . '<br>';
    echo '$a - $b = ' . $x2 . '<br>';
    echo '$a * $b = ' . $x3 . '<br>';
    echo '$a / $b = ' . $x4 . '<br>';
?>