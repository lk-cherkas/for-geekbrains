<?php
    function noSpace($text) {
        $str = explode(' ', $text);
        $result = implode('_', $str);
        return $result;
    }
    $string = "Hello world I learning php";
    echo $string . '<br>';
    echo noSpace($string);
?>