<?php
require "..".DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."config.php";
//print_r($_GET["id"]);
$sql = "UPDATE `img` SET `count-view`=`count-view`+1 WHERE id=".$_GET['id']; // команда для SQL для изменения количества просмотров изображений
$resCountView = mysqli_query($connect, $sql); // отправляем запрос к БД

if ($resCountView){
    echo ("Ваш голос посчитан!<br>");
}