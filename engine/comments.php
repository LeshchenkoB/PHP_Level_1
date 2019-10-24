<?php
require "..".DIRECTORY_SEPARATOR."config".DIRECTORY_SEPARATOR."config.php";
$comment = trim(strip_tags($_POST['comment']));

if ($_POST['comment']<>""){
    $sql = "INSERT INTO comments (comment) VALUES ('$comment')";
    $resComments = mysqli_query($connect, $sql); // отправляем запрос к БД, чтобы добавить комментарии в БД
}
if ($resComments){
    echo ("Ваш отзыв успешно добавлен!<br>");
}
else echo ("Отзыв не отправлен, пропробуйте снова!<br>");

$sql = "SELECT * FROM comments";
$commentsIn_bd = mysqli_query($connect, $sql); // отправляем запрос к БД, чтобы получить все комментарии

?>

<a href="../public/index.php">Вернуться на главную страницу</a>