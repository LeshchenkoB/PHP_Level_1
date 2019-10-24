<?php
require "../engine/dir.php";
require "..".DIRECTORY_SEPARATOR."engine".DIRECTORY_SEPARATOR."count_view.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/main-style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>ДЗ к уроку №6 по PHP_level_1. (подробная информация о товаре из БД)</h1>
        </div>
        <div class="row">
            <div class="col-sm-8">
                <?php while ($data = mysqli_fetch_assoc($resImgAll)):?>
                <img class="link-img" src="<?=$directory.$data['src_big']?>" alt="photo"></a>
                <span class="count-view">Количество просмотров: <?=$data['count-view']?></span>
            </div>
            <div class="col-sm-4">
                <h3 class="item-caption"><?=$data['caption'] . " " . $data['id']?></h3>
                <p><?=$data['description'] . " " . $data['id']?></p><br><br>
                <span>Цена: <?=$data['price']?> у.е.</span>
                <?php endwhile;?>
            <input type="submit" value="Купить">
            </div>
        </div>

        <a href="../public/index.php">Вернуться на главную</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
</body>
</html>
