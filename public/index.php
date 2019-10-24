<?php require ".." . DIRECTORY_SEPARATOR . "engine" . DIRECTORY_SEPARATOR . "dir.php" ?>
<?php require ".." . DIRECTORY_SEPARATOR . "engine" . DIRECTORY_SEPARATOR . "show_img.php" ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main-style.css">
    <title>Lesson №6</title>
</head>
<body>
<div class="container">
    <div class="header">
        <h1>ДЗ к уроку №6 по PHP_level_1. (загружаемая галерея из БД)</h1>
    </div>
    <div class="row">
        <div class="col-sm-8">
            <div class="row">
                <?php while ($data = mysqli_fetch_assoc($res)):?>
                    <div class="col-sm-4">
                        <a class="link" href="<?=$directory.$data['src_big']?>" target="_blank"><img class="link-img" src="<?=$directory.$data['src_small']?>" alt="photo" data-toggle="modal" data-target="#exampleModalCenter"></a>
                    </div>
                <?php endwhile;?>
            </div>
        </div>
        <div class="col-sm-4">
            <form action="../engine/server.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleFormControlFile1">Форма загрузки изображений</label>
                    <input type="file" name="photo" multiple class="form-control-file" id="exampleFormControlFile1"><br>
                    <input type="submit">
                </div>
            </form>
        </div>
        <!-- Modal -->
<!--        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">-->
<!--            <div class="modal-dialog modal-dialog-centered" role="document">-->
<!--                <div class="modal-content">-->
<!--                    <div class="modal-header">-->
<!--                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>-->
<!--                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--                            <span aria-hidden="true">&times;</span>-->
<!--                        </button>-->
<!--                    </div>-->
<!--                    <div class="modal-body">-->
<!--                        <img class="img-modal" src="" alt="photo" width="100%">-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

        <!-- Modal end-->
    </div>
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
