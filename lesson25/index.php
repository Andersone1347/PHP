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

$i = 0;
while($i <= 5) {
    $i++;
    if($i < 4) continue;
    if($i > 5) break;
    echo "$i<br>";
}
//4
5
?>


</body>
</html>