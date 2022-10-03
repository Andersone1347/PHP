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
/* пример 1 */

for ($i = 1; $i <= 10; $i++) {
    echo "пример 1 ($i)<br>";
}

/* пример 2 */

for ($i = 1; ; $i++) {
    if ($i > 10) {
        break;
    }
    echo "пример 2 ($i)<br>";
}

/* пример 3 */

$i = 1;
for (; ; ) {
    if ($i > 10) {
        break;
    }
    echo "пример 3 ($i)<br>";
    $i++;
}

/* пример 4 */

for ($i = 1, $j = 0; $i <= 10; $j += $i, print "пример 4 ($i)", $i++);
?>
</body>
</html>