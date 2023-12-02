<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Выбор операции с числами</title>
</head>
<body>

    <form action="" method="post">
        <label for="operation">Выберите операцию:</label>
        <select id="operation" name="operation">
            <option value="even">Четные</option>
            <option value="odd">Нечетные</option>
            <option value="prime">Простые</option>
            <option value="composite">Составные</option>
        </select>
        <br>
        <label for="number">Введите число N:</label>
        <input type="number" id="number" name="number" required>
        <br>
        <input type="submit" value="Выполнить">
    </form>

    <?php
        // Проверка формы после отправки
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Получаем выбранный тип операции и значение N
            $operation = isset($_POST['operation']) ? $_POST['operation'] : '';
            $n = isset($_POST['number']) ? intval($_POST['number']) : 0;

            // Функция для проверки простого числа
            function isPrime($num) {
                for ($i = 2; $i <= sqrt($num); $i++) {
                    if ($num % $i == 0) {
                        return false;
                    }
                }
                return true;
            }

            // Выводим числа в зависимости от выбранной операции
            echo "<h2>Результат:</h2>";

            switch ($operation) {
                case 'even':
                    for ($i = 2; $i <= $n; $i += 2) {
                        echo $i . "<br>";
                    }
                    break;

                case 'odd':
                    for ($i = 1; $i <= $n; $i += 2) {
                        echo $i . "<br>";
                    }
                    break;

                case 'prime':
                    for ($i = 2; $i <= $n; $i++) {
                        if (isPrime($i)) {
                            echo $i . "<br>";
                        }
                    }
                    break;

                case 'composite':
                    for ($i = 4; $i <= $n; $i++) {
                        if (!isPrime($i)) {
                            echo $i . "<br>";
                        }
                    }
                    break;

                default:
                    echo "Выберите операцию и введите число.";
                    break;
            }
        }
    ?>

</body>
</html>
