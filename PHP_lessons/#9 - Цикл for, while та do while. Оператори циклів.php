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
// Цикл for
for($i = 100; $i >= 10; $i -= 10)
  echo "El: $i<br>";


// Цикл while
$i = 0;
while($i < 10) {
echo "El: $i<br>";
$i++;
}

$i = 0;
$isHasCar = true;
while($isHasCar) {
 $isHasCar = false;
 echo "El: $i<br>";
$i++;
}

// Цикл do while
$i = 100;
do {
   echo "El: $i<br>";
  $i--;
 } while($i > 10);

// Оператори в циклах
 for($el = 100; $el > 10; $el /=2) {
 if($el <= 15)
     break;
 if($el % 2 ==0)
      continue;
   echo "El: $el<br>";
 }

// Робота з масивами
$list = [4, 7, 9, "Hello", 5.6, 32];
for($i = 0; $i < count($list); $i++)
echo "Element $i: $list[$i]<br>";


$list = ["age" => 45, "name" => "Bob", "hobby" => "Football"];
$list2 = [8, 7, 3, 7];
foreach ($list2 as $key => $item) {
  echo "Key: $key, Item: $item<Br>";
  }
?>
</body>
</html>