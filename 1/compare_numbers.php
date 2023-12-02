<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем введенные числа из формы
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];

    // Проверяем, какое число больше
    if ($number1 > $number2) {
        echo "Большее число: $number1";
    } elseif ($number2 > $number1) {
        echo "Большее число: $number2";
    } else {
        echo "Оба числа равны";
    }
}
?>
