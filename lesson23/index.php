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
$n = 90;
switch(true) {
    case ($n > 0 && $n <= 10):
        echo "$n m 10 and b 0";
        break;
        case ($n > 10 && $n <= 100):
            echo "$n m 100 and b 10";
            break;
            case ($n > 0 && $n <= 10):
                echo "$n m 1000 and b 100";
                break;
                default: 
                    echo "$n b 1000 or m 0";
                    break;                          
}
?>
</body>
</html>