<?php

$directory = "../public/img/small/"; // путь к папке с картинками
function myScan($dir){
    $path = scandir($dir); // запишем все содержимое папки img/small
    if (!$path){           // если указанный путь не является каталогом или его нет, то scandir выведет false
        return false;
    }
    unset($path[0], $path[1]); // удалим из массива служебные элементы "." и "..", которые функция scandir всегда записывает в первые два элемента массива
    return $path;
}

$dir=myScan($directory); // массив файлов в папке
