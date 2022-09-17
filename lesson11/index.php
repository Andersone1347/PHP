<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= "Новая страница"; ?></title>
</head>
<body>
<?php
    require 'point.php';
    $point1 = new Point;
    $point1->x = 13;
    $point1->y = 17;
    echo $point1->x'<br>';

    $point2 = new Point;
    $point2->x = 12;
    $point2->y = 47;
    echo $point2->x;
?>
</body>
</html>