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

$first = 5;
$second = &$first;
$second = 3;
echo $first ,'<br>';
echo $second;

?>
</body>
</html>