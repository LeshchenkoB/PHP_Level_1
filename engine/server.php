<?php
$directory = "../public/img/small/"; // путь к папке с картинками
//print_r($_FILES);
if (in_array($_FILES['photo']['type'], array("image/png", "image/jpeg","image/pjpeg"))){ // если загружаемый файл картинка
    $pathPhoto = $directory.$_FILES['photo']['name']; // создаем путь, куда будут помещаться загружаемые картинки
    if (move_uploaded_file($_FILES['photo']['tmp_name'],$pathPhoto)){ // перемещаем загруженный файл в новое место
        echo "Файл ".$_FILES['photo']['name']." успешно загружен! </br></br>";
    }
}
else echo "Файл ".$_FILES['photo']['name']." не является картинкой! </br></br>";

?>
<a href="../templates/index.php">Вернуться в галерею</a>
