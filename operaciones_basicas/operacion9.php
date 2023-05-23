<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promedios</title>
</head>
<body>
    <form action="" method="post">
        <h1>Promedio de tres numeros</h1>
        <input type="text" name="num1" placeholder="numero 1"><br><br>
        <input type="text" name="num2" placeholder="numero 2"><br><br>
        <input type="text" name="num3" placeholder="numero 3"><br><br>
        <input type="submit" value="Calcular" name="btn">
    </form><br><br>
<?php

    if(isset($_POST['btn'])) {

        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];

        $resultado1 = ($num1 + $num2 + $num3) / 3;

        echo "El promedio de los tres números es: " . round($resultado1, 2);
    }else{
        echo "no hay datos para calcular";
    }


?>
</body>
</html>