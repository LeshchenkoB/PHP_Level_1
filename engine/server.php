<?php
require "dir.php";
require "../config/config.php";

function sqlQueryIntoImg($path_big, $path_small,$connect){ // функция создает запров к БД (table = img) и отпраляет его
    $sql = "insert into img(src_big, src_small) values ('$path_big', '$path_small')"; // команда для SQL для добавления данных
    mysqli_query($connect, $sql); // отправляем запрос к БД
}


//print_r($_FILES)."</br>";
if (in_array($_FILES['photo']['type'], array("image/png", "image/jpeg","image/pjpeg"))){ // если загружаемый файл картинка
    $path_big = $directoryBig_db.$_FILES['photo']['name']; // создаем путь, для больших картинок
    $path_small = $directorySmall_db.$_FILES['photo']['name']; // создаем путь, для малельних картинкок

//echo $path_big."</br>";
//echo $path_small."</br>";
//echo $sql."</br>";
    sqlQueryIntoImg($path_big, $path_small, $connect);

//    if (move_uploaded_file($_FILES['photo']['tmp_name'],$pathPhoto)){ // перемещаем загруженный файл в новое место
//        echo "Файл ".$_FILES['photo']['name']." успешно загружен! </br></br>";
//    }
}
else echo "Файл ".$_FILES['photo']['name']." не является картинкой! </br></br>";

?>
<a href="../templates/index.php">Вернуться в галерею</a>
