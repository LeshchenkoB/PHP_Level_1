<?php
require "..".DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."config.php";
//print_r($_GET["id"]);
$sqlUpdate = "UPDATE `img` SET `count-view`=`count-view`+1 WHERE id=".$_GET['id']; // команда для SQL для изменения количества просмотров изображений
$sqlSelect = "SELECT * FROM `img` WHERE id=".$_GET['id']; // команда для базы данных для выбора всей информации о большой картинке
$resCountView = mysqli_query($connect, $sqlUpdate); // отправляем запрос к БД для изменения количества просмотров
$resImgAll = mysqli_query($connect, $sqlSelect); // отправляем запрос к БД для выбора информации по картинке
