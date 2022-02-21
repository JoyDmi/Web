<?php
echo "<br>Задание - 14  <br>";
$a = 10;
$b = 3;
$c = $a % $b;
echo "\nremainder of the division = $c <br>";
if ($c != 0)
    echo "Делится = $c<br>";
else
    echo "\nДелится с остатком = $c<br>";

//work with sqrt and pow
$st = pow(2, 10);
$sqrt = sqrt(245);
echo "\n $st and $sqrt <br>";

$arr = array(4, 2, 5, 19, 13, 0, 10);
$value = 0;
foreach ($arr as $val1)
{
    $value += pow ($val1, 2);
}
$reslt = sqrt($value);
echo "$reslt <br>";
unset($value);

$tsn = sqrt(379);
echo '?, = '.round($tsn),"<br>";
echo '?,. = '.round($tsn, 1),"<br>";
echo '?,.. =  '.round($tsn, 2),"<br>";
$array = [
    'ceil' => ceil(sqrt(587)),
    'floor' => floor(sqrt(587))
];

echo  min (array (4, -2, 5, 19, -130, 0, 10)) ,"\n",max (array (4, -2, 5, 19, -130, 0, 10)), "<br>";
unset($min, $max);

echo (rand(0, 100)), "<br>";

for ($i = 0; $i < 10; $i++)
    $arr1[$i] = rand(0, 100);
echo print_r ($arr1), "<br>";

//Work with abs

$aa = rand(-10, 10);
$bb = rand(-5, 10);
$cc = $aa - $bb;
echo "Разность равна = ",$cc, "<br>";
echo "Модуль равен = " ,abs($cc) , "\n", '<br>';

$cucumbers = array (1, 2, -1, -2, 3, -3);
function make_abs(&$item,$key)
{ // use with reference
    $item = abs($item);
}

array_walk_recursive($cucumbers, 'make_abs');
print_r($cucumbers);
echo "<br>";


$chislo = rand(1, 200);
for ($n = 1; $n<=$chislo; $n++)

    if ($chislo % $n == 0 )
        echo "$chislo делится на $n<br>";
?>
<?php
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$i = 0;
foreach ($arr as $valen){
    $i++;
    $sum += $valen;
    if ($sum > 10) {
        break;
    }
}
echo "Первые $i элементов", '<br>';
?>
