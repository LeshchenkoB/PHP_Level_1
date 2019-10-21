<?php
require "dir.php";
require "..".DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."config.php";

function sqlQueryIntoImg($path_big, $path_small,$connect){ // функция создает запрос к БД (table = img) и отправляет его
    $sql = "insert into img(src_big, src_small) values ('$path_big', '$path_small')"; // команда для SQL для добавления данных о путях к папке
    mysqli_query($connect, $sql); // отправляем запрос к БД
}

function imageResize(){
    $uploadedfile = $_FILES['photo']['tmp_name']; // имя файла
    $src=imagecreatefromjpeg($uploadedfile); // открываем исходное изображение
    $size = getimagesize($uploadedfile); // вернем размер файла в пикселях
    $widht = $size[0]; // запишем разрмеры ширины исходной картинки 1024
    $height = $size[1]; // запишем размеры высоты исходной картинки 642
    $k=$widht/220; // коэф. сжатия картинки. 220 - это ширина, к которой надо прийти
    $new_w=$widht/$k; // новая ширина
    $new_h=$height/$k;// новая высота
    $tmp = imagecreatetruecolor($new_w,$new_h); // создаем новое изображение с новыми размерами
    $filename = 'path/to/image/' . $_FILES['photo']['name']; //путь и имя файл нового изображения
    imagecopyresampled($tmp, $src, 0, 0, 0, 0,$new_w,$new_h,$widht, $height); // копируем большую картинку в новую со сжатием
    imagejpeg($tmp, $filename,100); // сохраняем уменьшеное изображение на диск
}

//print_r($_FILES)."</br>";
if (in_array($_FILES['photo']['type'], array("image/png", "image/jpeg","image/pjpeg"))){ // если загружаемый файл картинка
    $path_big = $directoryBig_db.$_FILES['photo']['name']; // создаем путь, для больших картинок
    $path_small = $directorySmall_db.$_FILES['photo']['name']; // создаем путь, для малельних картинкок
    $pathPhoto_big = $directoryBig.$_FILES['photo']['name']; // путь для складирования загружаемых больших файлов
    $pathPhoto_small = $directorySmall.$_FILES['photo']['name']; // путь для складирования загружаемых маленьких файлов

    sqlQueryIntoImg($path_big, $path_small, $connect); // отправляем запрос к БД и записываем в нее путь к картинкам

    if (copy($_FILES['photo']['tmp_name'],$pathPhoto_big)){ // копируем загруженный файл в новое место
        echo "Файл ".$_FILES['photo']['name']." (большой) успешно загружен! </br></br>";
    }
    if (move_uploaded_file($_FILES['photo']['tmp_name'],$pathPhoto_small)){ // перемещаем загруженный файл в новое место
        echo "Файл ".$_FILES['photo']['name']." (маленький) успешно загружен! </br></br>";
    }
}
else echo "Файл ".$_FILES['photo']['name']." не является картинкой! </br></br>";

?>
<a href="../templates/index.php">Вернуться в галерею</a>
