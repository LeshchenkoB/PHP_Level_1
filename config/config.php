<?php

$server = "localhost";
$login = "root";
$pass = "";
$db = "lesson_5";

// Коннектимся к серверу и выбираем базу данных
$connect = mysqli_connect($server, $login, $pass, $db);