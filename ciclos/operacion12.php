<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma de cuadrados</title>
</head>
<body>
<h1>Suma de cuadrados</h1>
<?php
$sumados =1;
for ($i = 1; $i <= 100; $i++) {
    $multiplicar = $i * $i;
    $sumados += $multiplicar;
}

echo "Suma de los 100 primeros cuadrados: " . $sumados;
?>
</body>
</html>