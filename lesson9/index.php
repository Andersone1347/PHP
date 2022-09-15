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
  $num = 1347;
  $f = (float)($num/2) - (int)($num/2);
    if($f){
        echo 'нечет';
    } else {
        echo 'чёт';
    }
// нечёт
?>  
</body>
</html>