<?php
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
?>