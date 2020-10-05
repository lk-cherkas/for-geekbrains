<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Task 2</title>
</head>
<body>
    <form action="">
        <select name="number" id="num">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
        </select>
        <input type="submit" value="Ok">
    </form>
</body>
</html>
<?php
    if (isset($_GET['number'])) {
        $a = $_GET['number'];
        switch($a) {
            case 1:
                echo 1 . ' ';
            case 2:
                echo 2 . ' ';
            case 3:
                echo 3 . ' ';
            case 4:
                echo 4 . ' ';
            case 5:
                echo 5 . ' ';
            case 6:
                echo 6 . ' ';
            case 7:
                echo 7 . ' ';
            case 8:
                echo 8 . ' ';
            case 9:
                echo 9 . ' ';
            case 10:
                echo 10 . ' ';
            case 11:
                echo 11 . ' ';
            case 12:
                echo 12 . ' ';
            case 13:
                echo 13 . ' ';
            case 14:
                echo 14 . ' ';
            case 15:
                echo 15 . ' ';
                break;
            default:
                echo 'What?';
        }
    }
?>