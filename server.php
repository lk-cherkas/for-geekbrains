<?php
    $dir = scandir('img');
    $i = 2;
    $threePic = 1;
    $result = '<div class="picflex">';
    for ($i = 2; $i < count($dir); $i++) {
        $result .= "<a href=\"img/$dir[$i]\" target=\"_blank\">";
        $result .= "<img src=\"img/$dir[$i]\" alt=\"picture\" width=\"200\"></a>";
        if (($threePic % 3) == 0) {
            $result .= '</div><div class="picflex">';
        }
        $threePic++;
    }
    $result .= '</div>';
    echo $result;
?>