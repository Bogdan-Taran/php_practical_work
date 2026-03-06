<?php
if(isset($_POST['submit'])){
    header('Location: constants.php');
    exit();
}
//Создаёт переменные: целое число, число с плавающей точкой, строку, булево значение и null.
// Выводит тип каждой переменной.
// Выполняет неявное преобразование: сложите строку, содержащую число, с целым числом и выведите результат.
// Явно преобразуйте число с плавающей точкой в целое и выведите его.
// Проверьте, существует ли переменная, которой не присвоено. Затем присвойте ей пустую строку и проверьте empty().
// Уничтожьте одну из переменных и попытайтесь её вывести – обработайте ошибку, проверив существование перед выводом.

// определение
$integer_value = 1;
$float_value = 13.13;
$bool_value = false;
$string_value = 'this is string';
$null_value = null;
$str_num = '13';
$some_var;

// вывод типов данных
echo 'Типы переменных по порядку: <br/>';
echo gettype($integer_value);
echo '<br/>';
echo gettype($float_value);
echo '<br/>';
echo gettype($bool_value);
echo '<br/>';
echo gettype($string_value);
echo '<br/>';
echo gettype($null_value);

//неявное преобразование
echo '<br/> Неявное преобразование: ';
$result = 32 + $str_num;
echo $result;

//явное преобразование
$integer_from_double = (int)$float_value;
echo '<br/> Явное преобразование:';
echo $integer_from_double;
echo gettype($integer_from_double);

//проверка существования
if(isset($some_var)){
    echo "<br>Переменная $some_var существует <br>";
}else{
    $some_var = '';
}
if(empty($some_var)){
    echo "<br>Переменная ($some_var) пустая";
}else{
    echo "<br>Переменная ($some_var) не пустая";
}

//уничтожение
unset($string_value);
if(isset($string_value)){
    echo "<br>Переменная ($string_value)";
} else{
    echo '<br>Переменная не существует';
}

?>

<p>Перейти к следующему заданию</p>
<form action="constants.php" method="post">
    <input type="submit" name="submit" id="submit" value="Перейти">
</form>