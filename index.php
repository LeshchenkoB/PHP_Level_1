<?php
/*Задание №1
Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения.
Затем написать скрипт, который работает по следующему принципу:
-если $a и $b положительные, вывести их разность;
-если $а и $b отрицательные, вывести их произведение;
-если $а и $b разных знаков, вывести их сумму;
ноль можно считать положительным числом.*/
echo "Задание№1</br>";

$min = -20;
$max = 20;

$a = random_int($min, $max);
$b = random_int($min, $max);

if ($a >= 0 && $b >= 0)
    echo "Разность чисел $a и $b = " . ($a-$b);
elseif ($a <0 && $b <0)
    echo "Произведение чисел $a и $b = " . $a*$b;
else
    echo "Сумма чисел $a и $b = " . ($a+$b);

/*Задание №2
Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.*/
echo "</br></br>Задание№2</br>";

$min = 0;
$max = 15;
$a = random_int($min, $max);
switch ($a){
    case 0:
        echo "0 ";
    case 1:
        echo "1 ";
    case 2:
        echo "2 ";
    case 3:
        echo "3 ";
    case 4:
        echo "4 ";
    case 5:
        echo "5 ";
    case 6:
        echo "6 ";
    case 7:
        echo "7 ";
    case 8:
        echo "8 ";
    case 9:
        echo "9 ";
    case 10:
        echo "10 ";
    case 11:
        echo "11 ";
    case 12:
        echo "12 ";
    case 13:
        echo "13 ";
    case 14:
        echo "14 ";
    case 15:
        echo "15";
}

/*Задание№3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.*/
echo "</br></br>Задание№3</br>";

function summ($arg1, $arg2){
    echo "Сумма чисел $arg1 и $arg2 = " . ($arg1+$arg2) . "</br>";
}
function diff($arg1, $arg2){
    echo "Разность чисел $arg1 и $arg2 = " . ($arg1-$arg2) . "</br>";
}
function multi($arg1, $arg2){
    echo "Произведение чисел $arg1 и $arg2 = " . ($arg1*$arg2) . "</br>";
}
function div($arg1, $arg2){
    if ($arg2==0) {
        echo "На ноль делить нельзя";
    }
    else{
        echo "Частное от деления чисел $arg1 и $arg2 = " . ($arg1 / $arg2) . "</br>";
    }
}
summ ($a,$b);
diff($a,$b);
multi($a,$b);
div($a,$b);

/*Задание №4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),
где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции.
В зависимости от переданного значения операции выполнить одну из арифметических операций
(использовать функции из пункта 3) и вернуть полученное значение (использовать switch).*/
echo "</br>Задание№4</br>";

function mathOperation($arg1, $arg2, $operation=array("summ","diff","multi","div")){
    switch ($operation){
        case "summ":
            summ ($arg1,$arg2);
            break;
        case "diff":
            diff($arg1,$arg2);
            break;
        case "multi":
            multi($arg1,$arg2);
            break;
        case "div":
            div($arg1,$arg2);
            break;
        default:
            echo "Неверно указано название применяемой функции в качестве третьего аргумента. Доступны только \"summ\", \"diff\", \"multi\" и \"div\"";
    }
}

mathOperation($a,$b, "diff");