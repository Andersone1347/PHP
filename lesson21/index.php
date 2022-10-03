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

// --------------------
// foo() никогда не будет вызвана, т.к. эти операторы являются шунтирующими (short-circuit)

$a = (false && foo());
$b = (true  || foo());
$c = (false and foo());
$d = (true  or  foo());

// --------------------
// "||" имеет больший приоритет, чем "or"

// Результат выражения (false || true) присваивается переменной $e
// Действует как: ($e = (false || true))
$e = false || true;

// Константа false присваивается $f, а затем значение true игнорируется
// Действует как: (($f = false) or true)
$f = false or true;

var_dump($e, $f);

// --------------------
// "&&" имеет больший приоритет, чем "and"

// Результат выражения (true && false) присваивается переменной $g
// Действует как: ($g = (true && false))
$g = true && false;

// Константа true присваивается $h, а затем значение false игнорируется
// Действует как: (($h = true) and false)
$h = true and false;

var_dump($g, $h);

//bool(true)
//bool(false)
//bool(false)
//bool(true)
?>
</body>
</html>