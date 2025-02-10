<?php
/// 2.Генерация последовательности Фибоначчи до определенного числа.


$end = 25;
$i = 0;  // Начинаем с 0
$j = 1;  // Следующее число - 1
while ($i < $end) {  // Используем while, чтобы цикл продолжался до тех пор, пока $i < $end
    echo $i, ' ';
    $next = $i + $j;  // Суммируем два предыдущих числа
    $i = $j;           // Обновляем $i на предыдущее число
    $j = $next;        // Обновляем $j на следующее число
}
