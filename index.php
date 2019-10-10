<?php
/*Задание №1
С помощью цикла while вывести все числа в любом промежутке, которые делятся на заданное число без остатка.*/
echo "Задание№1</br>";

$min = -20;
$max = 20;

$a = random_int($min, $max);
$abs = random_int($min, $max);
echo "В промежутке от $a до $max, без остатка на $abs деляться следующие числа:</br>";
while ($a <= $max) {
    if ($abs == 0) {
        break;
    } elseif ($a % $abs == 0) {
        echo "$a, ";
    }
    $a++;
}
/*Задание №2
2. С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:
0 – ноль.
1 – нечетное число.
2 – четное число.
3 – нечетное число.
…
10 – четное число.*/
echo "</br></br>Задание№2</br>";

const VALSTART = 0;
const VALEND = 10;
$a = VALSTART;

do{
    if ($a == 0){
        echo "$a - ноль </br>";
    }
    elseif ($a % 2 == 0){
        echo "$a - четное число </br>";
    }
    else{
        echo "$a - нечетное число </br>";
    }
    $a++;
}while($a<=VALEND);