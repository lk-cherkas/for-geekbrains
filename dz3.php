<?php
    echo '<br>' . "-------------Задание №1-------------" . '<br>';
    $i = 0;
    while($i < 101) {
        if ($i % 3 == 0) {
            echo "$i ";
        }
        $i++;
    }
    echo '<br>' . "-------------Задание №2-------------" . '<br>';
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
    echo '<br>' . "-------------Задание №3-------------" . '<br>';
    $rf["Краснодарский край"] = ["Краснодар", "Полтавская", "Староминская"];
    $rf["Ростовская область"] = ["Ростов-на-Дону", "Аксай", "Азов"];
    $rf["Ставропольский край"] = ["Ставрополь", "Ессентуки", "Пятигорск"];
    foreach ($rf as $key => $item1) {
        echo '<br>' . $key . ": ";
        foreach ($item1 as $item2) {
            echo "$item2";
            $x = count($item1);
            if ($item2 == $item1[$x-1]) {
                echo ".";
            } else {
                echo ", ";
            }
        }
    }
    echo '<br>' . "-------------Задание №4-------------" . '<br>';
    function translate($string) {
    $abc = [
        "а" => "a",
        "б" => "b",
        "в" => "v",
        "г" => "g",
        "д" => "d",
        "е" => "e",
        "ё" => "yo",
        "ж" => "zh",
        "з" => "z",
        "и" => "i",
        "й" => "y",
        "к" => "k",
        "л" => "l",
        "м" => "m",
        "н" => "n",
        "о" => "o",
        "п" => "p",
        "р" => "r",
        "с" => "s",
        "т" => "t",
        "у" => "u",
        "ф" => "f",
        "х" => "h",
        "ц" => "ts",
        "ч" => "ch",
        "ш" => "sh",
        "щ" => "sch",
        "ъ" => "`",
        "ы" => "y",
        "ь" => "",
        "э" => "e",
        "ю" => "yu",
        "я" => "ya",
        " " => " ",
        "_" => "_"
    ];
    $result = '';
    for ($i = 0; $i < strlen($string); $i++) {
        $symbol = mb_substr($string, $i, 1);
        if ($symbol == '') {
            break;
        }
        $result .= $abc[$symbol];
    }
    return $result;
    }
    echo "абракадабра" . '<br>';
    echo translate("абракадабра");
    echo '<br>';
    echo "мой дядя самых честных правил" . '<br>';
    echo translate("мой дядя самых честных правил");
    echo '<br>' . "-------------Задание №5-------------" . '<br>';
    function noSpace($text) {
        $str = explode(' ', $text);
        $result = implode('_', $str);
        return $result;
    }
    $string = "Hello world I learning php";
    echo $string . '<br>';
    echo noSpace($string);
    echo '<br>' . "-------------Задание №6-------------" . '<br>';
?>
    <a href="index.php">Задание №6</a>