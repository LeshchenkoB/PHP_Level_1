<?php

function myScan(string $dir){
    $path = scandir($dir); // запишем все содержимое папки img/small
    if (!$path){
        return false;
    }
    unset($path[0], $path[1]);
    return $path;
}

$dir=myScan("../public/img/small/");
