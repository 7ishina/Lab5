<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Калькулятор</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operation = $_POST["operation"];

    // Проверка вводимых данных
    if (!is_numeric($num1) || !is_numeric($num2)) {
        echo "Пожалуйста, введите числа.";
    } else {
        switch ($operation) {
            case "add":
                $result = $num1 + $num2;
                break;
            case "subtract":
                $result = $num1 - $num2;
                break;
            case "multiply":
                $result = $num1 * $num2;
                break;
            case "divide":
                // Проверка деления на ноль
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "Ошибка: Деление на ноль.";
                    break;
                }
                break;
            default:
                echo "Неверная операция.";
                break;
        }

        // Вывод результата
        if (isset($result)) {
            echo "Результат: " . $result;
        }
    }
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <p>Введите первое число: <input type="text" name="num1"></p>
    <p>Введите второе число: <input type="text" name="num2"></p>
    <p>Выберите операцию:
        <select name="operation">
            <option value="add">Сложить</option>
            <option value="subtract">Вычесть</option>
            <option value="multiply">Умножить</option>
            <option value="divide">Разделить</option>
        </select>
    </p>
    <input type="submit" value="Выполнить операцию">
</form>

</body>
</html>
