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

$homepage = file_get_contents('text.txt');
$homepage .= "\nЕщё одна строчка";
$date = date("Y-m-d");
file_put_contents($date.'.txt',$homepage);
?>
</body>
</html>