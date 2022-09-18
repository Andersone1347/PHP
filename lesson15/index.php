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

class cc {
    const NAME = "str";
}
if(defined('cc::name')) {
    echo "Константа определена";
} else {
   echo 'Константа не определена';
}
// Константа не определена
?>
</body>
</html>