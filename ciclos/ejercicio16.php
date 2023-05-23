<?php
for ($i = 1; $i <= 10; $i++) {
    $factorial = 1;

    for ($j = $i; $j >= 1; $j--) {
        $factorial *= $j;
    }

    echo "El factorial de $i es: $factorial <br>";
}
?>



