<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potenciacion</title>
</head>
<body>
    <form action="" method="post">
        <h1>Potencia entre numeros reales con numeros naturales</h1>
        <input type="text" name="num1" placeholder="numero real"><br><br>
        <input type="text" name="num2" placeholder="numero entero"><br><br>
        <input type="submit" value="Calcular" name="btn">
    </form><br><br>
<?php

    if(isset($_POST['btn'])) {

        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        $resultado1 = pow($num1, $num2);

        echo "El resultado de la potencia es: ".round($resultado1, 2);
    }else{
        echo "no hay datos para calcular";
    }


?>
</body>
</html>