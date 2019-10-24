<?php require "config.php"; ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lesson 6 task 1-2</title>
    <style>
        .widhtInput {
            width: 100px;
        }
    </style>
</head>
<body>
    <h3>Задание №1</h3>
    <form name="calc" action="" method="POST">
        <input class="widhtInput" type="number" name="number1" placeholder="первое число">
        <select name="operation">
            <option disabled>Выберите действие</option>
            <option value="+">Сложение</option>
            <option value="-">Вычитание</option>
            <option value="x">Умножение</option>
            <option value="/">Деление</option>
        </select>
        <input class="widhtInput" type="number" name="number2" placeholder="второе число">
        <p><input type="submit" value="Вычислить результат"></p>
    </form>
    <br>
    <b>Результат вычислений:</b>
    <?=$_POST['number1'] . " " . $_POST['operation'] . " " . $_POST['number2'] . " = " . $res?>
    <hr>
    <!-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
    <h3>Задание №2</h3>
    <form name="calc2" action="" method="post">
        <input class="widhtInput" type="number" name="number1_2" placeholder="первое число">
        <input class="widhtInput" name="number2_2" type="number" placeholder="второе число">
        <input type="submit" value="+" name="operation2[]">
        <input type="submit" value="-" name="operation2[]">
        <input type="submit" value="x" name="operation2[]">
        <input type="submit" value="/" name="operation2[]">
        </br>
    </form>
    <b>Результат вычислений:</b>
    <?=$_POST['number1_2'] . " " . $_POST['operation2'][0] . " " . $_POST['number2_2'] . " = " . $res2?>
    <br>
</body>
</html>

