<?php
echo "<br>Задание - 15  <br>";
function printStringReturnNumber(string $string): void
{
    echo $string . "<br>";
    return  ;
}

$my_num = printStringReturnNumber('String');
echo $my_num;
