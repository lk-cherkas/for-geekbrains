<?php
    $dir = scandir('img');
    $i = 2;
    $threePic = 1;
    $result = '<div class="picflex">';
    for ($i = 2; $i < count($dir); $i++) {
        $result .= "<div><img class=\"modal\" src=\"img/$dir[$i]\" alt=\"picture\" width=\"200\">";
        $result .= '<div class="modal-window hidden">';
        $result .= "<img src=\"img/$dir[$i]\"><span></span>";
        $result .=  '<button class="close">&times;</button></div></div>';
        if (($threePic % 3) == 0) {
            $result .= '</div><div class="picflex">';
        }
        $threePic++;
    }
    $result .= '</div>';
    echo $result;
?>