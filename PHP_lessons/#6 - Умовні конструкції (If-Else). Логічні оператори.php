<?php

$a = 6;
$str = "Hello!!";
$hasDog = false;
if($str == "Some" && !$hasDog) {
    echo 'Yes';
    if($a > 2)
        echo 'Num is bigger then 2';
} else if($str == "Hello")
    echo 'String is hello!';
else if($a == 6)
    echo 'a is 6';
else
    echo 'Else';
