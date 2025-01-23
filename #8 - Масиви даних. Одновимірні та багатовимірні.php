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
<?php

$nums = array(4, 7, 4, 8, 9, 0, 10);
$nums[0] = 45;
echo $nums[0]. '<br>';

$arr = [0, 0.45, "Hello", true, 5, [0, 7]];
$arr[1] = "World";
echo $arr[1]. '<br>';

$user = ["age" => 40, "name" => "Dmytro","hobby" => "Guitar"];
echo $user["name"]. '<br>';

$matrix = [
    [3, 8, 9, 10],
    ["hello", true, [0, 6, 8]]
];
echo $matrix[1][2][1]. '<br>';

?>
</body>
</html>
    