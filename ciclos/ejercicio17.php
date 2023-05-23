
<?php
echo "Los valores de las piezas de dominó de forma ordenada son: <br>";

for ($i = 0; $i <= 6; $i++) {
    for ($j = $i; $j <= 6; $j++) {
        echo "<br/>". "$i-$j "; 
    }
}

?>