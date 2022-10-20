<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= "Новая страница"; ?></title>
</head>
<body>
<!-- <?php
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
?> -->

<!-- <?php
$x = 1;
$y = ((17+$x)**2) - ((6+$x) + 13);
echo $y;
?>
// 304 -->
<!-- <?php
$x= 5;
$y= 10;
$j = ($x+$y)/2 ;
echo $j;
?> -->

<!-- <?php
$x=5;
$y=10;
$j=($x*$y)**2;
echo $j;
?> -->

<!-- <?php
$m = 5;
$v = 10;
$p = $m/$v;
echo  $p;
//0.5
?> -->

<!-- <?php

$a = 5;
$b = 10;
$q = $a+$b;
$w = $a-$b;
$e = $a*$b;
$r = $a/$b;
echo $q."<br>";
echo $w."<br>";
echo $e."<br>";
echo $r."<br>";
// 
// 15
// -5
// 50
// 0.5
?> -->

<!-- <?php
$a = 5;
$b = 10;
if($a>$b)
echo $a." больше"."<br>";
else
echo $b." больше"."<br>";

if($a<$b)
echo $a." меньше"."<br>";
else
echo $b." меньше"."<br>";


?> -->
<?php
$k=5;
$izkvm= floor($k*(1000/3600));
$m=10;
if ($izkvm>$m){
echo $izkvm;
}
else{
    echo $m;
}

?>
//10
</body>
</html>