<?php
// Генерируем случайное число больше 1
$randomNumber = rand(2, 100);

// Переменная для хранения флага, указывающего на то, является ли число простым
$isPrime = true;

// Проверяем, является ли число простым
$i = 2;
while ($i <= $randomNumber / 2) {
    if ($randomNumber % $i == 0) {
        $isPrime = false;
        break;
    }
    $i++;
}

// Выводим результат
if ($isPrime && $randomNumber > 1) {
    echo "$randomNumber - простое число.";
} else {
    echo "$randomNumber - не простое число.";
}
?>