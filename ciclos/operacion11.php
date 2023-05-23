<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Los 20 primeros</title>
</head>
<body>
<h1>Los 20 primeros</h1>
<?php
$multiplicar = 1;

for ($i = 1; $i <= 20; $i++) {
    $multiplicar *=$i;
}

echo "multiplicacion de los 20 primeros numeros: " . $multiplicar;

?>
</body>
</html>