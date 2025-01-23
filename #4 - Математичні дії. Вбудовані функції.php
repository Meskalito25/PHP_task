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
$x = 10;
$y = 20;

echo $x + $y . '<br>';
echo $x - $y . '<br>';
echo $x * $y . '<br>';
echo $x / $y . '<br>';
echo $x % $y . '<br>';

$x += 10;
$y -= 5;
$x++;
$x--;
echo $x . '<br>';

echo M_PI . '<br>';
echo M_E . '<br>';

echo abs (-22) . '<br>';
echo ceil (0.33) . '<br>';
echo round (0.89, 1) . '<br>'; // ceil, floor, round
$rand = mt_rand(1,100);
echo $rand;
echo max(3, 5, 7, 0, 46, 7); // max
echo min(3, 5, 7, 0, 46, 7); // min
?>
</body>
</html>