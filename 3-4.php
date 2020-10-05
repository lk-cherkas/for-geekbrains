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
    echo '$a / $b = ' . $x4 . '<hr>';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Task 3-4</title>
</head>
<body>
    <form action="">
        <select name="arithmetic">
            <option value="1">+</option>
            <option value="2">-</option>
            <option value="3">*</option>
            <option value="4">/</option>
        </select>
        <input type="submit" value="Ok">
    </form>
</body>
</html>
<?php
function mathOperation($a, $b, $operation) {
    switch($operation) {
            case 1:
                echo sum($a, $b) . '<br>';
                break;
            case 2:
                echo diff($a, $b) . '<br>';
                break;
            case 3:
                echo mul($a, $b) . '<br>';
                break;
            case 4:
                echo div($a, $b) . '<br>';
                break;
        }
}
if (isset($_GET['arithmetic'])) {
        $operation = $_GET['arithmetic'];
        mathOperation($a, $b, $operation);
}
?>