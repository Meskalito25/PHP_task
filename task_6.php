<?php

// 6.Перевірка на унікальність символів у рядку - треба написати скрипт,
// який перевіряє чи всі символи в рядку є унікальними(не мають повторень)

function hasUniqueChars($string) {
    $charCount = count_chars($string, 1);

    foreach ($charCount as $Count) {
        if ($Count > 1) {
            return false;
        }
    }
    return true;
}

$string = "12345tyqasdfghjk";
if (hasUniqueChars($string)) {
    echo "Все символы уникальны.";
} else {
    echo "Есть повторяющиеся символы.";
}
