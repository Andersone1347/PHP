# PHP

## 01 Основы PHP

### Урок 1. Первый скрипт Hello World на PHP.

**PHP** - это (рекурсивный акроним словосочетания **PHP**: **Hypertext** **Preprocessor**) - это распространённый язык программирования общего назначения с открытым исходным кодом. **PHP** специально сконструирован для веб-разработок и его код может внедряться непосредственно в **HTML**.

Устанавливаем **Open server**, запускаем его. В папке с доменами создал репозиторий **PHP** а в нём папку **lesson1** с файлом **index.php**.    

**echo** — Выводит одну или более строк

### Урок 2. Конец строки.
Сокращённый вывод(исключительно одну строку).
```
<title><?= "Новая страница"; ?></title>
```

Текущая дата.
```
<?php
echo date(DATE_RSS); 
?>
```

Выражения.
```
     <?php
    echo 9
    -
    2
    +
    6;
     ?>  // 13
```
**mt_rand** — генерирует случайное значение с помощью генератора случайных чисел **Mersenne Twister**.
Рассмотрим функцию в помень с **HTML** кодом которая случайно после обновления страницы будит выводить то синий то красный.
```
    <?php
    if(mt_rand(0,1)){
        ?>
        <div style="color: blue">Синий</div>
        <?php
    } else {
        ?>
        <div style="color: red">Красный</div>
<?php    
}
    ?>
```

### Урок 3. Комментарии.

**//**       **/* */**       **#** - Коментарии.

### Урок 4. Подключение файла.

Разница между **include** и **require** заключается в том, что при подключении файла **PHP** первая инструкция позволяет продолжить выполнения скрипта, если не найден файл, а **require** завершает его, выводя фатальную ошибку.

_index_
```
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

echo 'glav<br>';
include 'second.php';
echo 'glav<br>'

?>
</body>
</html>
```
_second_
```
<?php
echo 'double<br>';
?>
<h2>new</h2>
```
### Урок 5. Переменные и типы данных.

Переменные в **PHP** представлены знаком доллара с последующим именем переменной. Имя переменной чувствительно к регистру.

Имена переменных соответствуют тем же правилам, что и остальные наименования в **PHP**. Правильное имя переменной должно начинаться с буквы или символа подчёркивания и состоять из букв, цифр и символов подчёркивания в любом количестве. Это можно отобразить регулярным выражением: **\^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$**

![alt](lesson4/1.jpg)

Пример.
```
<?php

$ara = 9;

echo $ara-8;
echo $ara-6;
echo $ara-5;
echo $ara-2;

?> ///1347
```

### Урок 6. Целые и вещественные числа.

Система счисления:        
**DEC** - Десятичная. 
**BIN** - Двоичная.
**HEX** - Шестнадцатеричная.
**OCT** - Восьмеричная.

```
<?php
$a = 1234; // десятичное число
$a = 0123; // восьмеричное число (эквивалентно 83 в десятичной системе)
$a = 0o123; // восьмеричное число (начиная с PHP 8.1.0)
$a = 0x1A; // шестнадцатеричное число (эквивалентно 26 в десятичной системе)
$a = 0b11111111; // двоичное число (эквивалентно 255 в десятичной системе)
$a = 1_234_567; // десятичное число (с PHP 7.4.0)
?>
```

### Урок 7. Логический и строковый тип данных.

Как и на **markdown** можно экранировать с помощью \.
```
$var = 5;
echo "Hello world! - \"$var";  //Hello world! - $var
```
C помощью фигурных скобок можно вывести переменную с числом.
```
$var = 5;
echo "Hello world! {$var}1";  //Hello world! 51
```

### Урок 8. Базовые функции языка PHP.

 **isset** — Определяет, была ли установлена переменная значением, отличным от **null**.       
 Пример:
 ```
<?php

$user;
if(isset($user))
    echo "Переменная существует";
else
    echo "Переменная не существует";  
    
?>
//Переменная не существует
 ```
 ```
<?php

$user="12";
if(isset($user))
    echo "Переменная существует";
else
    echo "Переменная не существует";  
    
?>
//Переменная существует
 ```

 **empty** — Проверяет, пуста ли переменная.         
 Пример:    
 ```
<?php

$str = "";
if(empty($srt))
    echo "Строка пустая";
    else
    echo "Чтот есть";

?>
// Строка пустая
 ```
  ```
<?php

$str = "abc";
if(empty($srt))
    echo "Строка пустая";
    else
    echo "Чтот есть";

?>
// Чтот есть
 ```

 **gettype** — Возвращает тип переменной.

 Пример:
 ```
<?php

echo gettype(12); // integer
echo gettype("12");// string
echo gettype(true);// boolean
echo gettype(1.2);// double

?>
 ```

 **is_int** — Проверяет, является ли переменная целым числом.

```
<?php

if(is_int(25))
    echo "число";
    else
    echo "не число";
?> 
 // число
```

### Урок 9. Явное и неявное приведение типов.

