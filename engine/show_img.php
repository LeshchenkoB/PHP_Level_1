<?php
require "..".DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."config.php";

$sql = "select * from img"; // команда для SQL
$res = mysqli_query($connect, $sql); // выполняем запрос на сервере и кладем результат в переменную