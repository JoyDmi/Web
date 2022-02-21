<?php
echo "<br>Задание - 20  <br>";
;
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
echo array_sum($array) / sizeof($array) . "<br>";

$start = 1;
$stop = 100;
echo ($start + $stop) / 2 * ($stop - $start + 1) . "<br>";

$sqrt = [9, 81, 100, 25, 36, 49, 225];
print_r(array_map('sqrt', $sqrt));

$keys = range('a', 'z');
$values = range(1, 26);
$arr3 = array_combine($keys, $values);
echo "<br>";
print_r($arr3);
echo "<br>";

$numbers = '1234567890';
$arr4 = str_split($numbers, 2);
$res = array_sum($arr4);
echo $res;