<?php
echo "<br>Задание - 1  <br>";
$very_bad_unclear_name = "15 chicken wings";

$order = $very_bad_unclear_name . "in KFC cafe";
//link
//to the variable $very_bad_unclear_name

echo "\nYour order is: $very_bad_unclear_name. <br>";

echo "<br>Задание - 2  <br>";
//variable var
$number1 = 6;
echo "$number1 \n";
$number2 = 9;
echo "$number2 \n";

$dotnum = 1.1;
echo "$dotnum \n";

$w = 5;
$s = 7;
$d = $w + $s;
    echo "$d\n";
    // just addition a+b=c

$last_month = 1187.23;
$this_month = 1089.98;
$diff = $last_month - $this_month;
echo "The difference is = $diff<br>";
/// just subtraction a-b=c

echo "<br>Задание - 11  <br>";
$num_languages = 4;
$months = 11;
$days = 16;
$days_in_study = $months * $days;
$day_per_language = $days_in_study / $num_languages;
 echo "Days per language = $day_per_language<br>";
 // m * d / n_m

echo "<br>Задание - 12  <br>";
echo 8 ** 2 . "<br>";

echo "<br>Задание - 13  <br>";
$answer =  ($my_num = 10);
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo  "$answer<br>";

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

<?php
echo "<br>Задание - 15  <br>";
function printStringReturnNumber(string $string): void
{
    echo $string . "<br>";
    return  ;
}

$my_num = printStringReturnNumber('String');
echo $my_num;

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

echo "<br>Задание - 17  <br>";
$xString = "";
$arr7 = array();
for ($i = 1; $i < 10; $i++) {
    $xString = $xString . "x";
    array_push($arr7, $xString);
}
print_r($arr7);

function arrayFill($filler, $num)
{
    $retArr = array();
    for ($i = 0; $i < $num; $i++) {
        array_push($retArr, $filler);
    }
    return $retArr;
}

echo "<br>";
print_r(arrayFill("x", rand(1, 10)));
$arr8 = array(
    array(1, 2, 3),
    array(4, 5),
    array(6)
);

    function array_multisum(array $arr)
    {
        $sum = array_sum($arr);
        foreach ($arr as $child) {
            if (is_array($child))
                $sum += array_multisum($child);
        }
        return $sum;
    }

    echo "<br>" . array_multisum($arr8) . "<br>";
 $arr9 = array();
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            $arr9[$i][$j] = $i + $j + 1 + 2 * $i;
        }
    }

    print_r($arr9);
    $arr10 = array(2, 5, 3, 9);
    echo "<br>" . $result = $arr10[0] * $arr10[1] + $arr10[2] * $arr10[3] . "<br>";
    foreach (array(
            "name" => "Dmitry",
            "surname" => "Gavrilov",
            "patronymic" => "Ivanovich"
        ) as $str)
        echo $str . " ";
    echo "<br>";

    $date = array(
        "year" => 2022,
        "month" => 2,
        "day" => 17
    );
    foreach ($date as $k => $str) {
        echo $str;
        if ($k != "day")
            echo "-";
    }
    $arr11 = array('a', 'b', 'c', 'd', 'e');
    echo "<br>" . count($arr11);
    echo "<br>" . $arr11[count($arr11) - 1] . " " . $arr11[count($arr11) - 2] . "<br>";

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


echo "<br>Задание - 19  <br>";


$xString = "";

for ($i = 0; $i < 20; $i++) {
    echo "$xString<br>";
    $xString .= "x";
}

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