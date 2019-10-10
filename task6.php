<?php

$myArray = [
    1 => ["Декабрь", 'Январь', 'Февраль'],
    2 => [1 => 'Март', 'Апрель', 'Май'],
    3 => [1 => 'Июнь', 'Июль', "Август"],
    4 => [1 => "Сентябрь", "Октябрь", "Ноябрь"]
];
function seasons (int $n) {
    switch ($n) {
      case 1: return 'Зима';
      case 2: return 'Весна';
      case 3: return 'Лето';
      case 4: return 'Осень';
    }
}
?>

<!doctype html>
<html lang="en">
<head>

   <title>Task6</title>
</head>
<body>
<h3>Времена года:</h3>

<ul>
    <?php foreach ($myArray as $key_season => $season): ?>
    <li><?=seasons($key_season)?>
        <?php if (is_array($season)):?>
        <ul>
            <?php foreach ($season as $key => $month):?>
            <li><?=$month?></li>
            <?php endforeach;?>
        </ul>
        <?php endif;?>
    </li>
    <?php endforeach;?>
</ul>

<a href="index.php">Вернуться на главную страницу</a>
</body>
</html>
