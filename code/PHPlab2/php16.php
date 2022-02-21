<?php
echo "<br>Задание - 16  <br>";
function increaseEnthusiasm(string $string): string
{
    $string .= '!';
    return $string;
}
echo increaseEnthusiasm('Something') , "<br>";

function repeatThreeTimes(string $string): string
{
    $string .= $string . $string;
    return $string;
}
echo repeatThreeTimes(increaseEnthusiasm(' 3 times Something')) , "<br>";

function cut(string $string, int $int = 10): string
{
    $str = "";
    for ($i = 0; $i < $int; $i++)
        $str .= $string[$i];
    return $str;
}
echo cut("One two three for five", 10) . "<br>";

function arrPrint($arr, $num)
{
    if ($num < sizeof($arr)) {
        echo $arr[$num] . " ";
        arrPrint($arr, $num + 1);
    }
}

$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
arrPrint($array, 0);

function arrSum($num)
{
    $sum = 0;
    while ($num > 0) {
        $sum += $num % 10;
        $num /= 10;
    }
    if ($sum > 9)
        return arrSum($sum);
    else
        return ($sum);
}
echo "<br>" . arrSum(12345) . "<br>";
