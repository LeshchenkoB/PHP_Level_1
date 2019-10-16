<?php
$directory = "../public/img/small/"; // путь к папке с картинками
//print_r($_FILES);
$pathPhoto = $directory.$_FILES['photo']['name']; // создаем путь, куда будут помещаться загружаемые картинки
if (move_uploaded_file($_FILES['photo']['tmp_name'],$pathPhoto)){
    echo "Файл ".$_FILES['photo']['name']." успешно загружен! </br></br>";
}
?>
<a href="../templates/index.php">Вернуться в галерею</a>
