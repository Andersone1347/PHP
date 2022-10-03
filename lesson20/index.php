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

$char = 'c#';
if ($char == 'php') {
    ?>
    <h1>Язык пхп</h1>

    <?php
} elseif ($char == 'js') {
?>
<h1>js</h1>
<?php
} elseif ($char == 'c#') {
    ?>
    <h1>c#</h1>
<?php
} else {
    ?>
    <h1>no</h1>
<?php
}
//c#
?>
</body>
</html>