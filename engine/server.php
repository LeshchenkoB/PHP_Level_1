<?php

//print_r($_FILES);
$pathPhoto = "../public/img/small/".$_FILES['photo']['name'];
if (move_uploaded_file($_FILES['photo']['tmp_name'],$pathPhoto)){
    echo "Файл ".$_FILES['photo']['name']." успешно загружен! </br></br>";
}
?>
<a href="../templates/index.php">Вернуться в галерею</a>
