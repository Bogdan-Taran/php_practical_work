<?php
/*
Создайте индексный массив чисел от 1 до 10.
Используя цикл, выведите только чётные элементы массива.
Создайте ассоциативный массив с информацией о трёх студентах: каждый элемент — массив с ключами name, age, grade. 
С помощью цикла выведите имена студентов, у которых оценка выше 4.0.
Добавьте в массив нового студента.
Найдите студента с именем «Иван» и выведите его возраст, используя функцию или перебор.
Удалите студента с низкой оценкой  и выведите обновлённый массив.
*/

$mass_index = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
for ($i = 0; $i < count($mass_index); $i++) {
    if ($i % 2 != 0) {
        echo $mass_index[$i];
    }
}

$mass_students = [
    'first' => [
        'name' => 'Адам',
        'age' => '17',
        'grade' => 4.5
    ],
    'second' => [
        'name' => 'Теодор',
        'age' => '19',
        'grade' => 5
    ],
    'third' => [
        'name' => 'Себастьян',
        'age' => '19',
        'grade' => 3
    ],
];
echo "<br>Оценка выше 4.0:";
foreach ($mass_students as $index => $val) {
    foreach ($val as $index_j => $val_j) {
        $name = $val['name'];
        if ($val['grade'] > 4.0) {
            echo "<br>$name";
            break;
        }

    }
}
//добавление нового студента
$new_student = [
    'fourth' => [
        'name' => 'Иван',
        'age' => '21',
        'grade' => 4.2
    ],
];
$new_mass_students = array_merge($mass_students, $new_student);

echo "<br>Возраст Ивана:<br>";
foreach ($new_mass_students as $index_2 => $val_2) {
    foreach ($val_2 as $index_k => $val_k) {
        $name_2 = $val_2['name'];
        if ($name_2 == 'Иван') {
            $age = $val_2['age'];
            echo "$age";
            break;
        }

    }
}

echo "<br>Оценочки:";
$lowest_grade_list = [
    'lowest_grade' => 5,
    'student' => '',
    'deleteKey' => ''
];
foreach ($new_mass_students as $index_3 => $val_3) {
    foreach ($val_3 as $index_l => $val_l) {
        $list_grade = $lowest_grade_list['lowest_grade'];
        $current_grade = $val_3['grade'];
        if ($current_grade < $list_grade) {
            $lowest_grade_list = [
                'lowest_grade' => $val_3['grade'],
                'student' => $val_3['name'],
                'deleteKey' => $index_3
            ];
        }
    }
}
$lowest_grade_name = $lowest_grade_list['student'];
$lowest_grade_value = $lowest_grade_list['lowest_grade'];
$lowest_grage_key = $lowest_grade_list['deleteKey'];
echo "<br>Самая нинзка оценка у: $lowest_grade_name ($lowest_grade_value) - удалим по ключу '$lowest_grage_key'";
$result_array = array_diff_key($new_mass_students, array($lowest_grage_key => true));

echo "<br>Обновлённый массив:";
foreach($result_array as $index_4 => $var_4){
    foreach($var_4 as $index_h => $var_h){
        $name = $var_4['name'];
        $age = $var_4['age'];
        $grade = $var_4['grade'];
        echo "<br>$name, $age лет, оценка $grade";
        break;
    }
}


?>