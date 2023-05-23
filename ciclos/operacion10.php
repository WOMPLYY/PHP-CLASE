<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuadrados</title>
</head>
<body>
<h1>Cuadrados</h1>
<?php

for ($i = 1; $i <= 30; $i++) {
    $cuadrado = $i * $i;
    echo $i . " su cuadrado es: " . $cuadrado . "<br>";
}

?>
</body>
</html>