<?php
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