Пример:       
Попробуем из строки вычесть число.
```
<?php

$str = '45.2addf';
$number = $str - 12;
echo $number;
// 33.2
?>
```
Ещё пример:    
```
<?php

$str = '0.0';
if($str) {
    echo 'true';    
} else {
    echo 'false';
}
// false
?>
```
```
<?php

$str = '0.01';
if($str) {
    echo 'true';    
} else {
    echo 'false';
}
// true
?>
```
**false** преобразуеться в пустую строку, а **true** в единицу. 
```
<?php
    echo false
// 
?>
```
```
<?php
    echo true
// 1
?>
```

![alt](/lesson9/1.png)
Примеры по картинке:
```
$float = 4.3;
$number = (int)$float;
echo $number;
// 4
```
Алгоритм для проверки чётное не чётное число.
```
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
```

### Урок 10. Округление чисел.

**is_numeric** — определяет, является ли переменная числом или числовой строкой.     
Пример из документации:   
```
<?php
$tests = array(
    "42",
    1337,
    0x539,
    02471,
    0b10100111001,
    1337e0,
    "0x539",
    "02471",
    "0b10100111001",
    "1337e0",
    "not numeric",
    array(),
    9.1,
    null,
    '',
);

foreach ($tests as $element) {
    if (is_numeric($element)) {
        echo var_export($element, true) . " is число", PHP_EOL . "<br>";
    } else {
        echo var_export($element, true) . " is NOT число", PHP_EOL . "<br>" ;
    }
}
?>
//
```
```
'42' is число
1337 is число
1337 is число
1337 is число
1337 is число
1337.0 is число
'0x539' is NOT число
'02471' is число
'0b10100111001' is NOT число
'1337e0' is число
'not число' is NOT число
array ( ) is NOT число
9.1 is число
NULL is NOT число
'' is NOT число
```

**round** — округляет значение с плавающей точкой.

Пример.
```
<?php

echo round(1.34731234, 3 );

?>
```

**ceil** — Округляет дробь в большую сторону.
```
<?php
echo ceil(4.3);    // 5
echo ceil(9.999);  // 10
echo ceil(-3.14);  // -3
?>
```
**floor** — Округляет дробь в меньшую сторону.
```
<?php
echo floor(4.3);   // 4
echo floor(9.999); // 9
echo floor(-3.14); // -4
?>
```

**decbin** — Переводит число из десятичной системы счисления в двоичную.    
**bindec** - Двоичное в десятичное.       
**decoct** - Переводит число из десятичной системы счисления в восьмеричную.       
**dechex** - Переводит число из десятичной системы счисления в шестнадцатеричную.       
**base_convert** - Преобразование числа между произвольными системами счисления.    
**printf** - Выводит отформатированную строку, используя форматы %b, %032b или %064b.      
**sprintf** используя форматы %b, %032b или %064b.

---
* 1.1. Вывести на одной строке числа 31, 18 и  79 с  одним пробелом между ними.        
* 1.2. Вывести на экран числа 50 и  10 одно под другим.

1.1.
```
<?php

echo  "31"," ", "18"," " ,  "79";

?>
```
1.2.
```
<?php

echo  '50' , '<br>'; 
echo  "10";

?>
```

## 02 Основы ООП

### Урок 1. Классы и объекты.

**unset** — Удаляет переменную.

В новом файле **point.php** создал класс **Point** с переменными **x** и **y**,  подключил к индексу и вывел через **echo** два объекта. Потом через **unset** удалил второй объект.
_index_
```
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

    $point1 = new Point();
    $point1->x = 13;
    $point1->y = 17;
    echo $point1->x , "<br>";

    $point2 = new Point();
    $point2->x = 12;
    $point2->y = 47;
    echo $point2->x , "<br>";

    unset($point2);
    echo $point2->x;
?>
</body>
</html>
```

_point_
```
<?php
class Point {
    public $x;
    public $y;
}

?>
```

### Урок 2. Области видимости переменных класса.

Свойства класса могут быть определены как **public**, **private** или **protected**. Свойства, объявленные без явного ключевого слова области видимости, определяются как общедоступные **(public)**.   

Объявление свойств и методов класса статическими позволяет обращаться к ним без создания экземпляра класса. К ним также можно получить доступ статически в созданном экземпляре объекта класса.
[Подробное описание](https://www.php.net/manual/ru/language.oop5.static.php)

Пример.
```
<?php

require 'point.php';

echo Point::$num;
 // 120
?>

<?php
class Point {
    public $x;
    public $y;
    public static $num = 120;
}

?>

```

Создадим переменную которая равна другой со значением, потом переопределим значение первой и выведем.
```
<?php

require 'point.php';

$first = $second = 2;
$first = 3
echo $first . '<br>' . $second;
// 3 значения разные.
   2 
?>
```
В объектах всё по другому **first** и **second** один и тот же объект.
```
<?php

require 'point.php';

$first = new Point;
$first->x=3;
$first->y=3;

$second = $first;
$second->x=5;
$second->y=5;

echo "{$second->x}, {$second->y}<br>";
echo "{$first->x}, {$first->y}";
?>// 5,5  
     5,5
```

Переменные можно делать ссылками с помощью **&**.
```
<?php

require 'point.php';

$first = 5;
$second = &$first;
$second = 3;
echo $first ,'<br>';
echo $second;
// 3
   3 
?>
```

### Урок 3. Расстояние между двумя точками.