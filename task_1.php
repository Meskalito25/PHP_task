<?php
// 1.Определение простоты числа
function is_prime($n) {
    if ($n <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {    //Цикл от 2 до квадратного корня из числа
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

echo is_prime(7) ? 'Yes' : 'No';  // Выведет 'Yes'
echo is_prime(10) ? 'Yes' : 'No'; // Выведет 'No'
