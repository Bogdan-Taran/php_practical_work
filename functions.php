<?php

//1
function calculateSum(...$numbers)
{
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}
echo calculateSum(1, 36455, 123123);

//2
function average($mas)
{
    $average = 0;
    foreach ($mas as $m) {
        $average += $m;
    }
    $average /= count($mas);
    return $average;
}
$mas_numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
echo "<br>";
echo average($mas_numbers);

//3
function changeValue(&$num)
{
    $num = $num + 10;
    return $num;
}

$chislo = 13;
echo "<br>Переменная до функции: $chislo";
changeValue($chislo);
echo "<br>Переменная после функции: $chislo";

//4
function getInfo(string $name, $age="Не указано")
{
    echo "<br>Имя: $name, возраст: $age";
}
getInfo('Абдудалас');
getInfo('Чапа', 21);
?>

<form method="post" action=""
