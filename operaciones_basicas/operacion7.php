<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area y volumen</title>
</head>
<body>
    <form action="" method="post">
        <h1>Area y volumen de un cilindro</h1>
        <input type="text" name="radio" placeholder="radio"><br><br>
        <input type="text" name="altura" placeholder="Altura"><br><br>
        <input type="submit" value="Calcular" name="btn">
    </form><br><br>
<?php

    if(isset($_POST['btn'])) {

        $radio = $_POST['radio'];
        $altura = $_POST['altura'];

        $areaBase = pi() * pow($radio, 2);

        $radio1 = $radio/2; 
        $resultado1 = 2 * pi() * $radio1;
        $resultado2 = $radio1 + $altura;
        $area = $resultado1 * $resultado2;

        $volumen = $areaBase * $altura;



        echo "El area del cilindro es: ".round($area, 3)." y el volumen es: ".round($volumen, 3);
    }else{
        echo "no hay datos para calcular";
    }


?>
</body>
</html>