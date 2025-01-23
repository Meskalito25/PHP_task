<?php
/*for ($i = 1; $i <=100; $i++) {
    if ($i % 2 == 0) {
        echo $i . " - это число четное<br>";
  } else {
         echo $i . " - это число нечетное<br>";
    }
}*/
?>



<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo "<span style='color: red;'>$i - четное</span><br>";
    } else {
        echo "$i - нечетное<br>";
    }
}
?>
