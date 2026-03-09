<?php
if(isset($_POST['submit'])){
    header('Location: test_include.php');
    exit();
}
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
function getInfo(string $name, $age = "Не указано"): void
{
    echo "<br>Имя: $name, возраст: $age";
}

getInfo('Абдудалас');
getInfo('Чапа', 21);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="test_include.php">
    <input type="submit" value="Дальше" name="submit">
</form>
</body>
</html>

