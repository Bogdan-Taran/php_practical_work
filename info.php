<?php
if (isset($_POST['submit'])) {
    header("Location: types.php");
    exit();
}
date_default_timezone_set('Asia/Tomsk');
$current_date = date('d.m.y G:i:s');    // текущая дата и время
$current_filename = __FILE__;   // название файла (и его полный путь)
$php_version = PHP_VERSION;     // версия PHP
$os_name = PHP_OS_FAMILY;       // название ОС

echo "Текущая дата и время: $current_date <br/>";
echo "Название текущего файла: $current_filename <br/>";
echo "Текущая строка: ";
echo __LINE__;
echo "<br/> Версия PHP: $php_version <br/>";
echo "OS: $os_name <br/>";




/*
 В тегах <?php?> мы прописываем код, который будет встраиваться в показываемую html-страницу.
 В операторе if делаю проверку на нажатие кнопки чтобы редиректиться на другую страницу.
 В начале скрипта локализую время - чтобы показывало Томское
 Дальше идёт определение переменных, в которых хранятся значения для будущего вывода.
 И соответственно сам вывод через echo.
 После скрипта просто приколюшка с перенаправлением на следующую страницу со скриптом
*/
?>

<p>Тыкните здесь чтобы перейти к следующему заданию</p>
<form method="post" action="types.php">
    <input type="submit" value="submit_value" id="submit-btn" name="submit_name">
</form>