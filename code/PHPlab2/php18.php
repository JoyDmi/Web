<?php
echo "<br>Задание - 18  <br>";

$a = rand(1, 10);
$b = rand(1, 10);

function sumMoreThan10($a, $b): bool
{
    $sum = $a + $b;
    if ($sum > 10)
        return true;
    else
        return false;
}

echo "<br>$a + $b > 10";
echo sumMoreThan10($a, $b) ? " true" : " false";

function isEqual($a, $b): bool
{
    if ($a == $b)
        return true;
    else return false;
}

echo "<br>$a = $b";
echo isEqual($a, $b) ? " true!" : " false!";

$test = rand(0, 3);
echo "<br>";
echo ($test == 0) ? "Верно" : "";

$age = rand(1, 200);

function getSumOfDigits($num): int
{
    $sum = 0;
    while ($num > 0) {
        $sum += $num % 10;
        $num /= 10;
    }
    return $sum;
}

echo ($age < 10 or $age > 99) ? "<br>Число $age <10 или >99"
    : ((getSumOfDigits($age) < 10) ? "<br>Сумма цифр $age однозначна" : "<br>Сумма цифр $age двузначна");
$arr12 = array();
echo "<br>";
for ($i = 0; $i < rand(2, 5); $i++) {
    $arr12[] = rand(0, 30);
    echo $arr12[$i] . " ";
}
echo (count($arr12) == 3) ? "<br>SUM " . array_sum($arr12) : "<br>!=3";